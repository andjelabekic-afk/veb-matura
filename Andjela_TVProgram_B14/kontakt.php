<?php
$title = "Kontakt";
require "./components/header.php";

$footer_links = [
    ["href" => "./index.php", "label" => "Početna"],
    ["href" => "./uputstvo.php", "label" => "Uputstvo"]
];
?>

<main class="content-page">
    <h2>Kontakt</h2>

    <form class="kontakt-forma">
        <div class="kontakt-red">
            <label for="ime">Ime:</label>
            <input type="text" id="ime" name="ime">
        </div>

        <div class="kontakt-red">
            <label for="email">E-mail:</label>
            <input type="text" id="email" name="email">
        </div>

        <div class="kontakt-red">
            <label for="naslov">Naslov poruke:</label>
            <input type="text" id="naslov" name="naslov">
        </div>

        <div class="kontakt-red">
            <label for="poruka">Poruka:</label>
            <textarea id="poruka" name="poruka"></textarea>
        </div>

        <div class="kontakt-dugme">
            <button type="button">Pošalji</button>
        </div>
    </form>
</main>

<?php require "./components/footer.php"; ?>