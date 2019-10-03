<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<form action="" method="post">
    FROM: <input type="text" name="from" placeholder="yyyyy/mm/dd">
    TO: <input type="text" name="to" placeholder="yyyy/mm/dd">
    <input type="submit" value="search">
    <table>
        <caption><h1>Customer List</h1></caption>
        <tr>
            <td>No.</td>
            <td>Customer name</td>
            <td>Birthday</td>
            <td>Address</td>
            <td>Image</td>
        </tr>
    <?php include "T_filter_guest.php"?>
    </table>
</form>
</body>
</html>
