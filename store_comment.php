<?php


session_start();
include('connection.php');


if(isset($_POST['comment_btn'])){

    $user_id=$_SESSION['id'];
    $profile_image=$_SESSION['image'];
    $username=$_SESSION['username'];
    $post_id=$_POST['post_id'];
    $comment_text=$_POST['comment_text'];
    $date=date("Y-m-d H:i:s");


    if(strlen($comment_text) > 200){
        header("location: single_post.php?post_id=".$post_id."&error_message=comment is too long");
        exit;

    }
    
    
    
    $stmt=$conn->prepare("INSERT INTO comments (post_id,user_id,username,profile_image,comment_text,date) VALUES (?,?,?,?,?,?)");
    $stmt->bind_param("iissss",$post_id,$user_id,$username,$profile_image,$comment_text,$date);
    
    if($stmt->execute()){

    header("location : single_post.php?post_id=".$post_id."&success_message=comment was submitted successfully");
    
    }else{
        header("location :single_post.php?post_id=".$post_id."&error_message=couldn't submit comment");
     
    }

    exit;
    
        
}else{
    header("location: index.php");
    exit;
}


?>