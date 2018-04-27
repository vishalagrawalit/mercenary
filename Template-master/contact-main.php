<?php

include('login/php/connection.php');
$fname = $_POST['first-name'];
$lname = $_POST['last-name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$contact_query = "INSERT INTO contacts (fname, lname, email, phone, mess) VALUES ('$fname','$lname', '$email', '$phone', '$message') ";

if ($conn->query($contact_query) === TRUE)
    {
        header ('location:contact-us-success.php');
    }
    else 
    {
        echo("got back and try again please");
    }

?>