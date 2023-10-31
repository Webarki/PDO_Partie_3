<?php
if (isset($_SESSION['email']) && !empty($_SESSION['email'])) {
    $getUser = new User();
    $getUser->email = $_SESSION['email'];
    $user = $getUser->getUserMail();
}
