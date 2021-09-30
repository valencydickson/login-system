<?php

$servername = "localhost";
$username = "root";
$dbname = "users_db";


$pdo = new PDO("mysql:host=$servername;bdname=$dbname", $username);


$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
