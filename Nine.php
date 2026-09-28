<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Nine</title>
</head>
<body>
    <?php

$num = 7;
$count = 0;

if ($num <= 1) {
    echo "The number is non-prime";
} else {

    for ($i = 1; $i <= $num; $i++) {

        if ($num % $i == 0) {
            $count++;
        }
    }

    if ($count == 2) {
        echo "The number is prime";
    } else {
        echo "The number is non-prime";
    }
}

?>
</body>
</html>