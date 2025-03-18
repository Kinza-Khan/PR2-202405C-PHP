<?php
include("dbcon.php");


$userName = $userEmail = $userPassword = $userConfirmPassword = "" ;
$userNameErr= $userEmailErr = $userPasswordErr = $userConfirmPasswordErr = "" ;
if(isset($_POST['registerUser'])){
    $userName = $_POST['uName'];
    $userEmail = $_POST['uEmail'];
    $userPassword = $_POST['uPassword'];
    $userConfirmPassword = $_POST['uConfirmPassword'];
    if(empty($userName)){
        $userNameErr = "Name is Required" ;
    }
    if(empty($userEmail)){
        $userEmailErr = "Email is Required";
    }
    else{
        $query = $pdo->prepare("select * from users where email = :uEmail");
        $query->bindParam('uEmail',$userEmail);
        $query->execute();
        $user = $query->fetch(PDO::FETCH_ASSOC);
        // print_r($user);
        // die();
        if($user){
             $userEmailErr = "Email is already exist";   
        }

    }
    if(empty($userPassword)){
        $userPasswordErr = "Password is Required";
    }
    if(empty($userConfirmPassword)){
        $userConfirmPasswordErr = "Confirm Password is Required";
    }
    else{
        if($userConfirmPassword != $userPassword){
            $userConfirmPasswordErr = "Password not matched ";
        }
    }

    if(empty($userNameErr) && empty($userEmailErr) && empty($userPasswordErr) && empty($userConfirmPasswordErr)){
                $query = $pdo->prepare("insert into users(name ,email,password) values (:uName , :uEmail , :uPassword)");
                $query->bindParam('uName',$userName);
                $query->bindParam('uEmail',$userEmail);
                $query->bindParam('uPassword',$userPassword);
                $query->execute();
                echo "<script>alert('user added');location.assign('register.php')</script>";
    }

}

?>