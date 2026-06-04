<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./slike/LOGO.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="./css/pocetna.css">
    <title>B1 - Foto Galerija</title>
</head>
<body>
    <header>
        <h1>Foto galerija</h1>
        <?php 
            $url = "index";
            require "./components/nav.php";
        ?>
    </header>
    <main class="gallery-container">
        <div class="gallery">
            <textarea readonly>Mapa prikazuje raspored sedam svetskih čuda antičkog sveta. Ona pomaže korisniku da vidi gde su se nalazila najpoznatija graditeljska i umetnička dostignuća starog veka. Čuda antičkog sveta pokazuju moć, znanje, bogatstvo i veštinu starih civilizacija.</textarea>
            <div class="center-image">
                <img src="./slike/slika1.jpg" alt="Centralna slika">
            </div>
            <div class="small-image-list">
                <div class="small-image"><img src="./slike/slika1.jpg" alt="slika 1" id="slika1"></div>
                <div class="small-image"><img src="./slike/slika2.jpg" alt="slika 2" id="slika2"></div>
                <div class="small-image"><img src="./slike/slika3.jpg" alt="slika 3" id="slika3"></div>
                <div class="small-image"><img src="./slike/slika4.jpg" alt="slika 4" id="slika4"></div>
                <div class="small-image"><img src="./slike/slika5.jpg" alt="slika 5" id="slika5"></div>
                <div class="small-image"><img src="./slike/slika6.jpg" alt="slika 6" id="slika6"></div>
                <div class="small-image"><img src="./slike/slika7.jpg" alt="slika 7" id="slika7"></div>
                <div class="small-image"><img src="./slike/slika8.jpg" alt="slika 8" id="slika8"></div>
                <div class="small-image"><img src="./slike/slika9.jpg" alt="slika 9" id="slika9"></div>
                <div class="small-image"><img src="./slike/slika10.jpg" alt="slika 10" id="slika10"></div>
            </div>
        </div>
    </main>
    <script src="./js/pocetna.js"></script>
</body>
</html>
