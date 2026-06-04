<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./slike/LOGO.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="./css/pocetna.css">
    <title>Б3 - Основна школа "Соња Маринковић"</title>
</head>
<body>
<header>
    <h1>Основна школа "Соња Маринковић"</h1>
    <?php
    $url = "index";
    require "./components/nav.php";
    ?>
</header>
<h2>Србија и њени суседи</h2>
<main>
    <div class="naziv glow">
        <span>Г</span>
        <span>Е</span>
        <span>О</span>
        <span>Г</span>
        <span>Р</span>
        <span>А</span>
        <span>Ф</span>
        <span>И</span>
        <span>Ј</span>
        <span>А</span>
    </div>
    <div class="galerija">
        <img id="mapa" src="./slike/mapa.svg" alt="мапа">
        <div id="srbija" class="zastava">
            <img src="./slike/srbija.svg" alt="србија-застава">
            <p>Србија</p>
        </div>
        <div id="madjarska" class="zastava">
            <img src="./slike/madjarska.svg" alt="мађарска-застава">
            <p>Мађарска</p>
        </div>
        <div id="hrvatska" class="zastava">
            <img src="./slike/hrvatska.svg" alt="хрватска-застава">
            <p>Хрватска</p>
        </div>
        <div id="bih" class="zastava">
            <img src="./slike/bih.svg" alt="бих-застава">
            <p>Босна и Херцеговина</p>
        </div>
        <div id="crna_gora" class="zastava">
            <img src="./slike/crna_gora.svg" alt="црна_гора-застава">
            <p>Црна Гора</p>
        </div>
        <div id="albanija" class="zastava">
            <img src="./slike/albanija.svg" alt="албанија-застава">
            <p>Албанија</p>
        </div>
        <div id="makedonija" class="zastava">
            <img src="./slike/makedonija.svg" alt="македонија-застава">
            <p>Македонија</p>
        </div>
        <div id="bugarska" class="zastava">
            <img src="./slike/bugarska.svg" alt="бугарска-застава">
            <p>Бугарска</p>
        </div>
        <div id="rumunija" class="zastava">
            <img src="./slike/rumunija.svg" alt="румунија-застава">
            <p>Румунија</p>
        </div>
    </div>
</main>
<audio src="./audio/srbija.mp3" id="audio-srbija"></audio>
<audio src="./audio/madjarska.mp3" id="audio-madjarska"></audio>
<audio src="./audio/hrvatska.mp3" id="audio-hrvatska"></audio>
<audio src="./audio/bih.mp3" id="audio-bih"></audio>
<audio src="./audio/crna gora.mp3" id="audio-crna_gora"></audio>
<audio src="./audio/albanija.mp3" id="audio-albanija"></audio>
<audio src="./audio/makedonija.mp3" id="audio-makedonija"></audio>
<audio src="./audio/bugarska.mp3" id="audio-bugarska"></audio>
<audio src="./audio/rumunija.mp3" id="audio-rumunija"></audio>
<?php
require "./components/footer.php";
?>
<script src="./js/pocetna.js"></script>
</body>
</html>