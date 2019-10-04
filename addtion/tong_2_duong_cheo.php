<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table style="text-align: center">
    <?php
    $arrNumber = [];
    $cheoPhai = 0;
    $cheoTrai = 0;
    $countElement2 = 0;
    for ($i = 0; $i < 5; $i++) {
        $element_1 = random_int(1, 50);
        array_push($arrNumber, $element_1);
        $arrNumber[$i] = [];
        echo "<tr>";
        for ($j = 0; $j < 5; $j++) {
            $element_2 = random_int(1, 50);
            array_push($arrNumber[$i], $element_2);
            echo "<td>" . $arrNumber[$i][$j] . "</td>";
            if ($i == $j) {
                $cheoPhai += $arrNumber[$i][$j];
                $countElement2 = 0+$j;
            }
        }
        $cheoTrai += $arrNumber[$i][4-$countElement2];
        echo "</tr>";
    }
    echo $cheoPhai."<br>".$cheoTrai;
    ?>
</table>
</body>
</html>