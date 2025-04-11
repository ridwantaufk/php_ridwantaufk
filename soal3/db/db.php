<?php
$host = "localhost";
$port = 3306;
$user = "root";
$pass = "root";
$database = "testdb";

$db = new mysqli($host, $user, $pass, $database, $port);

if ($db->connect_error) {
    die("koneksi gagal : " . $db->connect_error);
}

return $db;
