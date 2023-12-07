
<div class="uvod">
    <div class="left">
        <h2>VŠETKO</h2>
        <h3>pre tvoje auto</h3>
        <p> Ak je tvojím hobby starostlivosť o autá, sme tu pre teba!</p>
        <button type="button" id="button">E-shop </button>
    </div>
    <div class="right">
        <img src="images/carParts.png" class="motor" alt="motor">
        <div class="backgr"></div>
    </div>
</div>

<div class="pokr">
    <div class="left">
        <img src="images/part.png" class="part" alt="part">
        <div class="backgr"></div>
    </div>
    <div class="right">
        <h2>ČOKOĽVEK</h2>
        <h3> čo potrebujete </h3>
        <p> Stačí nám zavolať a my vám radi poradíme! </p>
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

    var button = document.getElementById("button")
    button.addEventListener("click", function() {
        window.location.href = "eshop.html";
    });

    var logo = document.getElementById("logo")
    logo.addEventListener("click", function() {
        window.location.href = "domov.html";
    });


</script>
