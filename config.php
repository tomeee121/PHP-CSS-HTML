<?php
$con = mysqli_connect("localhost", "root111", "root111", "php3");

if (mysqli_connect_errno() != 0) {
    echo "Database connection error<br>";
    die("Connection error: " . mysqli_connect_error());
}
