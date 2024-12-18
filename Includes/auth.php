<?php
session_start();

function isAdmin() {
    return isset($_SESSION['user']) && $_SESSION['user']['is_admin'];
}

function isLoggedIn() {
    return isset($_SESSION['user']);
}
?>
