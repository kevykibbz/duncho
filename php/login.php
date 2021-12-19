<?php
    include 'class.php';
    $obj=new urbanXplore();
    $success='<script>alert("error");</script>';
    if(!isset($_POST['email']))
    {
        die($success);
    }
    $email=$obj->test_input($_POST['email']);
    $password=$obj->test_input(md5($_POST['password']));
    $select_email=['email'=>$email];
    $select=$obj->select('users',$select_email);
    if($select)
    {
        $select_password=['email'=>$email,'password'=>$password];
        $select=$obj->select('users',$select_password);
        if($select)
        {
            $success=" $('.login_form')[0].reset();localStorage.userid='".$email."';localStorage.name='".$select[0]['name']."';localStorage.country='".$select[0]['country']."';localStorage.city='".$select[0]['city']."';localStorage.address='".$select[0]['address']."';localStorage.profile='".$select[0]['profile']."';localStorage.phone='".$select[0]['phone']."';localStorage.gender='".$select[0]['gender']."';window.location='index.php';";
        }
        else
        {
            $success="$('.lpassword-feedback').html('<i class=".'"fa fa-exclamation-circle"'."></i> Wrong password');";
        }
    }
    else
    {
        $success="$('.lemail-feedback').html('<i class=".'"fa fa-exclamation-circle"'."></i> Wrong email');";
    }
    echo $success;
?>