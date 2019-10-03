<?php

class Calculator
{
    private $x;
    private $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function addition()
    {
        return $this->x + $this->y;
    }

    public function minus()
    {
        return $this->x - $this->y;
    }

    public function division()
    {
        return $this->x / $this->y;
    }

    public function multiply()
    {
        return $this->x * $this->y;
    }
}

$objCalc = new Calculator($_POST['x'], $_POST['y']);

switch ($_POST['operator']) {
    case "+":
       echo $objCalc->addition();
        break;
    case "-":
       echo $objCalc->minus();
        break;
    case "*":
       echo $objCalc->multiply();
        break;
    case "/":
       echo $objCalc->division();
        break;
}

try {
    if ($_POST['operator'] == "/" && $_POST['y'] == 0) {
        throw new Exception("mẫu số không thể bằng 0");
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
};