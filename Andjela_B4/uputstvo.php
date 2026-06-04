<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./slike/LOGO.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="./css/uputstva.css">
    <title>Б4 - Основна школа "Соња Маринковић" | Упутство</title>
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
                На почетној страници можете видети неколико Пикасових слика. <br>
                Поред сваке слике налази се име слике, година када је насликана и кратак опис саме слике. <br>
                Слике се смењују на свака 3 секунде, а помоћу индикатора испод слике можете видети која слика је тренутно приказана.
            </p>
        </section>
        <section>
            <h2>Аутор</h2>
            <p>На страници О аутору можете видети ко је аутор ове апликације и како га можете контактирати.</p>
        </section>
        <section>
            <h2>Упутство</h2>
            <p>На страници Упутство можете видети кратко корисничко упутство и објашњење структуре апликације.</p>
        </section>
    </main>
<?php
require "./components/footer.php";
?>
</body>
</html>
