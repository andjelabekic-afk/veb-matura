<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./slike/LOGO.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="./css/uputstva.css">
    <title>Б2 - Домаће животиње | Упутство</title>
</head>
<body>
    <header>
        <h1>Домаће животиње - Упутство</h1>
        <?php 
            $url = "uputstvo";
            require "./components/nav.php";
        ?>
    </header>
    <main>
        <section>
            <h2>Почетна</h2>
            <p>
                На почетној страници можете видети слике 5 домаћих животиња: пас, патка, мачка, кокошка и крава.<br>
                Кликом на било коју слику отвара се прозор са називом и описом изабране животиње. <br>
                Преласком миша преко слике чује се звук који та животиња производи.
            </p>
        </section>
        <section>
            <h2>Аутор</h2>
            <p>На страници О аутору можете видети ко је аутор ове апликације и како га можете контактирати.</p>
        </section>
        <section>
            <h2>Упутство</h2>
            <p>На страници Упутство можете видети објашњење начина коришћења апликације.</p>
        </section>
    </main>
<?php 
require "./components/footer.php";
?>
</body>
</html>
