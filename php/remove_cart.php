<?php
	include 'class.php';
	$obj=new urbanXplore();
	$error=$success=$user='';
	$id=$obj->test_input($_POST['id']);
	$select_item=['id'=>$id];
	$fields=[];
    $select=$obj->select('cart',$select_item);
    if($select)
    {
  		$condition="id='".$id."'";
  		$delete=$obj->delete('cart_items',$condition);
  		if($delete)
  		{
  			$success='product removed from cart successfully';
  		}
  		else
  		{
  			$error='Something went wrong';
  		}
  		echo json_encode(['error'=>$error,'success'=>$success]);
    }
?>