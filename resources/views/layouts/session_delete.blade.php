<?php
// SESSIONの削除、終了
unset($_SESSION['name']);
unset($_SESSION['kana']);
unset($_SESSION['tel']);
unset($_SESSION['email']);
unset($_SESSION['message']);

unset($_SESSION['name_er']);
unset($_SESSION['kana_er']);
unset($_SESSION['tel_er']);
unset($_SESSION['email_er']);
unset($_SESSION['message_er']);

unset($_SESSION['info']);
unset($_SESSION['id']);
unset($_SESSION['edit']);
unset($_SESSION['delete']);

$_SESSION = array();
session_destroy();

?>