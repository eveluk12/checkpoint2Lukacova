<?php

/** @var string $contentHTML */
/** @var Produkt[] $data */

/** @var \App\Core\LinkGenerator $link */

use App\Models\Produkt;
?>

    <link rel="stylesheet" href="public/css/styleEshop.css">

    <section class="produkty" id="products">
        <div class="nazov">
            <h2>Naše produkty</h2>
            <br>
            <a href="<?= $link->url("home.newProduct") ?>">Pridať produkt</a>
            <br>
        </div>
        <?php
        foreach ($data as $produkt){
        ?><div class="zoznam" style="width: 20rem;">

            <div class="produkt">
               <?php if ($produkt->getObrazok()) { ?> <img src="<?php echo $produkt->getObrazok() ?>" alt="">
                <h3><?php echo $produkt->getNazov() ?></h3>
                <div class="popis">
                    <span><?php echo $produkt->getCena() ?> €</span>
                    <a href="<?= $link->url("home.updateProduct") ?>">Upraviť</a>
                    <a href="<?= $link->url("home.deleteProduct") ?>">Odstrániť</a>
                </div>
            </div>
            <?php
        }
            ?>
        </div>
    <?php } ?>
    </section>

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
