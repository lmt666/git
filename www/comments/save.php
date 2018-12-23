<?php 
require_once '../inc/db.php';
require_once '../inc/common.php';
$sql = "insert into comments(post_id,user_name,title,body,create_at) values(:post_id,:user_name,:title, :body, :create_at);" ;	
$query = $db->prepare($sql);
$query->bindParam(':post_id',$_POST['post_id'],PDO::PARAM_INT);
$query->bindParam(':user_name',$_POST['user_name'],PDO::PARAM_STR);
$query->bindParam(':title',$_POST['title'],PDO::PARAM_STR);
$query->bindParam(':body',$_POST['body'],PDO::PARAM_STR);
$query->bindParam(':create_at',$_POST['create_at'],PDO::PARAM_STR);

if (!$query->execute()) {	
	print_r($query->errorInfo());
}else{
	redirect_to("../category/commodity.php?id=" . $_POST['post_id']);
};
?>