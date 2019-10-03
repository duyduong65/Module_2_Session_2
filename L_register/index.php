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
<?php include "register.php" ?>
<form action="" method="post">
    use name: <input type="text" name="name">
    <span style="color: red">*<?php echo $nameErr; ?></span><br>
    email: <input type="text" name="email">
    <span style="color: red">*<?php echo $emailErr; ?></span><br>
    phone number: <input type="text" name="phone">
    <span style="color: red">*<?php echo $phoneErr; ?></span><br>
    <input type="submit" value="submit">

</form>

</body>
</html>