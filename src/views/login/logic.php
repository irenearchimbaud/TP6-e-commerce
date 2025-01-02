<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require '../../assets/models/pdo.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $formType = $_POST['form_type'] ?? '';

    if ($formType === 'login') {
        $email = trim($_POST['login_email'] ?? '');
        $password = trim($_POST['login_password'] ?? '');

        if (empty($email) || empty($password)) {
            $_SESSION['error'] = "Email et mot de passe sont requis.";
            header("Location: login.php");
            exit;
        }

        try {
            $pdo = getPDO();
            $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email");
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user && password_verify($password, $user['password'])) {
                $_SESSION['user_id'] = $user['id'];
                header("Location: ../home/home.php");
                exit;
            } else {
                $_SESSION['error'] = "Email ou mot de passe incorrect.";
                header("Location: login.php");
                exit;
            }
        } catch (PDOException $e) {
            $_SESSION['error'] = "Erreur interne, veuillez réessayer plus tard.";
            header("Location: login.php");
            exit;
        }

    } elseif ($formType === 'register') {
        $username = trim($_POST['register_username'] ?? '');
        $email = trim($_POST['register_email'] ?? '');
        $password = trim($_POST['register_password'] ?? '');

        if (empty($username) || empty($email) || empty($password)) {
            $_SESSION['error'] = "Tous les champs sont obligatoires.";
            header("Location: login.php");
            exit;
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $_SESSION['error'] = "Adresse email invalide.";
            header("Location: login.php");
            exit;
        }

        try {
            $pdo = getPDO();
            $stmt = $pdo->prepare("SELECT id FROM users WHERE email = :email");
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->execute();

            if ($stmt->fetch()) {
                $_SESSION['error'] = "Un utilisateur avec cet email existe déjà.";
                header("Location: login.php");
                exit;
            }

            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            $stmt = $pdo->prepare("INSERT INTO users (name, email, password) VALUES (:name, :email, :password)");
            $stmt->bindParam(':name', $username, PDO::PARAM_STR);
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->bindParam(':password', $hashedPassword, PDO::PARAM_STR);
            $stmt->execute();

            // Inscription réussie, redirection vers la page de connexion
            $_SESSION['success'] = "Inscription réussie. Veuillez vous connecter.";
            header("Location: login.php");
            exit;
        } catch (PDOException $e) {
            $_SESSION['error'] = "Erreur interne, veuillez réessayer plus tard.";
            header("Location: login.php");
            exit;
        }
    }
}
?>
