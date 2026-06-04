<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./slike/LOGO.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="./css/pocetna.css">
    <title>B5 - Основна школа "Соња Маринковић"</title>
</head>
<body>
    <header>
        <h1>Основна школа "Соња Маринковић"</h1>
        <?php 
            $url = "index";
            require "./components/nav.php";
        ?>
    </header>
    <h2>Звуци инструмената</h2>
    <main>
        <div style="display: flex">
            <div class="naziv glow">
                <span>М</span>
                <span>У</span>
                <span>З</span>
                <span>И</span>
                <span>Ч</span>
                <span>К</span>
                <span>А</span>
            </div>
            <div class="naziv glow">
                <span>К</span>
                <span>У</span>
                <span>Л</span>
                <span>Т</span>
                <span>У</span>
                <span>Р</span>
                <span>А</span>
            </div>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Назив инструмента</th>
                    <th>Слика инструмента</th>
                    <th>Звук инструмента</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Гитара</td>
                    <td><div class="instrument"><img src="./slike/gitara.jpg" alt="gitara" id="gitara"></div></td>
                    <td>
                        <div class="zvucnik"><img src="./slike/zvucnik.svg" alt="zvucnik" id="gitara-zvuk"></div>
                        <a href="./instrument.php?klasa=zicani" target="_blank" class="saznaj-vise">Сазнај више</a>
                    </td>
                </tr>
                <tr>
                    <td>Виолина</td>
                    <td><div class="instrument"><img src="./slike/violina.jpg" alt="violina" id="violina"></div></td>
                    <td>
                        <div class="zvucnik"><img src="./slike/zvucnik.svg" alt="zvucnik" id="violina-zvuk"></div>
                        <a href="./instrument.php?klasa=gudacki" target="_blank" class="saznaj-vise">Сазнај више</a>
                    </td>
                </tr>
                <tr>
                    <td>Клавир</td>
                    <td><div class="instrument"><img src="./slike/klavir.jpg" alt="klavir" id="klavir"></div></td>
                    <td>
                        <div class="zvucnik"><img src="./slike/zvucnik.svg" alt="zvucnik" id="klavir-zvuk"></div>
                        <a href="./instrument.php?klasa=dirke" target="_blank" class="saznaj-vise">Сазнај више</a>
                    </td>
                </tr>
                <tr>
                    <td>Бубњеви</td>
                    <td><div class="instrument"><img src="./slike/bubnjevi.jpg" alt="bubnjevi" id="bubnjevi"></div></td>
                    <td>
                        <div class="zvucnik"><img src="./slike/zvucnik.svg" alt="zvucnik" id="bubnjevi-zvuk"></div>
                        <a href="./instrument.php?klasa=udaraljke" target="_blank" class="saznaj-vise">Сазнај више</a>
                    </td>
                </tr>
                <tr>
                    <td>Хармоника</td>
                    <td><div class="instrument"><img src="./slike/harmonika.jpg" alt="harmonika" id="harmonika"></div></td>
                    <td>
                        <div class="zvucnik"><img src="./slike/zvucnik.svg" alt="zvucnik" id="harmonika-zvuk"></div>
                        <a href="./instrument.php?klasa=dirke" target="_blank" class="saznaj-vise">Сазнај више</a>
                    </td>
                </tr>
                <tr>
                    <td>Контрафагот</td>
                    <td><div class="instrument"><img src="./slike/kontrafagot.webp" alt="kontrafagot" id="kontrafagot"></div></td>
                    <td>
                        <div class="zvucnik"><img src="./slike/zvucnik.svg" alt="zvucnik" id="kontrafagot-zvuk"></div>
                        <a href="./instrument.php?klasa=duvacki" target="_blank" class="saznaj-vise">Сазнај више</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </main>
    <audio src="./audio/gitara.mp3" id="audio-gitara">
    <audio src="./audio/violina.mp3" id="audio-violina">
    <audio src="./audio/klavir.mp3" id="audio-klavir">
    <audio src="./audio/bubnjevi.mp3" id="audio-bubnjevi">
    <audio src="./audio/harmonika.mp3" id="audio-harmonika">
    <audio src="./audio/kontrafagot.mp3" id="audio-kontrafagot">
<?php
require "./components/footer.php";
?>
    <script src="./js/pocetna.js"></script>
</body>
</html>