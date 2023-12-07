<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="public/css/styleDomov.css">
    <meta charset="UTF-8">
    <title>Domovská stránka </title>
</head>
<body>

<?php
require "ClassLoader.php";

use App\App;

$app = new App();
$app->run();

?>
</body>
</html>
