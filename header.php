<!DOCTYPE HTML>

<html lang="en">

<?php

    session_start();
    include("config.php");
    
    // Connect to database...
    
    $dbconnect=mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
    
    if (mysqli_connect_errno())
    
    {
        echo "Connection failed:".mysqli_connect_error();
        exit;
        
    }
    
?>
    
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Put Content Here">
    <meta name="keywords" content="Put keywords here">
    <meta name="author" content="Put your name here">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Book Review Database</title>
   
    <!-- Edit the link below / replace with your chosen google font -->
    <link href="https://fonts.googleapis.com/css?family=Lato%7cUbuntu" rel="stylesheet">
   
    <!-- Edit the name of your style sheet - 'foo' is not a valid name!! -->
    <link rel="stylesheet" href="no_side.css">
   
</head>
   
<body>
   
    <div class="wrapper">
   
        <a href="index.php">
            <div class="box logo">
           
            </div>    <!-- / logo -->
        </a>
       
        <div class="box banner">
            
            <h1>Orchid Reading</h1>

        </div>    <!-- / banner -->

        <div class="box nav">
            <a href="index.php">Home</a> |
            <a href="page1.php">Page 1</a> |
            <a href="page2.php">Page 2</a> |
            <a href="page3.php">Page 3</a> |
            <a href="contact.php">Contact</a>
        </div>    <!-- / nav -->