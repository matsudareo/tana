<?php
if(!isset($_SESSION)) session_start();
// 変数へ代入
$name = isset($_SESSION['name']) ? $_SESSION['name'] : '';
$kana = isset($_SESSION['kana']) ? $_SESSION['kana'] : '';
$tel = isset($_SESSION['tel']) ? $_SESSION['tel'] : '';
$email = isset($_SESSION['email']) ? $_SESSION['email'] : '';
$message = isset($_SESSION['message']) ? $_SESSION['message'] : '';

// 値のやり取り
$name = e($name);
$kana = e($kana);
$tel = e($tel);
$email = e($email);
$message = e($message);

// id
$id = isset($_SESSION['id']) ? $_SESSION['id'] : '';