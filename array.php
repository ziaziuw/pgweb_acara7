<!DOCTYPE html>
<html>

<body>
    <?php
    // Array matkul
    $matkul = array("SIGPL", "IUT", "Geosains", "Aerial Survei", 
    "GNSS", "Pemrograman Komputer");
    echo count($matkul); // Menghitung jumlah elemen dalam array
    ?>

    <br><br>

    <?php
    // contoh fungsi:
    function Fungsiku()
    {
        echo "Halooo semua";
    }

    // membuat array:
    $myArr = array("Baju", 12, ["laptop", "hp"], 'Fungsiku');

    $myArr[3](); // Panggil fungsi dengan nama yang tersimpan di array
    ?>
</body>
</html>