<?php

/** @var string $contentHTML */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="public/css/styleOnas.css">
    <meta charset="UTF-8">
    <title> O nás </title>
</head>
<body>


        <div class="obsah">
            <div class="left">
                <h2>Kto sme?</h2>
                <p> Sme kolektív nadšencov, ktorí milujú autá. Radi sa podelíme o naše skúsenosti a vždy sa snažíme dobre poradiť. Sme tu pre teba! </p>
                <img src="images/people.jpg" alt="people">
                <div class="servis">
                    <h2>Servis</h2>
                    <p> Ak chcete navštíviť náš servis, radi vás tu privítame. Nezabudnite ale, že sa najprv musíte telefonicky objednať. <br> Objednávky prijímame na tel. čísle: <strong>051/ 44 74 598</strong> v <strong>pondelok-piatok</strong> medzi <strong>8:00</strong> a <strong>12:00</strong> hod.</p>
                </div>
            </div>

            <div class="right">
                <h2 class="servis">História</h2>
                <p> Naša firma vznikla vďaka šikovnosti jedného otca Janka v máji 2005. Prvotný nápad vznikol, keď Janko neustále pomáhal ľuďom naokolo opravovať auta, zháňať im na ne diely, učil ich o strostlivosti, aby im autá ešte dlho slúžili. Tak sa spojil so svojim kamarátom a založili túto firmu. Postupne sme sa ako deti priučili remeslu a teraz spolu podnikáme. Servis mal čoraz viac zákazníkov a my sme nestíhali radiť ľuďom a zároveň opravovať. Rozhodli sme sa preto v roku 2020 prejsť aj do online sveta. Sme radi, že môžeme pomáhať.</p>
                <img src="images/servis.jpg" alt="servis">
            </div>
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