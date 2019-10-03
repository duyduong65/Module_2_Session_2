<?php
$arrNumber = [];
for ($i = 0; $i < 50; $i++) {
    $randomNumber = random_int(1, 50);
    array_push($arrNumber, $randomNumber);
//    echo $arrNumber[$i] . "<br>";
}

class Number
{
    private $arr;

    public function __construct($arr)
    {
        $this->arr = $arr;
    }

    public function getMinNumber()
    {
        $min = $this->arr[0];
        foreach ($this->arr as $number) {
            if ($min > $number) {
                $min = $number;
            }
        }
        return $min;
    }

    public function getMaxNumber()
    {
        $max = $this->arr[0];
        foreach ($this->arr as $number) {
            if ($max < $number) {
                $max = $number;
            }
        }
        return $max;
    }
}

;

$objNumber = new Number($arrNumber);
echo $objNumber->getMinNumber()."<br>";
echo $objNumber->getMaxNumber();

?>