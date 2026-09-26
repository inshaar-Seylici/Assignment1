<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$num1 = 18;
$num2 = 24;

$hcf = 1;
$i = 1;

while ($i <= $num1 && $i <= $num2) {

    if ($num1 % $i == 0 && $num2 % $i == 0) {
        $hcf = $i;
    }

    $i++;
}

echo "HCF is: " . $hcf;

?>
</body>
</html>