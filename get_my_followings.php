<?php


include('connection.php');

$user_id = $_SESSION['id'];
$stmt = $conn->prepare("SELECT other_user_id FROM followings WHERE user_id = ?");
$stmt->bind_param("i",$user_id);
$stmt->execute(); 

$ids =array();

$result = $stmt->get_result();
while($row = $result->fetch_array(MYSQLI_NUM)){
    foreach($row as $r){
        $ids[] = $r;
    }
}

if(empty($ids)){
    $ids=[1];
}

$following_ids = join(",",$ids); // seperate the id's


$stmt = $conn->prepare("SELECT * FROM users WHERE id  in ($following_ids) ORDER BY RAND() LIMIT 100 ");


$stmt->execute();

$other_people = $stmt->get_result();







?>