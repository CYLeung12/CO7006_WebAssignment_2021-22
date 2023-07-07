<?php
$conn = mysqli_connect($host, $username, $password, $database);
if ($conn->connect_error) {
    echo ("DB connection failed ");
}
