<?php 
require_once '../inc/common.php';
require_once '../inc/db.php';

$id=$_GET['co_id'];
$sql="update commodity set stock = stock + :num where id= :id;";
$query=$db->prepare($sql);
$query->bindParam(':num',$_GET['num'],PDO::PARAM_INT);
echo $query->bindParam(':id',$id,PDO::PARAM_INT);
if(!$query->execute()){
	print_r($query->errorInfo());
}else{
	redirect_to("clean.php?id=". $_GET['id']);
}

 ?>