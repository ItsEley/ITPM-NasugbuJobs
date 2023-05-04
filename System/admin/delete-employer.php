<?php
require '../constants/db_config.php';
require 'constants/check-login.php';
$memberno = $_GET['member_no'];

try {
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$stmt = $conn->prepare("DELETE FROM tbl_users WHERE member_no = :memberno ");
$stmt->bindParam(':memberno', $memberno);
$stmt->execute();


$stmt = $conn->prepare("DELETE FROM tbl_jobs WHERE company = :memberno");
$stmt->bindParam(':memberno', $memberno);
$stmt->execute();

header("location:../admin/view-employers.php?r=9691");
}catch(PDOException $e)
{
  
}
	
?>