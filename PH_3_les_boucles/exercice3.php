<?php

echo "<table border>";
for ($i = 0; $i <= 12; $i++) {
    $r = " ";
    echo "<tr>";
    for ($j = 0; $j <= 12; $j++) {
        $k = $i;
        $l = $j;
        $p = $l * $k;
        if ($j == 0 and $i == 0) {
            echo "<td>$r</td>";
        } elseif ($j == 0) {
            echo "<td><b>$i</b></td>";
        } else {
            if ($i == $j or $i == 0) {
                echo "<td>$p</td>";
            } else {
                echo "<td>$p</td>";
            }
        }
    }
    echo "</tr>";
}
echo "</table>";
