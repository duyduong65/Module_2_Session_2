<?php

$name = $email = $phone = NULL;
$nameErr = $emailErr = $phoneErr = NULL;
$has_error = false;

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
    if ($has_error == false) {
        saveDataJSON("data.json", $name, $email, $phone);
        $name =NULL;
        $email =NULL;
        $phone =NULL;
    }
}

function loadRegistration($fileName)
{
    $jsonData = file_get_contents($fileName);
    $arr_data = json_decode($jsonData, true);
    return $arr_data;
}

function saveDataJSON($fileName, $name, $email, $phone)
{
    try {
        $contact = ["name" => "$name", "email" => "$phone", "phone" => $phone];
        $arr_data = loadRegistration($fileName);
        arr_push($arr_data, $contact);
        $jsonData = json_encode($arr_data, JSON_PRETTY_PRINT);
        file_get_contents($fileName, $jsonData);
        echo "done";

    } catch (Exception $e) {
        echo 'error', $e->getMessage(), "\n";
    }
}


