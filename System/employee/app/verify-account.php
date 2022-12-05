<?php
require '../../constants/settings.php';
require '../../constants/db_config.php';
require '../constants/check-login.php';
$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
if (isset($_SESSION['logged']) && $_SESSION['logged'] == true) {

$myid = $_SESSION['myid'];
$mylname = $_SESSION['mylname'];	
$myemail = $_SESSION['myemail'];
$myrole = $_SESSION['role'];


if ($_FILES["image"]["size"] > 1000000) {
    header("location:../?r=3478");
}else{
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      
        $stmt = $conn->prepare("SELECT * FROM tbl_verify WHERE member_no'=$myid'");
        $stmt->execute();
        $result = $stmt->fetchAll();
        $rec = count($result);
        
        if ($rec == 0) {

                    try {
                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    
                    $stmt = $conn->prepare("INSERT INTO tbl_verify (member_no,first_name,last_name,email,role,img_id)
                    VALUES (:memberno,:fname,:lname,:email,:role,'$image')");
                    $stmt->bindParam(':memberno', $myid);
                    $stmt->bindParam(':fname', $myfname);
                    $stmt->bindParam(':lname', $mylname);
                    $stmt->bindParam(':email', $myemail);
                    $stmt->bindParam(':role', $myrole);
                    $stmt->execute();
                    header("location:../verify-account.php?r=1020");	
                    print '<br>
                    <div class="alert alert-success">
                    You have successfully applied for verification.
                    </div>
                    ';
                                    
                    }catch(PDOException $e)
                    {

                    }
                    
                        
                    }else{
                    foreach($result as $row)
                    {
                    print '<br>
                    <div class="alert alert-warning">
                    You have already applied this verification.
                    </div>
                    ';
                    header("location:../verify-account.php?r=1021");	
                    }	
    
}


                  
}catch(PDOException $e)
{

}
}

    
	
}

?>