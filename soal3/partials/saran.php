<?php
$db = require_once '../db/db.php';

$tipe = $_GET['tipe'] ?? '';
$q    = $db->real_escape_string($_GET['q'] ?? '');
$nama = $db->real_escape_string($_GET['nama'] ?? '');

$saran = [];

if ($tipe === 'nama') {
    $sql = "SELECT DISTINCT nama FROM person WHERE nama LIKE '%$q%' LIMIT 10";
} elseif ($tipe === 'alamat') {
    $sql = "SELECT DISTINCT alamat FROM person 
            WHERE alamat LIKE '%$q%' 
              AND ('$nama' = '' OR nama LIKE '%$nama%')
            LIMIT 10";
} elseif ($tipe === 'hobi') {
    $sql = "SELECT DISTINCT h.hobi 
            FROM hobi h
            INNER JOIN person p ON h.person_id = p.id
            WHERE h.hobi LIKE '%$q%'
              AND ('$nama' = '' OR p.nama LIKE '%$nama%')
            LIMIT 10";
}

if (!empty($sql)) {
    $hasil = $db->query($sql);
    while ($row = $hasil->fetch_row()) {
        $saran[] = $row[0];
    }
}

header('Content-Type: application/json');
echo json_encode($saran);
