<?php
    include 'class.php';
    $obj=new urbanXplore();
    $name=$obj->test_input($_POST['name']);
    $success='<script>alert("error");</script>';
    if(!isset($_POST['name']))
    {
        die($success);
    }
    $message=$obj->test_input($_POST['message']);
    $select_message=['message'=>$message];
    $fields=[];
    $select=$obj->select('testimonials',$select_message);
    if(!$select)
    {
        array_push($fields,
                            [
                                'name'=>$name,
                                'message'=>$message,
                                'date'=>date('Y-m-d H:i:s')
                            ]);
          $insert=$obj->insert('testimonials',$fields);
          if(!$insert)
          {
            $success="$('.message').html('<div class=".'"alert alert-danger"'."><i class=".'"fa fa-exclamation-circle"'."></i> Something went wrong</div>');";
          }
          else
          {
            $success="$('.message').html('<div class=".'"alert alert-success"'."><i class=".'"fa fa-exclamation-circle"'."></i> Comment sent successfully</div>');$('.comment_form')[0].reset();";
          }
    }
    else
    {
        $success="$('.message').html('<div class=".'"alert alert-danger"'."><i class=".'"fa fa-exclamation-circle"'."></i> Comment found ,please say something else</div>');";
    }
    echo $success;
?>
