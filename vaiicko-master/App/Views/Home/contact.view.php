<?php

/** @var Array $data */

/** @var \App\Core\LinkGenerator $link */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="public/css/styleKontakt.css">
    <meta charset="UTF-8">
    <title> Kontakt </title>
</head>
<body>
<div class="selekcia">
    <div class="otv">
<h2> Kedy sme tu pre teba? </h2>
    <p> Sme tu pre teba od pondelka do piatka od 06:00 do 18:00 </p>
</div>


<div class="kontInfo">
    <h2> Kde nás nájdeš? </h2>
    <p> Nájdeš nás na tejto adrese:</p>
    <address> Zvolenská cesta 23, 974 01 Banská Bystrica </address>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2632.9354040830917!2d19.1398947!3d48.706715599999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47153febbab0663b%3A0x1f9cfc7bf5d84257!2sZvolensk%C3%A1%20cesta%2023%2C%20974%2001%20Bansk%C3%A1%20Bystrica!5e0!3m2!1ssk!2ssk!4v1698076473894!5m2!1ssk!2ssk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <div class="back"></div>
</div>


</div>

<script>
    var menuRol = document.getElementById("menuRol");
    menuRol.style.maxHeight = "0px";
    function menu() {
        if(menuRol.style.maxHeight==="0px") {
            menuRol.style.maxHeight = "130px";
        }
        else {
            menuRol.style.maxHeight = "0px";
        }
    }

    var logo = document.getElementById("logo")
    logo.addEventListener("click", function() {
        window.location.href = "domov.html";
    });

</script>
</body>
</html>
