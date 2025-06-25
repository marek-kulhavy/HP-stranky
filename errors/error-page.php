<?php 
 
    $error_text = $_GET["error_text"]; 

 
?> 
 
<!DOCTYPE html> 
<html lang="cs"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, 
initial-scale=1.0"> 
    <link rel="stylesheet" href="../css/general.css"> 
    <script src="https://kit.fontawesome.com/0fe3234472.js" 
crossorigin="anonymous"></script> 
    <title>Chyba</title> 
</head> 
<body> 
 
    <main> 
        <section class="error"> 
            <p><?= $error_text ?></p> 
        </section> 
        <section class="link">
            <a href="../index.php">Zpět na úvodní stranu</a>
        </section>
    </main> 
 
    <script src="../js/header.js"></script> 
</body> 
</html> 