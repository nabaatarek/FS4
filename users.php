<?php

require 'con.php';

$sql = "SELECT * FROM users WHERE user='sagad' AND pass='1234'";

$result = mysqli_query($con, $sql);

$count = mysqli_num_rows($result);

echo $count;