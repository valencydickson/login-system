<?php

require_once __DIR__ . "../../views/database.php";

$username = $email = $password = "";

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
};

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = test_input($_POST["username"]);
    $password = test_input($_POST["password"]);


    //check if (username or email) and password are correct
    $userHandler = $pdo->prepare("SELECT * FROM users_db.users WHERE username=:username");
    $userHandler->bindValue(":username", $username);
    $userHandler->execute();
    $userHandler =   $userHandler->fetch(PDO::FETCH_ASSOC);

    $usernameResult = $userHandler["username"];
    $emailResult = $userHandler["email"];
    $passwordResult = $userHandler["password"];



    //check if username or email and password is correct
    if ((($usernameResult === $username) || ($emailResult === $username)) && (password_verify($password, $passwordResult))) {
        session_start();
        $_SESSION["fullName"] = $userHandler["fullName"];
        $_SESSION["username"] = $userHandler["username"];
        header("location:../public/profile.php");
    } else {
        $error = "Username or password is incorrect";
        header("location:../public/login-page.php?error=$error");
    }
}
