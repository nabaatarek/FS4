<?php
require '../con.php';

$id = $_GET['id'];
$title = $_POST['title'];
$post = $_POST['post'];

$sql= "UPDATE blog SET title = '$title' , post = '$post' WHERE id = '$id'";

if (mysqli_query($con,$sql))
    header('location:../index.php');
else
    echo 'ERROR';

mysqli_close($con);