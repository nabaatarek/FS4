<?php
require '../con.php';

$id = $_GET['id'];


$sql= "DELETE FROM blog  WHERE id = '$id'";

if (mysqli_query($con,$sql))
    header('location:../index.php');
else
    echo 'ERROR';

mysqli_close($con);