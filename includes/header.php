<?php 
    session_start();
    include('config/dblink.php');
    $collect = new DB();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <base href="http://localhost/ADVANCE-MVC-PHP-1/">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        
        <!-- title -->
        <title>Login Page</title>

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/favicon.ico">

        <!-- Custom styles for this template-->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
