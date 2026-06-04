<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./slike/LOGO.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="./css/pocetna.css">
    <title>Б1 - Фото галерија</title>
</head>
<body>
    <header>
        <h1>Фото галерија</h1>
        <?php 
            $url = "index";
            require "./components/nav.php";
        ?>
    </header>
    <main class="gallery-container">
        <div class="gallery">
            <textarea readonly>Мапа приказује распоред седам светских чуда античког света и места на којима су се она налазила. На њој можемо видети да су чуда била распоређена у различитим деловима старог света, од Египта и Месопотамије до Мале Азије и Грчке. Ова мапа помаже кориснику да лакше повеже свако чудо са његовим географским положајем и историјским окружењем. Седам светских чуда античког света представљају најпознатија градитељска и уметничка достигнућа старих цивилизација. Она показују велико знање, богатство, веровања и вештину народа који су их створили. Од свих античких чуда до данас је у потпуности сачувана само Кеопсова пирамида у Гизи, док су остала позната на основу историјских извора, описа и археолошких остатака.</textarea>
            <div class="center-image">
                <img src="./slike/slika1.jpg" alt="Централна слика">
            </div>
            <div class="small-image-list">
                <div class="small-image"><img src="./slike/slika1.jpg" alt="слика 1" id="slika1"></div>
                <div class="small-image"><img src="./slike/slika2.jpg" alt="слика 2" id="slika2"></div>
                <div class="small-image"><img src="./slike/slika3.jpg" alt="слика 3" id="slika3"></div>
                <div class="small-image"><img src="./slike/slika4.jpg" alt="слика 4" id="slika4"></div>
                <div class="small-image"><img src="./slike/slika5.jpg" alt="слика 5" id="slika5"></div>
                <div class="small-image"><img src="./slike/slika6.jpg" alt="слика 6" id="slika6"></div>
                <div class="small-image"><img src="./slike/slika7.jpg" alt="слика 7" id="slika7"></div>
                <div class="small-image"><img src="./slike/slika8.jpg" alt="слика 8" id="slika8"></div>
                <div class="small-image"><img src="./slike/slika9.jpg" alt="слика 9" id="slika9"></div>
                <div class="small-image"><img src="./slike/slika10.jpg" alt="слика 10" id="slika10"></div>
            </div>
        </div>
    </main>
    <script src="./js/pocetna.js"></script>
</body>
</html>
