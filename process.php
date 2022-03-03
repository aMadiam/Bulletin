<?php
session_start();
require("Sql.php");

$subject = $_SESSION['subject'];
$details = $_SESSION['details'];
$query = "INSERT INTO new_table(subject, details)
        VALUES('$subject', '$details')";
    $insert = run_mysql_query($query);
    header('location: main.php');
?>