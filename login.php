<?php
// Login demo server-side (clone ai.xieroku.com)
// Akun demo tersimpan sebagai hash bcrypt — bukan plaintext.
session_set_cookie_params(['httponly' => true, 'samesite' => 'Lax']);
session_start();

$DEMO_EMAIL = 'xieryzen@gmail.com';
$DEMO_HASH  = '$2y$10$JZwG3tx6m2QZSKOtxRB6vO9XNZqdPlwc3BlhUyseXyjqHL7PYfmxK'; // restu1807

$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email'] ?? '');
    $pass  = $_POST['password'] ?? '';
    $isRegister = isset($_POST['username']);
    if ($isRegister) {
        // Demo: pendaftaran langsung dianggap berhasil
        session_regenerate_id(true);
        $_SESSION['xiero_user'] = $email;
        header('Location: index.php');
        exit;
    }
    if ($email === $DEMO_EMAIL && password_verify($pass, $DEMO_HASH)) {
        session_regenerate_id(true);
        $_SESSION['xiero_user'] = $email;
        header('Location: index.php');
        exit;
    }
    $error = 'Email atau kata sandi salah.';
}

// Halaman login asli adalah HTML statis dari portal; tampilkan versi PHP-nya.
// Kita render file login-view.html (salinan asli) lalu injeksikan pesan error.
$html = file_get_contents(__DIR__ . '/login-view.html');
if ($html === false) { http_response_code(500); exit('login-view.html hilang'); }

if ($error !== '') {
    $errHtml = '<div class="error-msg" style="display:block">' . htmlspecialchars($error, ENT_QUOTES, 'UTF-8') . '</div>';
    // sisipkan tepat sebelum </form> pertama (form login)
    $pos = strpos($html, '</form>');
    if ($pos !== false) {
        $html = substr($html, 0, $pos) . $errHtml . substr($html, $pos);
    }
}
// arahkan form ke login.php
$html = str_replace('action="#" data-demo="login"', 'action="login.php" method="POST"', $html);
$html = str_replace('action="#" data-demo="register"', 'action="login.php" method="POST"', $html);
echo $html;
