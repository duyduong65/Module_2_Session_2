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
<form method="post" action="">
    <input type="text" name="input">
    <input type="submit" value="show"><br>
    <span>
        <?php
        $newArr = [];
        $lenght = 50;
        $valueInput = $_POST['input'];
        for ($i = 0; $i < $lenght; $i++) {
            $randomNumber = random_int(1, 100);
            array_push($newArr, $randomNumber);
        }
        try {
            if ($valueInput > $lenght) {
                throw new Exception("nếu bạn thấy điều này, có nghĩa là bạn đã nhập quá độ dài mảng!");
            }
            if ($valueInput<0){
                throw new Exception("Nếu bạn nhìn thấy điều này,nghĩa là bạn đã nhập số nhỏ hơn 0");
            }
            echo "index: $valueInput = $newArr[$valueInput]";
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
        ?>
    </span>
</form>
</body>
</html>