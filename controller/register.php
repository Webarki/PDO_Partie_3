<?php
header('Content-Type: application/json');

use \App\Autoloader;

require_once "../model/Autoloader.php";
Autoloader::autoload('Database');
Autoloader::autoload('User');

if (isset($_POST['login']) && !empty($_POST['login'])) {
    $login = htmlspecialchars($_POST['login']);
    if (isset($_POST['password']) && !empty($_POST['password'])) {
        $password = htmlspecialchars($_POST['password']);
        $passHash = password_hash($password, PASSWORD_BCRYPT);
    }
    if (filter_var($login, FILTER_VALIDATE_EMAIL)) {
        session_name('node');
        session_start();
        $user = new User();
        $token = $user->generateCSRFToken();
        $user->email = $login;
        $user->pass = $passHash;
        $user->token = $token;
        if ($user->addUser()) {
            $user->email = $login;
            $getUser = $user->getUserMail();
            $_SESSION['email'] = $getUser->email;
            $_SESSION['token'] = $getUser->token;
            $_SESSION['id'] = $getUser->id;
            $_SESSION['role'] = $getUser->role;
            $response['url'] = 'index.php?id=' . $_SESSION['id'] . '&role=' . $_SESSION['role'] . '&token=' . $_SESSION['token'];
            $response['type'] = 'Success';
            echo json_encode($response);
        } else {
            $response['type'] = "ERROR";
            $response['data'] = 'Une erreur c\'est produite';
            echo json_encode($response);
        }
    } else {
        $response['type'] = "ERROR";
        $response['data'] = 'Une erreur c\'est produite';
        echo json_encode($response);
    }
}
