<?php
    include 'class.php';
    include 'user.php';
    $obj=new urbanXplore();
    $success='<script>alert("error");</script>';
    $email=$obj->test_input($_POST['email']);
    if(!isset($_POST['email']))
    {
        die($success);
    }
    $name=$obj->test_input($_POST['name']);
    $subject=$obj->test_input($_POST['subject']);
    $descreption=$obj->test_input($_POST['message']);

    // Construct subject of the email
    require 'contactus.php';
    $data=[
                    'email'=>'info@chillcash.co.ke',
                    'password'=>'****************',
                    'title'=>$user['site_name'],
                    'subject'=>$subject,
                    'to'=>$email,
                    'message'=>$message
                    ];
    $sendmail=$obj->send_email($data);
    if($sendmail)
    {
        $success="$('.message').html('<div class=".'"alert alert-success"'."><i class=".'"fa fa-exclamation-circle"'."></i> Message sent!</div>');$('.contact_form')[0].reset();";

    }
    else
    {
        $success="$('.message').html('<div class=".'"alert alert-danger"'."><i class=".'"fa fa-exclamation-circle"'."></i> Message not sent!</div>');";
    }
    echo $success;
?>