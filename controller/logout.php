<?php
//Permet de vider les variables de session
session_unset();
//Detruit la session
session_destroy();
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(
        session_name('node'),
        session_id(),
        time(),
        $params["path"],
        $params["domain"],
        $params["secure"],
        $params["httponly"]
    );
}
//Redirection
echo "<script>document.location.href = 'index.php'</script>";
