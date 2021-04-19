<?php

session_start();

include "regix.php";

function VALIDE($table,$arr){
    $exectution = new VALIDE_RG();
    if($exectution->INFORMATIONS($table,$arr) == true){
        return true;
    }
    else{
        $_SESSION['regix_not_valide']="regix_not_valide";
    }
    return false;
}

function CHECK ($table,$arr){
        $check_if_exist = new CRUD($table);
        $exist = $check_if_exist->select("yes", $arr);
        return $exist;
    }

function INSERT($table,$arr){
   $exectution = new INSER_DATA();   
   $exectution->INFORMATIONS($table,$arr);
}



////////////// inscription users

// valide regix => check if exist => insert

if(isset($_POST["btn_inscri"]))
{
    /// getting the informations
    $Fname = $_POST["FirstName"];
    $Lname = $_POST["LastName"];
    $PhoneNumber = $_POST["PhoneNumber"];
    $Email = $_POST["Email"];
    $Password = $_POST["Password"];
    $table = "inscription_user";
    /// create new object from class CRUD

        $arr = ["LastName" => $Lname , "FirstName" => $Fname , "PhoneNumber" => $PhoneNumber , "Email" => $Email  , "password" => $Password ];
        // if REGIX IS VALIDE 
        $RG_VALIDE = VALIDE($table,$arr);
        if($RG_VALIDE){
            $exist_email = CHECK($table,["Email" => $Email]);
            if($exist_email == 0 )
            {
                INSERT($table,$arr);
                $_SESSION['inscription']="inscription";
            }
            else{
                $_SESSION['email_exist']="email_exist";
            }
        }
        
        header('Location:../vue/index.php');
}


////////// message contact us

// valide regix =>  insert


if(isset($_POST["btn_contact_us"]))
{
    //// getting the informations
    $Name = $_POST["Name"];
    $Email = $_POST["Email"];
    $Subject = $_POST["Subject"];
    $Message = $_POST["Messsage"];
    $table = "contact";

    $arr = ["name" => $Name ,"Email" => $Email  , "subject" => $Subject, "message" => $Message ];
    $RG_VALIDE = VALIDE($table,$arr);
    if($RG_VALIDE){
        INSERT($table,$arr);
        $_SESSION['send_message']="send_messgae";
    }
    else{
        $_SESSION['send_not_message']="send_not_messgae";

    }
    header('Location:../vue/index.php');

}



///////// login users


/// valide regix=> check

if(isset($_POST["btn_login"]))
{
    $Email = $_POST["Email"];
    $Password = $_POST["Password"];
    $table = "inscription_user";
    $arr = ["email" => $Email  , "password" => $Password ];

    $RG_VALIDE = VALIDE($table,$arr);
    if($RG_VALIDE){
        $exist_email = CHECK($table,$arr);
        if( $exist_email == 1)
        {
            $_SESSION['login']="login";
        }
        else{
            $_SESSION['email_password_wrong']='email_password_wrong';
        }

    }

    header('Location:../vue/index.php');

}


?>