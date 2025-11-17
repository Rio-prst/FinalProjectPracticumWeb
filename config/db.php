<?php
$host = 'localhost';
$username = 'root';
$password = '';
$db = 'greenmind';

$connection = new mysqli($host, $username, $password, $db);

if (!$connection) {
    die('Koneksi gagal: ' . $connection_connect_error);
}
?>