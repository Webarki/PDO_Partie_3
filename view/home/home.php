<?php
require 'controller/connectUser.php';
?>
<h1 class="text-center mt-5">Bienvenue</h1>
<p class="text-center mt-5">
    <?php
    if (isset($_SESSION['token']) && isset($user->token) && isset($_GET['token'])) {
        if ($_SESSION['token'] === $user->token && $user->token === $_GET['token']) {
    ?>
            <?= $_SESSION['email'] ? $_SESSION['email'] : '' ?>
    <?php
        } else {
            echo "<script>document.location.href = 'index.php?logout'</script>";
        }
    }
    ?>
</p>