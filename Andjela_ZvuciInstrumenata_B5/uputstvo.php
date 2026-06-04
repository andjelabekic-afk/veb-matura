<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./slike/LOGO.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="./css/uputstva.css">
    <title>B5 - Основна школа "Соња Маринковић" | Упутство</title>
</head>
<body>
    <header>
        <h1>Основна школа "Соња Маринковић" | Упутство</h1>
        <?php 
            $url = "uputstvo";
            require "./components/nav.php";
        ?>
    </header>
    <main>
        <section>
            <h2>Почетна</h2>
            <p>
                На почетној страници можете видети табелу са неколико инструмената. <br>
                Кликом на слику инструмента отвара се прозор са основним подацима о инструменту са Википедије. <br>
                Кликом на "Сазнај више" отвара се прозор са основним подацима групе којој тај инструмент припада. <br>
                Преласком миша преко слике звучника пушта се звук тог инструмента.
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