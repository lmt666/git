<?php
require_once '../inc/db.php';
require_once '../inc/common.php';
$sql = 	"delete from cart where id = :id" ;
$query = $db->prepare($sql);
$query->bindValue(':id',$_GET['id'],PDO::PARAM_INT);
if (!$query->execute()) {
	print_r($query->errorInfo());
}else{
	redirect_to("cart.php");
};
?>