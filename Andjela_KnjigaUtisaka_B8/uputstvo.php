<?php
$title = "Knjiga utisaka | Uputstvo";
$active = "uputstvo";
require "./components/header.php";
?>

<main>
    <section>
        <h2>Početna</h2>
        <p>
            Na početnoj stranici nalazi se forma za unos podataka. <br>
            Korisnik unosi ime, email adresu i komentar u predviđena polja. <br>
            Nakon klika na dugme „Dodaj komentar“, podaci se upisuju u bazu podataka zajedno sa datumom i vremenom unosa.
        </p>
    </section>

    <section>
        <h2>O autoru</h2>
        <p>
            Na stranici o autoru nalaze se osnovni podaci o autoru aplikacije i naziv aplikacije.
        </p>
    </section>

    <section>
        <h2>Uputstvo</h2>
        <p>
            Na stranici uputstvo nalazi se kratko objašnjenje načina korišćenja aplikacije i njene strukture.
        </p>
    </section>
</main>

<?php require "./components/footer.php"; ?>