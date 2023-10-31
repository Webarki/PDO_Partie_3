<?php
//Permet d'utilisé le namespace
use App\Autoloader;
//Modifie les options du cookie de session verifier dans F12 stokage cookie
ini_set('session.cookie_samesite', 'None');
ini_set('session.cookie_secure', 'On');
ini_set('session.cookie_httponly', 'On');
//Je nomme mon cookie de session avant de le demarrer
session_name('node');
session_start();

include "model/Autoloader.php";
//Integrer vos controller dans vos vues
Autoloader::register();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PDO_Partie_3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="assets/lib/jquery.min.js"></script>
</head>

<body>
    <!-- TETE DE PAGE-->
    <?php Autoloader::view('header') ?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- CORP DE PAGE BODY ROUTEUR PHP -->
                <?php if (isset($_GET["register"])) {
                    isset($_SESSION["id"]) ?
                        header("location:index.php") :
                        Autoloader::view('register');
                } else if (isset($_GET["login"])) {
                    isset($_SESSION["id"]) ?
                        header("location:index.php") :
                        Autoloader::view('login');
                } else if (isset($_GET["logout"])) {
                    isset($_SESSION["id"]) ?
                        Autoloader::controller('logout') :
                        Autoloader::view('login');
                } else if (isset($_GET["error_csrf"])) {
                    Autoloader::controller('logout');
                } else if (isset($_GET["home"])) {
                    Autoloader::view('home');
                } else {
                    Autoloader::view('home');
                } ?>
            </div>
        </div>
    </div>
    <footer>
        <!-- PIED DE PAGE -->
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>