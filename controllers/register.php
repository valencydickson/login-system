<?php

require_once __DIR__ . "../../views/database.php";

$fullName = $username = $email = $password = $repeatPassword = "";



function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
};


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fullName = test_input($_POST["fname"]);
    $email = test_input($_POST["email"]);
    $username = test_input($_POST["username"]);
    $password = test_input($_POST["password"]);
    $repeatPassword = test_input($_POST["repeatPassword"]);

    // check if password is correct

    if ($password !== $repeatPassword) {
        $error = "Please match the password";
        header("location:../");
    };


    //check if username and email if they exist
    $userHandler = $pdo->prepare("SELECT username FROM users_db.users WHERE username=:username");
    $userHandler->bindValue(":username", $username);
    $userHandler->execute();

    $emailHandler = $pdo->prepare("SELECT email FROM users_db.users WHERE email=:email");
    $emailHandler->bindValue(":email", $email);
    $emailHandler->execute();

    if ($userHandler->rowCount() > 0) {
        $error = "Username already exist";
        header("location:../");
    } else if ($emailHandler->rowCount() > 0) {
        $error = "Email already exist";
        header("location:../");
    } else {
        $sql = $pdo->prepare("INSERT INTO users_db.users (fullName,username,email,password,repeatPassword) VALUES(:fullName,:username,:email,:password,:repeatPassword)");
        $sql->bindValue(":fullName", $fullName);
        $sql->bindValue(":username", $username);
        $sql->bindValue(":email", $email);
        $sql->bindValue(":password", $password);
        $sql->bindValue(":repeatPassword", $repeatPassword);
        $sql->execute();
    }
}
