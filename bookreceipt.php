<?php
$nama = $_POST["nama"];
$phone = $_POST["telp"];
$HA = $_POST["HairArtist"];
$tgl = $_POST["tanggal"];
$hour = $_POST["jam"];

?>

<html>
    <head>
        <title>Project Sentra</title>
    </head>

    <body>
        <h1 align="center">Book Receipt</h1>
    <?php
    echo "<h3><pre> Nama Customer             : ".$nama."</h3>"; 
    echo "<h3><pre> Nomor Telepon             : ".$phone."</h3>"; 
    echo "<h3><pre> Hair Artist pilihan       : ".$HA."</h3>";
    echo "<h3><pre> Tanggal Cukur             : ".$tgl."</h3>";
    echo "<h3><pre> Jam Cukur                 : ".$hour." </h3>";
    
    


    ?>
