<!DOCTYPE html>
<html>

<body>
    <?php
    $a = 179;       // Integer
    $b = 99.764;    // Float
    $c = "Selamat Pagi"; // String
    $d = true;    // Boolean
    $e = NULL;    // NULL

    $a = (string) $a;
    $b = (bool) $b;
    $c = (int) $c;
    $d = (array) $d;
    $e = (string) $e;

    //untuk memverivikasi tipe data 
    var_dump($a);
    var_dump($b);
    var_dump($c);
    var_dump($d);
    var_dump($e);
    ?>
</body>
</html>