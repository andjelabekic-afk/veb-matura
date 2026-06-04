<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./slike/LOGO.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="./css/uputstva.css">
    <title>B11 - Vremenska prognoza | Uputstvo</title>
</head>
<body>
    <header>
        <h1>Turistička agencija "Planinar" - Uputstvo</h1>

        <?php 
            $url = "uputstvo";
            require "./components/nav.php";
        ?>
    </header>

    <main>
        <section>
            <h2>Početna</h2>
            <p>
                Na početnoj stranici korisnik može da izabere grad ili lokaciju u Srbiji
                za koju želi da vidi vremensku prognozu. <br>
                Grad se bira iz padajuće liste, a nakon izbora u IFRAME prozoru prikazuje
                se dnevna vremenska prognoza za izabranu lokaciju. <br>
                Pored vremenske prognoze prikazan je i kratak opis najznačajnijih
                turističkih mesta koja se mogu posetiti u tom gradu.
            </p>
        </section>

        <section>
            <h2>O autoru</h2>
            <p>
                Na stranici O autoru nalaze se osnovni podaci o autoru aplikacije,
                kao što su ime, prezime, odeljenje i škola. <br>
                Ova stranica služi za predstavljanje učenika koji je izradio web aplikaciju.
            </p>
        </section>

        <section>
            <h2>Uputstvo</h2>
            <p>
                Stranica Uputstvo sadrži kratko korisničko uputstvo i objašnjenje
                strukture aplikacije. <br>
                Aplikacija se sastoji od tri stranice: Početna, O autoru i Uputstvo. <br>
                CSS kod je izdvojen u posebne datoteke u folderu css, dok se slike,
                ikone i ostali resursi nalaze u folderu slike.
            </p>
        </section>
    </main>

    <footer>
        <p>Turistička agencija "Planinar" &copy; 2026</p>
    </footer>
</body>
</html>
