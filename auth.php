<?php
// Guard sesi: pakai di halaman yang butuh login
if (session_status() === PHP_SESSION_NONE) {
    session_set_cookie_params(['httponly' => true, 'samesite' => 'Lax']);
    session_start();
}
function nx_user(): ?string {
    return isset($_SESSION['nx_user']) ? $_SESSION['nx_user'] : null;
}
function nx_require_login(): void {
    if (!nx_user()) {
        header('Location: login.php');
        exit;
    }
}
