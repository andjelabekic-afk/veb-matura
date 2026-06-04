<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./slike/LOGO.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="./css/pocetna.css">
    <title>Б4 - Основна школа "Соња Маринковић"</title>
</head>
<body>
    <header>
        <h1>Основна школа "Соња Маринковић"</h1>
        <?php 
            $url = "index";
            require "./components/nav.php";
        ?>
    </header>
    <main>
        <div class="pikaso glow">
            <span>П</span>
            <span>И</span>
            <span>К</span>
            <span>А</span>
            <span>С</span>
            <span>О</span>
        </div>
        <div class="galerija">
            <div class="info">
                <div id="slike">
                    <img src="./slike/001.jpg" class="active" id="slika1"></img>
                    <img src="./slike/002.jpg" id="slika2"></img>
                    <img src="./slike/003.jpg" id="slika3"></img>
                    <img src="./slike/004.jpg" id="slika4"></img>
                    <img src="./slike/005.jpg" id="slika5"></img>
                </div>
                <div class="podaci">
                    <h2 id="naziv" class="glow">Стари гитариста</h2>
                    <h4 id="godina">1903</h4>
                    <p id="opis">Стари гитариста је уљана слика Пабла Пикаса, коју је створио крајем 1903. и почетком 1904. године. На њој је приказан старији музичар, изнемогао човек у излизаној одећи, који је погрбљен над гитаром док свира на улицама Барселоне у Шпанији.</p>
                </div>
            </div>
            <div class="indikatori">
                <div class="indikator active" id="slika1-indikator"></div>
                <div class="indikator" id="slika2-indikator"></div>
                <div class="indikator" id="slika3-indikator"></div>
                <div class="indikator" id="slika4-indikator"></div>
                <div class="indikator" id="slika5-indikator"></div>
            </div>
        </div>
    </main>
<?php
require "./components/footer.php";
?>
    <script src="./js/pocetna.js"></script>
</body>
</html>
