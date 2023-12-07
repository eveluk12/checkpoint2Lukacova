<?php

/** @var string $contentHTML */
/** @var \App\Core\IAuthenticator $auth */
/** @var \App\Core\LinkGenerator $link */
?>

<!DOCTYPE html>
<html lang="sk">
<head>
    <link rel="stylesheet" href="public/css/styleDomov.css">
    <meta charset="UTF-8">
    <title>E-shop</title>
</head>
<body>
<div class="selekcia">
    <div class="navig">
        <img src="images/logo.png" class="logo" alt="logo" id="logo"><label class="name">VPA</label>
        <nav>
            <ul id="menuRol">
                <li><a href="<?= $link->url("home.eshop") ?>">E-shop</a></li>
                <li><a href="<?= $link->url("home.oNas") ?>">O nás</a></li>
                <li><a href="<?= $link->url("home.contact") ?>">Kontakt</a></li>
            </ul>
        </nav>

        <!-- vytvorit log in, sign in, kosik -->
        <img src="images/menu.png" class="menu" alt="menu" onclick="menu()">
        <img src="images/line.png" class="line" alt="line">
        <a href="<?= \App\Config\Configuration::LOGIN_URL ?>"><img src="images/login.png" class="icon" alt="login"></a>
        <img src="images/eshop.png" class="icon" alt="kosik">


    </div>

<div class="container-fluid mt-3">
    <div class="web-content">
        <?= $contentHTML ?>
    </div>
</div>
</div>
</body>
</html>