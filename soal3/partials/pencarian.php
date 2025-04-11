<div class="kotak-pencarian">
    <div class="refresh-wrapper">
        <a href="soal3.php" class="btn-refresh" title="Refresh Halaman">🔄</a>
    </div>
    <form method="get">
        <div class="baris">
            <label for="nama">Nama</label>
            <input type="text" name="cari_nama" id="nama" value="<?= htmlspecialchars($_GET['cari_nama'] ?? '') ?>">
        </div>
        <div class="baris">
            <label for="alamat">Alamat</label>
            <input type="text" name="cari_alamat" id="alamat" value="<?= htmlspecialchars($_GET['cari_alamat'] ?? '') ?>">
        </div>
        <div class="baris">
            <label for="hobi">Hobi</label>
            <input type="text" name="cari_hobi" id="hobi" value="<?= htmlspecialchars($_GET['cari_hobi'] ?? '') ?>">
        </div>
        <div class="aksi">
            <input type="submit" value="Search">
        </div>
    </form>
</div>