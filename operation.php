<!DOCTYPE html>
<html>

<body>
    <?php
    //aritmethic
    $e = 99;
    $f = 7;
    echo $e + $f;
    ?>
    <br>
    <?php
    //addition
    $x = 7;
    $x += 99;
    echo $x;
    ?>
    <br>
    <?php
    //equal
    $c = 9;
    $d = 9.0;
    if ($c == $d) {
        echo "Nilai true <br>";
    }
    echo "Finish";
    ?>
    <br>
    <?php
    //identical
    $x = 9;
    $y = "9.0";
    var_dump($x === $y);
    ?>
</body>

</html>