<?php
require_once("borderless_connect.php");

if(!isset($_GET["id"])){
    echo "請循正常管道進入此頁";
    exit;
}

$id=$_GET["id"];
$title=$_POST["title"];
$content=$_POST["content"];
$created_time=$_POST["created_time"];
$updated_time=$_POST["updated_time"];
// $img=$_POST["img"];
// echo $name;
// var_dump($img);

$sql="UPDATE article SET title='$title', content='$content', created_time='$created_time', updated_time='$updated_time' WHERE id=$id";
echo $sql;
// if ($conn->query($sql) === TRUE) {
//     // echo "更新成功";
//    echo header("location: article-edit.php?id=$id");
// } else {
//     echo "更新資料錯誤: " . $conn->error;
// }

// $conn->close();

// header("location: article.php?id=$id");

