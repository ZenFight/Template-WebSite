<?php 
session_start();
$_SESSION['user_connected'] = true;
$_SESSION['user_id'] = "1";
header('Location: /');