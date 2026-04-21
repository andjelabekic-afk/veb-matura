<?php
session_start();

$poruka = "";
$greska = "";

$korisnici = [
    "Test" => "test123",
    "Test2" => "test2123"
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);

    if (isset($korisnici[$username]) && $korisnici[$username] == $password) {
        $_SESSION["ulogovan"] = true;
        $_SESSION["username"] = $username;
        $poruka = "Dobrodošli na stranicu!";
    } else {
        $greska = "Pogrešno korisničko ime ili lozinka.";
    }
}

$title = "Biblioteka | Početna";
$active = "pocetna";
require "./components/header.php";
?>

<main>
    <div class="info-nalozi">
        <p><strong>Možete se logovati sa sledećim nalozima</strong></p>

        <div class="nalozi">
            <div>
                <p>Korisničko ime: Test</p>
                <p>Lozinka: test123</p>
            </div>
            <div>
                <p>Korisničko ime: Test2</p>
                <p>Lozinka: test2123</p>
            </div>
        </div>

        <hr class="linija">

        <p class="login-tekst">
            Unesite parametre za logovanje
            <a href="#">Registrujte se</a>
            ako nemate nalog
        </p>
    </div>

    <form method="post" action="">
        <fieldset>
            <legend>Forma za logovanje</legend>

            <div class="form-group">
                <label for="username">Korisničko ime:</label>
                <input type="text" name="username" id="username">
            </div>

            <div class="form-group">
                <label for="password">Lozinka:</label>
                <input type="password" name="password" id="password">
            </div>
        </fieldset>

        <button type="submit">Prijava</button>
    </form>

    <?php if ($poruka != ""): ?>
        <p class="poruka"><?php echo $poruka; ?></p>
    <?php endif; ?>

    <?php if ($greska != ""): ?>
        <p class="greska"><?php echo $greska; ?></p>
    <?php endif; ?>
</main>

<?php require "./components/footer.php"; ?>