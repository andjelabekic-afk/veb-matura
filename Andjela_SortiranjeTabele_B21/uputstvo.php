<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./slike/LOGO.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="./css/uputstva.css">
    <title>B21 - Sortiranje tabele | Uputstvo</title>
</head>
<body>
    <?php require "./components/header.php"; ?>

    <main>
        <section>
            <h2>Uputstvo</h2>
            <p>
                Na početnoj stranici prikazana je tabela sa kolonama Rbr, Ime i Prezime. <br>
                Klikom na naziv kolone vrši se sortiranje podataka u rastućem redosledu. <br>
                Ponovnim klikom na istu kolonu vrši se sortiranje u opadajućem redosledu.
            </p>
            <p>
                Tabela se može sortirati po rednom broju, imenu i prezimenu. <br>
                Zaglavlje tabele je posebno istaknuto drugom bojom radi lakšeg pregleda podataka.
            </p>
            <p>
                Na stranici O autoru nalaze se osnovni podaci o autoru aplikacije, naziv aplikacije
                i datum kreiranja.
            </p>
        </section>
    </main>

    <?php 
        $url = "uputstvo";
        require "./components/footer.php";
    ?>
</body>
</html>