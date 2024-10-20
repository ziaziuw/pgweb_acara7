<!DOCTYPE html>
<html>

<body>

    <?php
    $laptop = array("Asus", "Acer", "HP", "Lenovo", "Dell", "Apple");
    $warna = array("Merah", "Hijau", "Biru", "Hitam", "Putih", "Silver");
    $harga = array(12000000, 10000000, 15000000, 14000000, 13000000, 20000000);
    $diskon = array("10%", "5%", "15%", "20%", "10%", "25%");

    echo "<table border='1'>
            <tr>
                <th>Merk Laptop</th>
                <th>Warna</th>
                <th>Harga (Rp)</th>
                <th>Diskon</th>
            </tr>";

    for ($i = 0; $i < 6; $i++) {
        echo "<tr>
                <td>{$laptop[$i]}</td>
                <td>{$warna[$i]}</td>
                <td>{$harga[$i]}</td>
                <td>{$diskon[$i]}</td>
            </tr>";
    }

    echo "</table>";
    ?>

</body>

</html>