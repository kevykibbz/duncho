<?php
	include 'class.php';
	$obj=new urbanXplore();
	$success='<script>alert("error");</script>';
    if(!isset($_POST['email']))
    {
        die($success);
    }
	$email=$obj->test_input($_POST['email']);
 	$name=$obj->test_input($_POST['name']);
 	$password=$obj->test_input(md5($_POST['password']));
 	$countryinfo=$obj->getLocationInfoByIp();
 	$country=$countryinfo['country'];
 	$city=$countryinfo['city'];
 	$fields=[];
  	$select_email=['email'=>$email];
  	$select=$obj->select('users',$select_email);
	if(!$select)
	{
		array_push($fields,
	      					[
	      						'name'=>$name,
	      						'email'=>$email,
	      						'password'=>$password,
	      						'country'=>$country,
	      						'city'=>$city,
	      						'date'=>date('Y-m-d H:i:s'),
	      					]);
	      $insert=$obj->insert('users',$fields);
	      if(!$insert)
	      {
        	$success="$('.message').html('<i class=".'"fa fa-exclamation-circle"'."></i> Something went wrong.');";
	      }
	      else
	      {
	        $success=" $('.register_form')[0].reset();window.location='login.php';";
	      }
	}
	else
	{
        $success="$('.email-feedback').html('<i class=".'"fa fa-exclamation-circle"'."></i> A user with email address already exist');";
	}
	echo $success;
?>