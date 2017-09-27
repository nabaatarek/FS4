<?php

require '../con.php';

//1-connection
//$con = mysqli_connect('localhost', 'root', 'root', 'FSDB');

if (mysqli_connect_errno())
    echo 'ERROR';

$title = $_POST['title'];
$post = $_POST['post'];
//2-statement

$sql = "INSERT INTO blog (title,post) VALUES ('$title','$post')";

//3-execute



//4-result
if (mysqli_query($con,$sql))
    header('location:../index.php');
else
    echo 'Error not inserted';

//5-close connection

mysqli_close($con);