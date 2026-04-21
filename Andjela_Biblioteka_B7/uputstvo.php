<?php
$title = "Biblioteka | Uputstvo";
$active = "uputstvo";
require "./components/header.php";
?>

<main>
    <section>
        <h2>Početna</h2>
        <p>
            Na početnoj stranici nalazi se forma za logovanje. <br>
            Korisnik unosi korisničko ime i lozinku u predviđena polja. <br>
            Nakon uspešnog logovanja prikazuje se poruka dobrodošlice.
        </p>
    </section>

    <section>
        <h2>Pregled</h2>
        <p>
            Na stranici Pregled prikazani su podaci iz XML fajla biblioteka.xml u tabeli. <br>
            Tabela sadrži podatke o ISBN broju, naslovu knjige, stanju i broju čitanja. <br>
            Podaci su sortirani prema najčitanijoj knjizi.
        </p>
    </section>

    <section>
        <h2>O autoru</h2>
        <p>
            Na stranici O autoru nalaze se osnovni podaci o autoru aplikacije.
        </p>
    </section>

    <section>
        <h2>Uputstvo</h2>
        <p>
            Na stranici Uputstvo nalazi se kratko objašnjenje načina korišćenja aplikacije i njenih stranica.
        </p>
    </section>
</main>

<?php require "./components/footer.php"; ?>