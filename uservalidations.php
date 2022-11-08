<?php

session_start();

include 'db/conn.php';


if (isset($_POST['btnregister'])) {


    $username = $_POST['username'];
    $emailid = $_POST['emailid'];
    $password = $_POST['password'];
    $phoneno = $_POST['contactno'];
    $userrole = 1;
    $countrycode = '91';
    $usertype = 'admin';


    //calling insert 
    $isSuccess = $crud->insert($username, $emailid, $phoneno, $userrole, $password, $countrycode);

    if ($isSuccess) {


        header("Location: index.php");
        //  echo "user registered successfully";
    } else {
        //echo "fail to regiser";
        header("Location: signin.php");
    }
}

if (isset($_POST['submitLogin'])) {
    $emailid = $_POST['emailid'];
    $password = $_POST['password'];

    //calling insert 
    $isSuccess = $crud->validateLoginUser($emailid,  $password);

    if ($isSuccess) {

        header("Location: index.php");

        //echo "user registered successfully";
    } else {
        //echo "fail to regiser";

        header("Location: signin.php");
    }
}

if (isset($_GET['logout'])) {

    header("Location: signin.php");
    unset($_SESSION['logged_in']);
    session_destroy();
}
