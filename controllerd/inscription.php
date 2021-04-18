<?php

include "regix.php";


function VALIDE_INSERT($table , $arr){
    //  create new object from table VALIDE REGIX
    $exectution = new VALIDE_RG();
    // if REGIX IS VALIDE 
    if($exectution->INFORMATIONS($table,$arr)){
        //create new object from table INSERT_DATA
        $exectution = new INSER_DATA();   
        $exectution->INFORMATIONS($table,$arr);
    }
}


function VALIDE_CHECK($table,$arr){
    $exectution = new VALIDE_RG();
    if($exectution->INFORMATIONS($table,$arr)){
        $check_if_exist = new CRUD($table);
        //// methode to check if this email is existing or noot !
        $exist = $check_if_exist->select("yes", $arr);
        return $exist;
    }
    else{
        echo "regix not valide";
    }
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


    // if(!($exist)){
        $arr = ["LastName" => $Lname , "FirstName" => $Fname , "PhoneNumber" => $PhoneNumber , "Email" => $Email  , "password" => $Password ];
        // if REGIX IS VALIDE 
        $exist = VALIDE_CHECK($table,["email" => $Email]);
        if(!($exist)){
            $exectution = new INSER_DATA();   
            $exectution->INFORMATIONS($table,$arr);
        }
        else{
            echo "email exist";
        }
        

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
    VALIDE_INSERT($table , $arr);
}



///////// login users


/// valide => check

if(isset($_POST["btn_login"]))
{
    $Email = $_POST["Email"];
    $Password = $_POST["Password"];
    $table = "inscription_user";
    $arr = ["email" => $Email  , "password" => $Password ];

    $exist = VALIDE_CHECK($table,$arr);
    if($exist){
        echo "congratulations !!";
    }
    else{
        echo "email OR password not exist";
    }

}


?>