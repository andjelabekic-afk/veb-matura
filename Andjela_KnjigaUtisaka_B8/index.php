<?php
require "./db.php";

$poruka = "";
$greska = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ime = trim($_POST["ime"]);
    $email = trim($_POST["email"]);
    $komentar = trim($_POST["komentar"]);
    $datum = date("Y-m-d H:i:s");

    if ($ime == "" || $email == "" || $komentar == "") {
        $greska = "Sva polja moraju biti popunjena.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $greska = "Email adresa nije u ispravnom formatu.";
    } else {
        $ime = mysqli_real_escape_string($conn, $ime);
        $email = mysqli_real_escape_string($conn, $email);
        $komentar = mysqli_real_escape_string($conn, $komentar);

        $upit = "INSERT INTO Utisak (Ime, Email, Komentar, Datum)
                 VALUES ('$ime', '$email', '$komentar', '$datum')";

        if (mysqli_query($conn, $upit)) {
            $poruka = "Komentar je uspešno dodat.";
        } else {
            $greska = "Greška pri upisu u bazu.";
        }
    }
}

$title = "Knjiga utisaka | Početna";
$active = "pocetna";
require "./components/header.php";
?>

<main>
    <form id="formaUtisak" class="forma" method="post" action="" novalidate>
        <div class="red">
            <label for="ime">Ime:</label>
            <input type="text" name="ime" id="ime">
        </div>

        <div class="red">
            <label for="email">Email:</label>
            <input type="text" name="email" id="email">
        </div>

        <div class="red">
            <label for="komentar">Komentar:</label>
            <textarea name="komentar" id="komentar"></textarea>
        </div>

        <div class="dugme">
            <button type="submit">Dodaj komentar</button>
        </div>

        <?php if ($poruka != ""): ?>
            <p class="poruka"><?php echo $poruka; ?></p>
        <?php endif; ?>

        <?php if ($greska != ""): ?>
            <p class="greska"><?php echo $greska; ?></p>
        <?php endif; ?>
    </form>
</main>

<script src="./js/validacija.js"></script>
<?php require "./components/footer.php"; ?>