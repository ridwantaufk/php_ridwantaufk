<?php

$jml = $_GET['jml'];
echo "<table border=1 style='border-collapse: collapse'>\n";
for ($a = $jml; $a > 0; $a--) {
    echo "<tr>\n";
    $tot = 0;
    for ($b = $a; $b > 0; $b--) {
        $tot += $b;
    }
    // var_dump('jml : ', intval($jml));
    echo "<td style='padding: 6px' colspan='" . intval($jml) . "' >TOTAL : $tot</td>";
    echo "</tr>\n";
    echo "<tr>\n";
    for ($b = $a; $b > 0; $b--) {
        echo "<td style='padding: 6px'>$b</td>";
    }
    echo "</tr>\n";
}
echo "</table>";
