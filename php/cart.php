<?php
	include 'class.php';
	$obj=new urbanXplore();
	$email=$obj->test_input($_POST['email']);
	$success='<script>alert("error");</script>';
    if(!isset($_POST['email']))
    {
        die($success);
    }
	$id=$obj->test_input($_POST['id']);
	$select_item=['id'=>$id];
	$fields=[];
    $select=$obj->select('cart',$select_item);
    if($select)
    {
    	$select1=$obj->select('cart_items',$select_item);
	    if(!$select1)
	    {
	    	array_push($fields,
	      					[
	      						'id'=>$id,
	      						'email'=>$email,
	      						'item'=>$select[0]['item'],
	      						'price'=>$select[0]['price'],
	      						'date'=>date('Y-m-d H:i:s'),
	      					]);
	        $insert=$obj->insert('cart_items',$fields);
	      if(!$insert)
	      {
            $success="$('.cart-message').html('<div class=".'"alert alert-danger"'."><i class=".'"fa fa-exclamation-circle"'."></i> Something went wrong</div>');";
	      }
	      else
	      {
            $success="$('.cart-message').html('<div class=".'"alert alert-success"'."><i class=".'"fa fa-check-circle"'."></i> Added to cart successfully</div>');window.location='index.php#cart-message'";
	      }
	    }
	    echo $success;
    }
?>