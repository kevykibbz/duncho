<?php
    include 'class.php';
    $obj=new urbanXplore();
    $email=$obj->test_input(md5($_POST['email']));
    $newpassword=$obj->test_input(md5($_POST['password']));
    $fields=[];
    if(!isset($_POST['email']))
    {
        die($success);
    }
    $update_array=['password'=>$newpassword];
    $condition="email='".$email."'";
    $update=$obj->update('users',$update_array,$condition);
    if($update)
    {
        $success="$('.message').html('<div class=".'"alert alert-success"'."><i class=".'"fa fa-exclamation-circle"'."></i> Password changed successfully</div>');$('.password_form')[0].reset();";
    }
    else
    {
        $success="$('.message').html('<div class=".'"alert alert-danger"'."><i class=".'"fa fa-exclamation-circle"'."></i> Something went wrong</div>');";
    }
    echo $success;
?>