<?php
$host = 'localhost';
$user = 'root';
$db = 'sistema_escolar';
$pass = '';

    try {
        $pdo = new PDO('mysql:host='.$host.';dbname='.$db.';charset=utf8',$user,$pass);
        $pdo->setAttribute(PDO::ATTR_MODE,PDO::ERRMODE_EXCEPTION);
    } catch (exception $e){
        'error: '.$e->getMessage();
    }