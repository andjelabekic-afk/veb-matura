<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./slike/LOGO.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="./css/uputstva.css">
    <title>Б1 - Фото галерија | Упутство</title>
</head>
<body>
    <header>
        <h1>Фото галерија - Упутство</h1>
        <?php 
            $url = "uputstvo";
            require "./components/nav.php";
        ?>
    </header>
    <main>
        <section>
            <h2>Почетна</h2>
            <p>
                На почетној страници можете видети галерију слика. <br>
                Галерија се састоји из једне централне слике, њеног описа изнад слике и 10 малих слика испод. <br>
                Кликом на једну од малих слика она се поставља као централна слика, а њен опис замењује претходни опис.
            </p>
        </section>
        <section>
            <h2>О аутору</h2>
            <p>
                На страници О аутору можете видети основне податке о аутору ове апликације и контакт податке.
            </p>
        </section>
        <section>
            <h2>Упутство</h2>
            <p>
                На страници Упутство налази се кратко објашњење начина коришћења апликације. <br>
                Апликација се састоји од три странице: Почетна, О аутору и Упутство. <br>
                CSS датотеке се налазе у фолдеру css, JavaScript датотека у фолдеру js, а слике у фолдеру slike.
            </p>
        </section>
    </main>
</body>
</html>
