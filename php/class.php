<?php
	
	define('server','localhost');
	define('username','root');
	define('password','');
	define('dbname','duncho');
	date_default_timezone_set('Africa/Nairobi');
	// private $server='localhost';
	// private $username='root';
	// private $password='';
	// private $dbname='musiq';

	require 'PHPMailer-master/src/PHPMailer.php';
    require 'PHPMailer-master/src/SMTP.php';
    require 'PHPMailer-master/src/Exception.php';
    class urbanXplore
	{
		/*db connect*/
		function __construct()
	 	{   global $con;
	 		$con=new mysqli(server,username,password,dbname);
	 		if($con->connect_errno)
	 		{
	 			die('Error:Connection To The Database Cannot Be Established');
	 		}
	 		else
	 		{
	 			$this->con=$con;
	 		}

	 	}


	 	/*destruct db connections*/
	 	function __destruct () 
	 	{
			$this->con->close();
		}





		/*sanitize data*/
		public function test_input($data)
	    {
	        $data=trim($data);
	        $data=strtolower($data);
	        $data=stripcslashes($data);
	        $data=htmlspecialchars($data);
	        $data=$this->con->real_escape_string($data);
	        return $data;
	    }




	    /*db get data*/
	    public function select($table,$data,$condition='')
	    {
	    	$sql='';
	      	if($data !==null)
	      	{
	      		if(count($data) >1)
		      	{
		      		$columns = '';
		            $x = 1;
		            foreach($data as $key => $value)
		            {
		                $columns .= "$key='$value'";
		                if($x < count($data))
		                {
		                    $columns .= " AND ";
		                }
		                $x++;
		            }
		            $sql="SELECT * FROM ".$table." WHERE ".$columns." ".$condition;
		      	}
		      	else
		      	{
		      		$keys=array_keys($data);
		      		$values=array_values($data);
		      		$sql="SELECT * FROM ".$table." WHERE ".$keys[0]."='".$values[0]."' ".$condition;
		      	}
		      	$query=$this->con->prepare($sql);
		      	$query->execute();
		       	$result=$query->get_result();
		       	if($result->num_rows >0)
		       	{
		       		return $result->fetch_all(MYSQLI_ASSOC);
		       	}
		       	else
		       	{
		       		return false;
		       	}
	      	}
	      	return false;
	    }



	    /*insert into db*/
	    public function insert($table,$query_data=array())
	    {
	    	$sql='';
	    	$mutlti_query=false;
	    	if($query_data !=null)
	        {
	        	if(count($query_data) >1)
		      	{
		      		$columns = '';
		      		for($i=0;$i<count($query_data);$i++)
		      		{
		      			$fields=array_keys($query_data[$i]);
		      			$vals=array_values($query_data[$i]);
		      			$sql.="INSERT INTO $table(".implode(',', $fields).")VALUES('".implode("','",$vals)."');";
		      		}
		      		$mutlti_query=true;
		      	}
		      	else
		      	{
		      		$fields=array_keys($query_data[0]);
		      		$sql.="INSERT INTO $table(".implode(',', $fields).")VALUES('".implode("','",$query_data[0])."')";
		      	}
	        	if($mutlti_query)
	        	{
	        		if($this->con->multi_query($sql))
	        		{
	        			return true;
	        		}
	        		else
	        		{
	        			return $this->con->error;
	        		}
	        	}
	        	else
	        	{
	        		$query=$this->con->prepare($sql);
		      		if($query->execute())
		      		{
		      			return true;
		      		}
		      		else
	        		{
	        			return $this->con->error;
	        		}
	        	}
	        }
	        return false;
	      	
	    }

	    /*generate name initials*/
	    public function generate(string $name) : string
		{
		    $words = explode(' ', $name);
		    return strtolower(substr($words[0], 0, 1) . substr(end($words), 0, 1));
		}

		public function update($table, $array = array(), $condition)
	    {
	        if($array !=null)
	        {
	            $columns = '';
	            $x = 1;
	            foreach($array as $key => $value)
	            {
	                $columns .= "$key='$value'";
	                if($x < count($array))
	                {
	                    $columns .= ",";
	                }
	                $x++;
	            }
	            $sql="UPDATE $table SET $columns WHERE $condition";
	            $query =$this->con->prepare($sql);
	            if($query->execute())
	            {
	                return true;
	            }
	            else
	            {
	                return false;
	            }
	        }
	        return false;
	    }
	    public function delete($table,$condition)
	    {
	        if($table !=null)
	        {
	            $sql="DELETE FROM $table  WHERE $condition";
	            $query =$this->con->prepare($sql);
	            if($query->execute())
	            {
	                return true;
	            }
	            else
	            {
	                return false;
	            }
	           
	        }
	        return false;
	    }

	    public function send_email($data=array())
	    {
	    	$EMAIL=$data['email'];
	    	$PASSWORD=$data['password'];
	    	$title=$data['title'];
	    	$subject=$data['subject'];
	    	$message=$data['message'];
	    	$to=$data['to'];
	        $mail = new PHPMailer\PHPMailer\PHPMailer(true);
            try 
            {
                $mail->isSMTP(); // using SMTP protocol
                //$mail->SMTPDebug=SMTP::DEBUG_SERVER;
                //$mail->SMTPDebug=2;//alternative to above 
                $mail->Host = 'mail.chillcash.co.ke'; // SMTP host as gmail
                $mail->SMTPAuth = true;  // enable smtp authentication
                $mail->Username = $EMAIL;  // sender gmail host
                $mail->Password =$PASSWORD; // sender gmail host password
                $mail->SMTPSecure = 'tls';  // for encrypted connection
                $mail->Port = 587;   // port for SMTP
                $mail->setFrom($EMAIL,$title); // sender's email and name
                $mail->addAddress($to);  // receiver's email and name
                $mail->isHTML(true);
                $mail->Subject =$subject;
                $mail->Body = $message;
                if($mail->send())
                {
                    return true;
                }
            }
            catch (Exception $e)
            { 
                // handle error.
                return false;
            }
	    }

	    public function generateRandomString($length = 25)
	    {
		    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		    $charactersLength = strlen($characters);
		    $randomString = '';
		    for ($i = 0; $i < $length; $i++)
		    {
		        $randomString .= $characters[rand(0, $charactersLength - 1)];
		    }
		    return $randomString;
		}

		public function getLocationInfoByIp()
		{
		    $client  = @$_SERVER['HTTP_CLIENT_IP'];
		    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
		    $remote  = @$_SERVER['REMOTE_ADDR'];
		    $result  = array('country'=>'', 'city'=>'');
		    if(filter_var($client, FILTER_VALIDATE_IP))
		    {
		        $ip = $client;
		    }
		    elseif(filter_var($forward, FILTER_VALIDATE_IP))
		    {
		        $ip = $forward;
		    }
		    else
		    {
		        $ip = $remote;
		    }
		    $ip_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));    
		    if($ip_data && $ip_data->geoplugin_countryName != null)
		    {
		        $result['country'] = $ip_data->geoplugin_countryCode;
		        $result['city'] = $ip_data->geoplugin_city;
		    }
		    return $result;
		}

		public  function time_diff($timestamp)
      	{
	         $time=strtotime($timestamp);
	         $current_time=time();
	         $time_diff=$current_time-$time;
	         /*now*/
	         $seconds=$time_diff;
	         $minutes=round($seconds/60);
	         $hours=round($seconds/3600);
	         $days=round($seconds/86400);
	          $weeks=round($seconds/604800);
	          $months=round($seconds/2629440);
	          $years=round($seconds/31553280);
	          if($seconds <=60)
	          {
	            return "just now";
	          }
	          else if($minutes <=60)
	          {
	             if($minutes==1)
	             {
	                return "one minute ago";
	             }else
	             {
	              return $minutes." "."minutes ago";
	             }
	          }
	          else if($hours <=24)
	          {
	             if($hours==1)
	             {
	                return "one hour ago";
	             }else
	             {
	              return $hours." "."hours ago";
	             }
	          }
	          else if($days <=7)
	          {
	             if($days==1)
	             {
	                return "yesterday";
	             }else
	             {
	              return $days." "."days ago";
	             }
	          }
	          else if($weeks <=4.3)
	          {
	             if($weeks==1)
	             {
	                return "one week ago";
	             }else
	             {
	              return $weeks." "."weeks ago";
	             }
	          }
	          else if($months <=12)
	          {
	             if($months==1)
	             {
	                return "one month ago";
	             }else
	             {
	              return $months." "."months ago";
	             }
	          }
	          else 
	          {
	             if($years==1)
	             {
	                return "one year ago";
	             }else
	             {
	              return $years." "."years ago";
	             }
	          }
        }

	}

?>