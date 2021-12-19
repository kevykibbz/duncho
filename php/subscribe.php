<?php
   include 'class.php';
   $obj=new urbanXplore();
   $success='<script>alert("error");</script>';
      $email=$obj->test_input($_POST['email']);
    if(!isset($_POST['email']))
    {
        die($success);
    }  $name=$obj->test_input($_POST['name']);
   $fields=[];
   $select_array=['email'=>$email];
   $select=$obj->select('subscribers',$select_array);
   if(!$select)
   {
      array_push($fields,['email'=>$email,'date'=>date('Y-m-d H:i:s')]);
      $insert=$obj->insert('subscribers',$fields);
      if(!$insert)
      {
         $error=$insert;
      }
      else
      {
         $success="$('.subscribe-message').html('<div class=".'"alert alert-success"'."><i class=".'"fa fa-exclamation-circle"'."></i> Subscribed successfully</div>');$('.subscribe_form')[0].reset();";
      }
   }
   else
   {
      $error="You have already subscribed";
      $success="$('.subscribe-message').html('<div class=".'"alert alert-danger"'."><i class=".'"fa fa-exclamation-circle"'."></i> You have already subscribed</div>');";
   }
   echo $success;

?>