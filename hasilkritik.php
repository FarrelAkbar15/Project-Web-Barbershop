<?php
$nama = $_POST["nama"];
$phone = $_POST["telp"];
$email = $_POST["gmail"];
$subject = $_POST["subjek"];
$pesan = $_POST["message"];

?>

<html>
    <head>
        <title>Project Sentra</title>
    </head>

    <body>
        <h1 align="center">Kritik dari Customer</h1>
    <?php
    echo "<h3><pre> Nama            : ".$nama."</h3>"; 
    echo "<h3><pre>Email            : ".$email."</h3>"; 
    echo "<h3><pre>Nomor Telepon    : ".$phone."</h3>";
    echo "<h3><pre>Subjek           : ".$subject."</h3>";
    echo "<h3><pre>Message          : ".$pesan." </h3>";
    
    


    ?>
