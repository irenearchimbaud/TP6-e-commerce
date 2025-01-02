<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $formType = $_POST['form_type'] ?? '';

    if ($formType === 'login') {
        $email = $_POST['login_email'] ?? '';
        $password = $_POST['login_password'] ?? '';
        
        // logique de validation de connexion
        
    } elseif ($formType === 'register') {
        $username = $_POST['register_username'] ?? '';
        $email = $_POST['register_email'] ?? '';
        $password = $_POST['register_password'] ?? '';

        // logique de validation et d'inscription
    }
}
?>