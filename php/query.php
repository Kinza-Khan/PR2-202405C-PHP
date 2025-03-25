<?php
include("dbcon.php");
session_start();

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

// user Login
if(isset($_POST['userLogin'])){
        $userEmail = $_POST['uEmail'];
        $userPassword = $_POST['uPassword'];
        if(empty($userEmail)){
                $userEmailErr = "Email is Required";
        }
        else{
            $query = $pdo->prepare("select * from users where email = :uEmail");
            $query->bindParam('uEmail',$userEmail);
            $query->execute();
            $user = $query->fetch(PDO::FETCH_ASSOC);
            if($user){
                if($user['password'] == $userPassword){
                        if($user['role_id'] == 1){
                            $_SESSION['adminId'] = $user['id'];
                            $_SESSION['adminEmail'] = $user['email'];
                            $_SESSION['adminName'] = $user['name'];
                            $_SESSION['adminRole'] = $user['role_id'];
                            echo "<script>location.assign('adminPanel/index.php?success=login successfully admin')</script>";
                        }
                        else if($user['role_id'] == 2){
                            $_SESSION['userId'] = $user['id'];
                            $_SESSION['userName'] = $user['name'];
                            $_SESSION['userEmail'] = $user['email'];
                            $_SESSION['userRole'] = $user['role_id'];
                            echo "<script>location.assign('index.php?success=login successfully user')</script>";
                        }
                }   
                else{
                    $userPasswordErr = "Password does not matched" ;
                }
            }
            else{
                $userEmailErr = "user not found" ;
            }
        }
        if(empty($userPassword)){
            $userPasswordErr = "Password is Required";
        }
}

?>