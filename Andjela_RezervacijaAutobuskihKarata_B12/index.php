<?php
require "./db.php";

$poruka = "";
$greska = "";

$brojSedista = "";
$imePrezime = "";
$email = "";

$minSeat = 2;
$maxSeat = 53; // ako treba striktno po tekstu zadatka, promeni na 52

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $brojSedista = trim($_POST["broj_sedista"]);
    $imePrezime = trim($_POST["ime_prezime"]);
    $email = trim($_POST["email"]);

    if ($brojSedista == "" || $imePrezime == "" || $email == "") {
        $greska = "Sva polja moraju biti popunjena.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $greska = "Email adresa nije u ispravnom formatu.";
    } else {
        $brojSedistaInt = (int)$brojSedista;

        $provera = mysqli_query($conn, "SELECT * FROM rezervacije WHERE BrojSedista = $brojSedistaInt");

        if (mysqli_num_rows($provera) > 0) {
            $red = mysqli_fetch_assoc($provera);

            if ((int)$red["Rezervacija"] === 1) {
                $greska = "Izabrano sedište je već rezervisano.";
            } else {
                $upit = "UPDATE rezervacije SET Rezervacija = 1 WHERE BrojSedista = $brojSedistaInt";
                if (mysqli_query($conn, $upit)) {
                    $poruka = "Rezervacija je uspešno sačuvana.";
                    $brojSedista = "";
                    $imePrezime = "";
                    $email = "";
                } else {
                    $greska = "Greška pri rezervaciji.";
                }
            }
        } else {
            $upit = "INSERT INTO rezervacije (BrojSedista, Rezervacija) VALUES ($brojSedistaInt, 1)";
            if (mysqli_query($conn, $upit)) {
                $poruka = "Rezervacija je uspešno sačuvana.";
                $brojSedista = "";
                $imePrezime = "";
                $email = "";
            } else {
                $greska = "Greška pri rezervaciji.";
            }
        }
    }
}

$rezervisanaSedista = [];
$rezultat = mysqli_query($conn, "SELECT BrojSedista, Rezervacija FROM rezervacije");

while ($red = mysqli_fetch_assoc($rezultat)) {
    $rezervisanaSedista[(int)$red["BrojSedista"]] = (int)$red["Rezervacija"];
}

$title = "Rezervacija autobuskih karata | Početna";
$active = "pocetna";
require "./components/header.php";
?>

<main>
    <p class="naslov-sekcije">PRIKAZ SEDIŠTA AUTOBUSA:</p>

    <div class="bus-layout">
        <?php for ($seat = $minSeat; $seat <= $maxSeat; $seat += 4): ?>
            <div class="bus-row">
                <?php for ($i = 0; $i < 2; $i++): ?>
                    <?php $broj = $seat + $i; ?>
                    <?php if ($broj <= $maxSeat): ?>
                        <?php $rezervisano = isset($rezervisanaSedista[$broj]) && $rezervisanaSedista[$broj] == 1; ?>
                        <button
                            type="button"
                            class="seat <?php echo $rezervisano ? 'reserved' : 'free'; ?>"
                            data-seat="<?php echo $broj; ?>"
                            <?php echo $rezervisano ? 'disabled' : ''; ?>
                        >
                            <?php echo $broj; ?>
                        </button>
                    <?php endif; ?>
                <?php endfor; ?>

                <div class="gap"></div>

                <?php for ($i = 2; $i < 4; $i++): ?>
                    <?php $broj = $seat + $i; ?>
                    <?php if ($broj <= $maxSeat): ?>
                        <?php $rezervisano = isset($rezervisanaSedista[$broj]) && $rezervisanaSedista[$broj] == 1; ?>
                        <button
                            type="button"
                            class="seat <?php echo $rezervisano ? 'reserved' : 'free'; ?>"
                            data-seat="<?php echo $broj; ?>"
                            <?php echo $rezervisano ? 'disabled' : ''; ?>
                        >
                            <?php echo $broj; ?>
                        </button>
                    <?php endif; ?>
                <?php endfor; ?>
            </div>
        <?php endfor; ?>
    </div>

    <form id="rezervacija-form" class="forma" method="post" action="">
        <div class="form-row">
            <label for="broj_sedista">Broj sedišta:</label>
            <input type="text" name="broj_sedista" id="broj_sedista" value="<?php echo htmlspecialchars($brojSedista); ?>">
        </div>

        <div class="form-row">
            <label for="ime_prezime">Ime i prezime:</label>
            <input type="text" name="ime_prezime" id="ime_prezime" value="<?php echo htmlspecialchars($imePrezime); ?>">
        </div>

        <div class="form-row">
            <label for="email">E-mail:</label>
            <input type="text" name="email" id="email" value="<?php echo htmlspecialchars($email); ?>">
        </div>

        <div class="dugme">
            <button type="submit">Pošalji</button>
        </div>

        <?php if ($poruka != ""): ?>
            <p class="poruka"><?php echo $poruka; ?></p>
        <?php endif; ?>

        <?php if ($greska != ""): ?>
            <p class="greska"><?php echo $greska; ?></p>
        <?php endif; ?>
    </form>
</main>

<?php require "./components/footer.php"; ?>