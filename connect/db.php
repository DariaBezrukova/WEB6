<?php
$user = 'u47528';
$pass = '9694962';
$db = new PDO('mysql:host=localhost;dbname=u47528', $user, $pass, array(PDO::ATTR_PERSISTENT => true));

if(!isset($_SESSION)){
    session_start();
}
?>