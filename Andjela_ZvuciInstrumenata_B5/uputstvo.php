<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./slike/LOGO.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="./css/uputstva.css">
    <title>Б5 - Основна школа „Соња Маринковић” | Упутство</title>
</head>
<body>
    <header>
        <h1>Основна школа „Соња Маринковић” | Упутство</h1>
        <?php 
            $url = "uputstvo";
            require "./components/nav.php";
        ?>
    </header>

    <main>
        <section>
            <h2>Почетна</h2>
            <p>
                На почетној страници налази се табела са називима инструмената, њиховим сликама и сликом звучника. <br>
                Левим кликом миша на слику инструмента отвара се страница на Википедији са описом изабраног инструмента. <br>
                Преласком миша преко слике звучника чује се карактеристичан звук тог инструмента. <br>
                Кликом на линк „Сазнај више” отвара се прозор са додатним информацијама о групи инструмената.
            </p>
        </section>

        <section>
            <h2>О аутору</h2>
            <p>
                На страници О аутору приказани су основни подаци о ученику који је израдио ову веб апликацију.
            </p>
        </section>

        <section>
            <h2>Упутство</h2>
            <p>
                Страница Упутство садржи кратко објашњење начина коришћења апликације и њене структуре. <br>
                Апликација се састоји од три странице: Почетна, О аутору и Упутство. <br>
                CSS код и JavaScript код издвојени су у посебне екстерне датотеке.
            </p>
        </section>
    </main>

    <?php require "./components/footer.php"; ?>
</body>
</html>
