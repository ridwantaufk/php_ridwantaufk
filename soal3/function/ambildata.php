<?php
function ambilData($db, $nama, $alamat, $hobi)
{
  $nama   = $db->real_escape_string($nama);
  $alamat = $db->real_escape_string($alamat);
  $hobi   = $db->real_escape_string($hobi);

  $sql = "
        SELECT person.id, person.nama, person.alamat, GROUP_CONCAT(hobi.hobi SEPARATOR ', ') AS daftarHobi
        FROM person
        LEFT JOIN hobi ON person.id = hobi.person_id
        WHERE ('$nama' = '' OR person.nama LIKE '%$nama%')
          AND ('$alamat' = '' OR person.alamat LIKE '%$alamat%')
          AND ('$hobi' = '' OR hobi.hobi LIKE '%$hobi%')
        GROUP BY person.id
        ORDER BY person.nama ASC
    ";

  return $db->query($sql);
}
