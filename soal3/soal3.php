<?php
$db = require_once 'db/db.php';
require_once 'function/ambildata.php';

$nama   = $_GET['cari_nama'] ?? '';
$alamat = $_GET['cari_alamat'] ?? '';
$hobi   = $_GET['cari_hobi'] ?? '';

$hasil = ambilData($db, $nama, $alamat, $hobi);

include 'partials/head.php';
?>
<h2>Daftar Orang & Hobinya</h2>
<?php
include 'partials/tabel.php';
include 'partials/pencarian.php';

$db->close();
?>
</body>

</html>