<?php
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}
?>

<header>
    <div class="logo">
        <a href="/HP-stranky/index.php"><img src="/HP-stranky/images/golden-snitch.png" alt="Golden snitch siluett"></a>
    </div>
    <nav>
        <ul>
            <li><a class="header-a" href="/HP-stranky/books.php">Knihy</a></li>
            <li><a class="header-a" href="/HP-stranky/films.php">Filmy</a></li>
            <li><a class="header-a" href="/HP-stranky/games.php">Hry</a></li>
            <?php if (isset($_SESSION["is_logged_in"]) && $_SESSION["is_logged_in"] === true): ?>

            <!-- Toto se zobrazí POUZE přihlášeným uživatelům -->
            <li><a class="header-a" href="/HP-stranky/private/history-timeline/history-timeline.php">Obraceč času</a></li>
            <li><a class="header-a" href="/HP-stranky/private/quiz/quiz.php">Kvíz</a></li>
            <li><a class="header-a" href="/HP-stranky/private/log-out.php">Odhlásit se</a></li>
        <?php else: ?>
            <!-- Toto se zobrazí NEPŘIHLÁŠENÝM uživatelům -->
            <li><a class="header-a" href="/HP-stranky/login.php">Přihlásit se</a></li>
        <?php endif; ?>

        </ul>
    </nav>
    <div class="menu-icon">
        <i class="fa-solid fa-bars"></i>
        <!-- <i class="fa-solid fa-xmark"></i> -->
    </div>
</header>