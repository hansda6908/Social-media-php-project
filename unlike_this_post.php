<?php

session_start();
include('connection.php');

if(isset($_POST['heart_btn'])){

$user_id= $_SESSION['id'];
$post_id=$_POST['post_id'];

// deassociate user with posts

$stmt = $conn->prepare("DELETE FROM likes WHERE user_id = ? AND post_id = ?");
$stmt->bind_param("ii",$user_id,$post_id);

//decrease the number of likes
$stmt1 = $conn->prepare("UPDATE posts SET likes=likes-1 WHERE id=?");
$stmt1->bind_param("i",$post_id);




$stmt->execute();
$stmt1->execute();




header("location : index.php?success_message=You've unliked this post");
exit;


}else{
    header("location: index.php");
    exit;
}


?>