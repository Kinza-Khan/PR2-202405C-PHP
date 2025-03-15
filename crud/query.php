<?php
include("dbcon.php");


$userName = $userEmail = $userPassword = $userConfirmPassword = "" ;
$userNameErr= $userEmailErr = $userPasswordErr = $userConfirmPasswordErr = "" ;
if(isset($_POST['registerUser'])){
    $userName = $_POST['uName'];
    $userEmail = $_POST['uEmail'];
    if(empty($userName)){
        $userNameErr = "Name is Required" ;
    }
    if(empty($userEmail)){
        $userEmailErr = "Email is Required";
    }

}

?>