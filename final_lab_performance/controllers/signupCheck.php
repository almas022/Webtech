<?php 
    session_start();
    //include('db.php');
    //include_once('db.php');
    //require "db.php";
    require_once "../models/userModel.php";

    if(isset($_REQUEST['submit'])){
    
        $username = $_REQUEST['username'];
        $email = $_REQUEST['email'];
        $phone = $_REQUEST['phone'];
        $dob = $_REQUEST['dob'];
        $password = $_REQUEST['password'];


        if($username == "" && $email == "" && $phone == "" && $dob == "" && $password == ""){
            echo "Null username/password/email";
        }else{
            $user = ['username'=> $username, 'email'=> $email, 'phone'=> $phone,'dob'=> $dob, 'password'=> $password];
            $status = addUser($user);
            if($status){
                header('location: ../views/login.php');
            }else{
                echo "DB error, try again";
            }
        }
    }else{
        echo "invalid request!";
    }
?>