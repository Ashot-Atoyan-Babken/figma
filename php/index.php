<?php
session_start();
$name = $_GET['name'];
$phone = $_GET['phone'];

if (empty($name) && empty($phone)) {
   $_SESSION['error'] = '3';
   $_SESSION['message'] = "пожалуйста заполните все поля";
   header('Location: ../index.php');
} else if ($name == '') {
   $_SESSION['error'] = '1';
   $_SESSION['message'] = "пожалуйста заполните поле имя";
   header('Location: ../index.php');
} else if ($phone == '') {
   $_SESSION['error'] = '2';
   $_SESSION['message'] = "пожалуйста заполните поле телефон";
   header('Location: ../index.php');
} else {
   $_SESSION['success'] = '0';
   $_SESSION['message'] = 'поздравляю';
   header('Location: ../index.php');
}

$to = "figma.test2023@mail.ru";
$from = trim($name);

$header = "From $from" . "\r\n" .  "$name" . "\r\n" . "$phone";


if (mail($to, $password, $header)) {
   header("Location:../index.php");
}
