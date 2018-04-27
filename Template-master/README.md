# Template


create database mmdb with following configuration
or edit connection.php  file

$servername = "localhost";
$username = "root";
$password = "";
$dbname ='mmdb';


Create two tables
first name is 

users,
    id int 255 primary key AI,
    fullname varchar 255,
    email varchar 255,
    pword varchar 255,

contacts,
    id int 255 primary key AI,
    fname  varchar 255,
    lname varchar 255,
    email varchar 255,
    phone int 255,
    mess varchar 500,

