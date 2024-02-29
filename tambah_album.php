<?php
    include "connect.php";
    session_start();

    $namaalbum=$_POST['namaalbum'];
    $deskripsi=$_POST['deskripsi'];
    $tanggaldibuat=date("Y-m-d");
    $userid=$_SESSION['userid'];

    $sql=mysqli_query($conn,"INSERT INTO album values('','$namaalbum','$deskripsi','$tanggaldibuat','$userid')");
    header("location:album.php");
    ?>