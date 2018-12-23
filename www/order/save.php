<?php 
        require_once '../inc/db.php';
        require_once '../inc/common.php';
        require_once '../inc/session.php';
        $query = $db->query('select * from cart');
        $status = '未发货';
        while ($post= $query->fetchObject()){
          ?>
        <?php 
          $sql = "insert into orders(user_id,name,price,num,total,status) values(:user_id,:name,:price,:num,:total,:status)" ; 
          $q = $db->prepare($sql);
          $q->bindParam(':user_id',$_SESSION['userid'],PDO::PARAM_INT);
          $q->bindParam(':name',$post->name,PDO::PARAM_STR);
          $q->bindParam(':price',$post->price,PDO::PARAM_INT);
          $q->bindParam(':num',$post->num,PDO::PARAM_INT);
          $q->bindParam(':total',$post->total,PDO::PARAM_INT);
          $q->bindParam(':status',$status,PDO::PARAM_STR);
          if (!$q->execute()) { 
            print_r($q->errorInfo());
          };
        }
        redirect_to("../cart/num/clean.php");
        ?>
          
          



