﻿<?php 
header("Content-Type: text/html; charset=UTF-8");
session_start();
require_once("../conf/dbInfo.php");
$conn = dbConn();
mysqli_query($conn,'SET NAMES utf8');
$id = $_POST['id'];
$pws = $_POST['password'];

//나중에 패스워드 암호화? mb5

$sql = "SELECT *from adminlogin where id = '$id' and password = '$pws'";
$res = $conn->query($sql);
if (false === $res) {
    echo mysqli_error();
}
$row = mysqli_fetch_array($res);

if($res -> num_rows > 0) {
$_SESSION['id'] = $id;
$_SESSION['nickname'] = $row["nickname"];
if(isset($_SESSION['id']) && isset($_SESSION['nickname'])) {
echo "<script>location.href='board.php';</script>";
} else {
echo "<script>alert('로그인 실패!');</script>";
    echo "<script>location.href='login.html';</script>";
}
} else {
    echo "<script>alert('로그인 실패!!');</script>";
    echo "<script>location.href='login.html';</script>";
}
?>