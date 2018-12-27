<?php 
	require_once $_SERVER['DOCUMENT_ROOT'] . '/inc/db.php';
	require_once $_SERVER['DOCUMENT_ROOT'] . '/inc/common.php';
	
	$sql="delete from adress where id = :id";
	$query=$db->prepare($sql);
	$query->bindParam(':id',$_POST['id'],PDO::PARAM_INT);
	if(!$query->execute()){
		print_r($query->errorInfo);
	}else{
		redirect_to('./');
	}



 ?>