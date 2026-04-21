<?php
$title = "Rezervacija autobuskih karata | Uputstvo";
$active = "uputstvo";
require "./components/header.php";
?>

<main>
    <section>
        <h2>Početna</h2>
        <p>
            Na početnoj stranici prikazana su sedišta autobusa. <br>
            Slobodna sedišta obeležena su zelenom bojom, a rezervisana crvenom bojom. <br>
            Klikom na slobodno sedište njegov broj se automatski upisuje u polje „Broj sedišta”.
        </p>
    </section>

    <section>
        <h2>Rezervacija</h2>
        <p>
            Nakon izbora sedišta potrebno je uneti ime i prezime i email adresu. <br>
            Posle klika na dugme „Pošalji”, izabrano sedište postaje rezervisano i menja boju u crvenu. <br>
            Podatak o rezervaciji se upisuje u bazu podataka.
        </p>
    </section>

    <section>
        <h2>O autoru</h2>
        <p>
            Na stranici O autoru nalaze se osnovni podaci o autoru aplikacije i naziv aplikacije.
        </p>
    </section>

    <section>
        <h2>Uputstvo</h2>
        <p>
            Ova stranica sadrži kratko objašnjenje načina korišćenja aplikacije i njene strukture.
        </p>
    </section>
</main>

<?php require "./components/footer.php"; ?>