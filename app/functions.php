<?php
require_once 'session.php';
require_once 'pdo.php';

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    if (isset($_POST['login']))
    {
        #var_dump($_POST['login']);
        $email = $_POST['email'];
        $password = $_POST['password'];
        login($email,$password);
    }

    if(isset($_POST['register']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];

        if($confirmPassword !== $password)
        {
            echo 'Password does not match';
            die();
        }
        else
        {
            register($name,$email,$password);
        }
    }

    if(isset($_POST['send']))
    {
        $message = $_POST['message'];
        var_dump($message);
    }
}

function login($email,$password)
{
    $pdo_class = new pdo_class();
    $pdo = $pdo_class->getPDO();

    $stmt = $pdo->query("SELECT * FROM users where email = '$email' AND password = '$password'" );
    $row_count = $stmt->rowCount();
    if($row_count > 0)
    {
        $row = $stmt->fetch();
        $_SESSION['id'] = $row['id'];
        header('Location: /Message/Index');
        exit;

    }
}

function register($name,$email,$password)
{
    $pdo_class = new pdo_class();
    $pdo = $pdo_class->getPDO();
    $stmt = $pdo->prepare ("INSERT INTO users (name, email, password) values (:name, :email, :password)");
    $result = $stmt->execute(array(':name' => $name,
                         ':email' => $email,
                         ':password' => $password));
    # $row_count = $stmt->rowCount();
    if($result)
    {
        header("Location: /Message/Login");
    }
}