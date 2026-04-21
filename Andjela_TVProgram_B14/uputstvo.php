<?php
$title = "Uputstvo";
require "./components/header.php";

$footer_links = [
    ["href" => "./index.php", "label" => "Početna"],
    ["href" => "./kontakt.php", "label" => "Kontakt"]
];
?>

<main class="content-page">
    <h2>Uputstvo</h2>

    <p>
        Na stranici Program nalaze se polja za izbor datuma i tipa emisije.
        Klikom na dugme „Pronađi“ prikazuje se TV program za izabrani datum.
    </p>

    <p>
        Polje Datum sadrži sve datume koji postoje kao tekstualni fajlovi u folderu sa programima.
        Polje Tip emisije sadrži sve tipove emisija koji se pojavljuju u datotekama.
    </p>

    <p>
        Rezultati pretrage prikazuju se u tabeli sa kolonama:
        vreme emitovanja, naziv emisije i grafički prikaz tipa emisije.
    </p>

    <p>
        Na stranici Kontakt nalaze se polja za unos imena, email adrese, naslova poruke i poruke.
        Funkcionalnost slanja poruke nije potrebno realizovati.
    </p>
</main>

<?php require "./components/footer.php"; ?>