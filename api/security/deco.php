<?php
 session_start();

 if (isset($_SESSION['logged']) && $_SESSION['logged'] === true) {
    unset($_SESSION['logged']);
    unset($_SESSION['pseudoMemb']);
    unset($_SESSION['numStat']);
    session_destroy();
}

session_destroy();
header('Location: ../../views/backend/security/login.php');
exit();