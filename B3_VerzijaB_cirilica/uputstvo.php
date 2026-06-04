<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./slike/LOGO.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="./css/uputstva.css">
    <title>Б3 - Основна школа "Соња Маринковић" | Упутство</title>
</head>
<body>
<header>
    <h1>Основна школа "Соња Маринковић" - Упутство</h1>
    <?php
    $url = "uputstvo";
    require "./components/nav.php";
    ?>
</header>
<main>
    <section>
        <h2>Почетна</h2>
        <p>
            На почетној страници можете видети карту Србије са њеним суседима. <br>
            На територији сваке од држава налази се застава и назив државе. <br>
            Кликом на заставу или назив државе отвара се прозор са основним подацима државе. <br>
            Преласком миша преко заставе државе пушта се химна те земље.
        </p>
    </section>
    <section>
        <h2>Аутор</h2>
        <p>На страници о аутору можете видети ко је аутор ове апликације и како га можете контактирати.</p>
    </section>
    <section>
        <h2>Упутство</h2>
        <p>На страници упутство можете видети упутства апликације.</p>
    </section>
</main>
<?php
require "./components/footer.php";
?>
</body>
</html>