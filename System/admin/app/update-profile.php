<?php
require '../../constants/db_config.php';
require '../constants/check-login.php';
$fname = ucwords($_POST['fname']);
$lname = ucwords($_POST['lname']);
$myemail = $_POST['email'];
$title = ucwords($_POST['title']);

    try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
    $stmt = $conn->prepare("SELECT * FROM tbl_users WHERE email = :email AND member_no != '$myid'");
	$stmt->bindParam(':email', $myemail);
    $stmt->execute();
    $result = $stmt->fetchAll();
	$rec = count($result);
	if ($rec == "0") {
	
	$stmt = $conn->prepare("UPDATE tbl_users SET first_name = :fname, last_name = :lname, email = :email WHERE member_no='$myid'");
    $stmt->bindParam(':fname', $fname);
    $stmt->bindParam(':lname', $lname);
	$stmt->bindParam(':email', $myemail);

    $stmt->execute();
	
	$_SESSION['myfname'] = $fname;
	$_SESSION['mylname'] = $lname;
    $_SESSION['myemail'] = $myemail;

    header("location:../?r=9837");
		
	}else{
		
		header("location:../?r=0927");
	}
			  
	}catch(PDOException $e)
    {

    }
	
?>
