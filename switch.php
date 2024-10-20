<!DOCTYPE html>
<html>

<body>

<?php
//switch case
    $favcolor = "renang";
switch ($favcolor) {
        case "renang":
            echo "Olahraga favoritmu adalah renang!";
            break;
        case "bulutangkis":
            echo "Olahraga favoritmu adalah bulutangkis!";
            break;
        case "tenis":
            echo "Olahraga favoritmu adalah tenis!";
            break;
        default:
            echo "Olahraga favoritu bukan renang, bulutangkis, maupun tenis!";
    }
?>

</body>

</html>