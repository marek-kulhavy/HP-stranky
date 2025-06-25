<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./css/general.css">
    <link rel="stylesheet" href="./css/login.css">

    <link rel="shortcut icon" href="/HP-stranky/images/golden-snitch.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/b535256029.js" crossorigin="anonymous"></script>
    <title>Přihlášení</title>
</head>
<body>

    <main>
        <section class="login-form">
            <h1>Přihlášení</h1>
            <form action="./private/after-login.php" method="POST">
                <input class="login-input" type="email" name="login-email" placeholder="E-mail"><br>
                <input class="login-input" type="password" name="login-password" placeholder="Heslo"><br>
                <input class="btn" type="submit" value="Přihlásit se">
            </form>

            <div class="registr-text">
                <p>Jsi tady poprvé?</p>
            </div>

            <div class="registration">
                <a href="./registration.php">Registruj se</a>
            </div>
            <div class="back-to-main">
                <a href="/HP-stranky/index.php">>> Zpět na úvodní stránku <<</a>
            </div>
        </section>
        
        <div class="footer">
            <p>&copy; Kouzelnický svět. Všechna práva vyhrazena.</p>
        </div>
    </main>

    <script src="./js/header.js"></script>
</body>
</html>