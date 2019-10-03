<?php

$name = $email = $phone = "";
$nameErr = $emailErr = $phoneErr = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (empty($_POST['name'])) {
        $nameErr = "empty user name!";
    } else {
        $name = $_POST['name'];
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            @$nameErr = "Only letters allowed";
        }
    }
    if (empty($_POST['email'])) {
        $emailErr = "empty email!";
    } else {
        $email = $_POST['email'];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "wrong email";
        }
    }
    if (empty($_POST['phone'])) {
        $phoneErr = "empty phone number";
    } else {
        $phone = $_POST['phone'];
        if (!preg_match("/^[0-9]*$/", $phone)) {
            $phoneErr = "only number";
        }
    }
}
