<?php
// Guard sesi: pakai di halaman yang butuh login
if (session_status() === PHP_SESSION_NONE) {
    session_set_cookie_params(['httponly' => true, 'samesite' => 'Lax']);
    session_start();
}
function xiero_user(): ?string {
    return isset($_SESSION['xiero_user']) ? $_SESSION['xiero_user'] : null;
}
function xiero_require_login(): void {
    if (!xiero_user()) {
        header('Location: login.php');
        exit;
    }
}
