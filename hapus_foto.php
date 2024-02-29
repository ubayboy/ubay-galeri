<?php
    include "connect.php";
    session_start();

    $fotoid=$_GET['fotoid'];

    $sqli=mysqli_query($conn, "DELETE FROM foto WHERE fotoid='$fotoid'");

    header("location:foto.php");
?>    