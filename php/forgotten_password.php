<?php
    include 'class.php';
    $obj=new urbanXplore();
    
        $email=$obj->test_input($_POST['email']);
        $table='users';
        $success='<script>alert("error");</script>';
	    if(!isset($_POST['email']))
	    {
	        die($success);
	    }
        $reset_password=$obj->generateRandomString(6);
        $dbpassword=md5($reset_password);
        $condition="email='".$email."'";
        $select_email=['email'=>$email];
        $select=$obj->select('users',$select_email);
        if($select)
    	{
    		$name=$select[0]['name'];
    		$update=$obj->update('users',['password'=>$dbpassword],$condition);
	        if($update)
	        {
	        	$base_url=strpos($_SERVER['SERVER_PROTOCOL'],'https')===0 ? 'https://':'http://'.$_SERVER['SERVER_NAME'].'/duncho/';
	            $file='login.php';
	            $reset_url=$base_url.$file.'?email='.$email.'&reset_password='.$reset_password;
	        	include 'email.php';
	            $update=$obj->update($table,['password'=>$dbpassword],$condition);
	            if($update)
	            {
	            	$data=[
		                    'email'=>'info@chillcash.co.ke',
		                    'password'=>'****************',
		                    'title'=>'Cholifebrand',
		                    'subject'=>'forgotten password ?',
		                    'to'=>$email,
		                    'message'=>$message
	                    ];
	                $sendmail=$obj->send_email($data);
	                if($sendmail)
	                {
	                    $success="$('.message').html('<div class=".'"alert alert-success"'."><i class=".'"fa fa-exclamation-circle"'."></i> Password reset link sent!</div>');";
	                }
	                else
	                {
	                    $success="$('.message').html('<div class=".'"alert alert-danger"'."><i class=".'"fa fa-exclamation-circle"'."></i> Password reset link  not sent!</div>');";
	                }
	            }
	            else
	            {
	                    $success="$('.message').html('<div class=".'"alert alert-danger"'."><i class=".'"fa fa-exclamation-circle"'."></i> Something went wrong</div>');";
	            }  
	        }
    	}
    	else
    	{
    		$success="$('.femail-feedback').html('<i class=".'"fa fa-exclamation-circle"'."></i>email address not found');";
    	}
    	echo $success;
?>