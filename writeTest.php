<?php
require_once("../conf/dbInfo.php");
$conn = dbConn();
mysqli_query($conn, 'SET NAMES utf8');

$boardContent = $_POST['contents'];
$boardTitle = $conn->real_escape_string($_POST['title']);
$file = $_POST['files'];

$boardDate = date("Y-m-d H:i:s");




$sql = "insert into board(title, content, date) VALUES ('$boardContent','$boardTitle', '$boardDate')";
$result = $conn->query($sql);
/*if($result===false){
    echo "<script>
          alert('글쓰기에 실패하였습니다.');
          history.back();
        </script>";
}else{
    $boardIndex = mysqli_insert_id($conn);
    header('Location: board.php');
    exit;
}*/




?>