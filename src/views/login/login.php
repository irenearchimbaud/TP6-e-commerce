<?php
    session_start();
    require_once 'logic.php';
    $error = $_SESSION['error'] ?? null;
    unset($_SESSION['error']);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon compte</title>
    <link rel="stylesheet" href="../../assets/css/login.css">
</head>
<body>
    <div class="container">
    
    <script>
    <?php if ($error): ?>
        console.error(<?= json_encode($error); ?>);
    <?php else: ?>
        console.log("Aucune erreur détectée.");
    <?php endif; ?>
</script>

<?php if ($error): ?>
    <div class="error-message">
        <?= htmlspecialchars($error); ?>
    </div>
<?php endif; ?>

        <div class="tabs">
            <div class="tab <?php echo empty($_POST['form_type']) || $_POST['form_type'] === 'login' ? 'active' : ''; ?>" onclick="showForm('login')">Connexion</div>
            <div class="tab <?php echo isset($_POST['form_type']) && $_POST['form_type'] === 'register' ? 'active' : ''; ?>" onclick="showForm('register')">Inscription</div>
        </div>

        <div class="form-container">
            <form method="POST" action="logic.php" class="<?php echo empty($_POST['form_type']) || $_POST['form_type'] === 'login' ? '' : 'hidden'; ?>" id="loginForm">
                <input type="hidden" name="form_type" value="login">
                <div class="form-group">
                    <label for="login_email">Email</label>
                    <input type="email" id="login_email" name="login_email" required>
                </div>
                <div class="form-group">
                    <label for="login_password">Mot de passe</label>
                    <input type="password" id="login_password" name="login_password" required>
                </div>
                <button type="submit">Se connecter</button>
            </form>

            <form method="POST" action="logic.php" class="<?php echo isset($_POST['form_type']) && $_POST['form_type'] === 'register' ? '' : 'hidden'; ?>" id="registerForm">
                <input type="hidden" name="form_type" value="register">
                <div class="form-group">
                    <label for="register_username">Nom d'utilisateur</label>
                    <input type="text" id="register_username" name="register_username" required>
                </div>
                <div class="form-group">
                    <label for="register_email">Email</label>
                    <input type="email" id="register_email" name="register_email" required>
                </div>
                <div class="form-group">
                    <label for="register_password">Mot de passe</label>
                    <input type="password" id="register_password" name="register_password" required>
                </div>
                <button type="submit">S'inscrire</button>
            </form>
        </div>
    </div>

    <script src="../../assets/js/login.js"></script>
</body>
</html>