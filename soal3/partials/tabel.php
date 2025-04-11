<div class="table-wrapper">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Hobi</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($hasil && $hasil->num_rows > 0): ?>
                <?php $no = 1; ?>
                <?php while ($baris = $hasil->fetch_assoc()): ?>
                    <?php
                    $nama = trim($baris['nama'] ?? '');
                    $alamat = trim($baris['alamat'] ?? '');
                    $hobi = trim($baris['daftarHobi'] ?? '');

                    if ($nama === '' && $alamat === '' && $hobi === '') {
                        continue;
                    }
                    ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= htmlspecialchars($nama) ?></td>
                        <td><?= htmlspecialchars($alamat) ?></td>
                        <td><?= htmlspecialchars($hobi) ?></td>
                    </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr>
                    <td colspan="4">data tidak ditemukan.</td>
                </tr>
            <?php endif; ?>

        </tbody>
    </table>
</div>