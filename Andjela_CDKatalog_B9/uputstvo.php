<?php
$title = "CD katalog | Korisničko uputstvo";
$active = "uputstvo";
require "./components/header.php";
?>

<main>
    <section>
        <h2>Katalog</h2>
        <p>
            Na stranici Katalog nalaze se polja za pretragu albuma po izvođaču, nazivu albuma,
            žanru, godini izdanja i izdavačkoj kući. <br>
            U tekstualna polja moguće je uneti deo naziva, a aplikacija će prikazati sve albume
            koji sadrže uneti tekst. <br>
            Nakon unosa kriterijuma potrebno je kliknuti na dugme „Traži“.
        </p>
    </section>

    <section>
        <h2>Rezultati pretrage</h2>
        <p>
            Rezultati pretrage prikazuju se tabelarno. <br>
            Tabela sadrži podatke o izvođaču, nazivu albuma, žanru, godini izdanja,
            izdavačkoj kući i slici omota albuma.
        </p>
    </section>

    <section>
        <h2>O autoru</h2>
        <p>
            Autor aplikacije: Andjela Bekic <br>
            Email: andjela.bekic2007@gmail.com <br>
            Naziv aplikacije: CD katalog
        </p>
    </section>

    <section>
        <h2>Korisničko uputstvo</h2>
        <p>
            Ova stranica sadrži kratko objašnjenje načina korišćenja aplikacije. <br>
            Povratak na stranicu Katalog moguć je klikom na odgovarajući link u meniju.
        </p>
    </section>
</main>

<?php require "./components/footer.php"; ?>