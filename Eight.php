<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

echo "<h2>Multiplication Table</h2>";

echo "<table border='1' cellpadding='10' cellspacing='0'>";

for ($row = 1; $row <= 12; $row++) {

    echo "<tr>";

    for ($column = 1; $column <= 12; $column++) {

        $result = $row * $column;

        echo "<td>" . $result . "</td>";
    }

    echo "</tr>";
}

echo "</table>";

?>
</body>
</html>