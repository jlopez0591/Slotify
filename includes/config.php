<?php
ob_start(); // Output buffering?
$timezone = date_default_timezone_set("America/Panama");

// TODO: Cambiar por PDO.
$con = mysqli_connect("localhost", "root", "", "slotify");

if (mysqli_connect_errno()) {
    echo "Failed to connect: " . mysqli_connect_errno();
}
