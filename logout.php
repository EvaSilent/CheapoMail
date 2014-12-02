<?php
session_start();
unset($_SESSION['user_name']);
if(!empty($_SESSION['user_name']))
{
$_SESSION['user_name']='';
session_destroy();
}
header('Location: index.php');
?>