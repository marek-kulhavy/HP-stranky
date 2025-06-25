<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/general.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/registration.css">

    <link rel="stylesheet" href="./query/header-query.css">

    <link rel="shortcut icon" href="/HP-stranky/images/golden-snitch.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/b535256029.js" crossorigin="anonymous"></script>

    <title>Registrace</title>
</head>
<body>

    <main>
        <section class="registr-form">
            <h1>Registrace</h1>
            <form action="./private/after-registr.php" method="POST">
                <input class="registr-input" type="text" name="first_name" placeholder="Křestní jméno"><br>
                <input class="registr-input" type="text" name="second_name" placeholder="Příjmení"><br>
                <input class="registr-input" type="email" name="email" placeholder="E-mail"><br>
                <input class="registr-input password-first" type="password" name="password" placeholder="Heslo"><br>
                <input class="registr-input password-second" type="password" name="password-again" placeholder="Heslo znovu"><br>
                <p class="result-text"></p>
                <input class="btn" type="submit" value="Registrovat">
            </form>
                <a href="/HP-stranky/login.php">Zpět na přihlášení</a>
        </section>

        <div class="footer">
            <p>&copy; Kouzelnický svět. Všechna práva vyhrazena.</p>
        </div>
    </main>

    <script src="./js/password-checker.js"></script>
</body>
</html>