<?php
$max = NULL;
$arrNumber = [];
for ($i = 0; $i < 5; $i++) {
    $element_1 = random_int(1, 50);
    array_push($arrNumber, $element_1);
    $arrNumber[$i] = [];
    echo "[";
    for ($j = 0; $j < 5; $j++) {
        $element_2 = random_int(1, 50);
        array_push($arrNumber[$i], $element_2);
        echo $arrNumber[$i][$j] . "  ";
    }
    echo "] <br>";
}

function finMax($arr)
{
    $max = $arr[0][0];
    for ($i = 0; $i < count($arr); $i++) {
        for ($j = 0; $j < count($arr[$i]); $j++) {
            if ($max < $arr[$i][$j]) {
                $max = $arr[$i][$j];
            }
        }
    }
    return $max;
}
echo finMax($arrNumber);



