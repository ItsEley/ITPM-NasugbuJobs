<?php
if(isset($_POST["reset-pass-submit"])){

    $selector= bin2hex(random_bytes(8));
    $token = random_bytes(32);
    $url = "www.nasugbujobs.com/forgot-password/reset.php?selector=".$selector."&validator=".bin2hex($token);

    $expire = date("U") + 1800;

}else{

    header("location:index-test.php ");
}
?>