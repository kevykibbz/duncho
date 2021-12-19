<?php
    include 'class.php';
    $obj=new urbanXplore();
    $name=$obj->test_input($_POST['name']);
    $email=$obj->test_input($_POST['email']);
    $phone=$obj->test_input($_POST['phone']);
    $gender=$obj->test_input($_POST['gender']);
    $country=$obj->test_input($_POST['country']);
    $city=$obj->test_input($_POST['city']);
    $address=$obj->test_input($_POST['address']);
    $select_array=['phone'=>$phone];
    $new_img='';
    $success='<script>alert("error");</script>';
    if(!isset($_POST['email']))
    {
        die($success);
    }
    $select=$obj->select('users',$select_array);
    $dbphone=$select[0]['phone'];
    $processed=false;
    if($phone !==$dbphone)
    {
        if($select)
        {
            $success="$('.phone-feedback').html('<i class=".'"fa fa-exclamation-circle"'."></i> A user with that phone number already exists');";
        }
        else
        {
            $processed=true;
        }
    }
    else
    {
        $processed=true;
    }
    if($processed)
    {
        if(!empty($_FILES['profile_img']['name']))
        {
            $ext=explode('.', basename($_FILES['profile_img']['name']));
            $new_img='cholifebrand_'.rand().'_'.date('Y-m-d').'.'.$ext[1];
            $target_dir='../images/profile/';
            $target_file=$target_dir.$new_img;
            $pathinfo=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            $supported_images=['jpg','png','jpeg','gif'];
            if(in_array($pathinfo,$supported_images))
            {
                if(move_uploaded_file($_FILES['profile_img']['tmp_name'], $target_file))
                {
                    $update_array=[
                                    'profile'=>$new_img,
                                    'name'=>$name,
                                    'phone'=>$phone,
                                    'gender'=>$gender,
                                    'country'=>$country,
                                    'city'=>$city,
                                    'address'=>$address
                            ];
                    $condition="email='".$email."'";
                    $update=$obj->update('users',$update_array,$condition);
                    if(!$update)
                    {
                        $success="$('.message').html('<div class=".'"alert alert-danger"'."><i class=".'"fa fa-exclamation-circle"'."></i> Something went wrong</div>');";
                    }
                    else
                    {
                        $success="$('.message').html('<div class=".'"alert alert-success"'."><i class=".'"fa fa-check-circle"'."></i> data updated successfully</div>');";
                    }
                }
                else
                {
                    $success="$('.message').html('<div class=".'"alert alert-danger"'."><i class=".'"fa fa-exclamation-circle"'."></i> Something went wrong</div>');";
                }
            }
            else
            {
                $success="$('.message').html('<div class=".'"alert alert-danger"'."><i class=".'"fa fa-exclamation-circle"'."></i> Unsupported image format</div>');";
            }
        }
        else
        {
            $update_array=[
                                'name'=>$name,
                                'phone'=>$phone,
                                'gender'=>$gender,
                                'country'=>$country,
                                'city'=>$city,
                                'address'=>$address
                            ];
            $condition="email='".$email."'";
            $update=$obj->update('users',$update_array,$condition);
            if(!$update)
            {
                $success="$('.message').html('<div class=".'"alert alert-danger"'."><i class=".'"fa fa-exclamation-circle"'."></i> Something went wrong</div>');";
            }
            else
            {
                $success="$('.message').html('<div class=".'"alert alert-success"'."><i class=".'"fa fa-check-circle"'."></i> data updated successfully</div>');";

            }
        }
    }
    echo $success;

?>