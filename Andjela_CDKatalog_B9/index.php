<?php
$title = "CD katalog | Katalog";
$active = "katalog";
require "./components/header.php";

$albumi = [];

if (file_exists("Katalog.txt")) {
    $linije = file("Katalog.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    foreach ($linije as $linija) {
        $delovi = explode("|", $linija);

        if (count($delovi) >= 6) {
            $putanjaSlike = trim($delovi[5]);
            $putanjaSlike = str_replace("\\", "/", $putanjaSlike);
            $imeSlike = basename($putanjaSlike);

            $albumi[] = [
                "izvodjac" => trim($delovi[0]),
                "naziv" => trim($delovi[1]),
                "zanr" => trim($delovi[2]),
                "godina" => trim($delovi[3]),
                "izdavacka_kuca" => trim($delovi[4]),
                "slika" => "./slike/" . $imeSlike
            ];
        }
    }
}

$zanrovi = [];
$godine = [];

foreach ($albumi as $album) {
    if (!in_array($album["zanr"], $zanrovi)) {
        $zanrovi[] = $album["zanr"];
    }

    if (!in_array($album["godina"], $godine)) {
        $godine[] = $album["godina"];
    }
}

sort($zanrovi);
sort($godine);

$izvodjac = isset($_GET["izvodjac"]) ? trim($_GET["izvodjac"]) : "";
$naziv = isset($_GET["naziv"]) ? trim($_GET["naziv"]) : "";
$zanr = isset($_GET["zanr"]) ? trim($_GET["zanr"]) : "";
$godina = isset($_GET["godina"]) ? trim($_GET["godina"]) : "";
$izdavackaKuca = isset($_GET["izdavacka_kuca"]) ? trim($_GET["izdavacka_kuca"]) : "";

$rezultati = array_filter($albumi, function ($album) use ($izvodjac, $naziv, $zanr, $godina, $izdavackaKuca) {
    if ($izvodjac !== "" && mb_stripos($album["izvodjac"], $izvodjac) === false) {
        return false;
    }

    if ($naziv !== "" && mb_stripos($album["naziv"], $naziv) === false) {
        return false;
    }

    if ($zanr !== "" && $album["zanr"] !== $zanr) {
        return false;
    }

    if ($godina !== "" && $album["godina"] !== $godina) {
        return false;
    }

    if ($izdavackaKuca !== "" && mb_stripos($album["izdavacka_kuca"], $izdavackaKuca) === false) {
        return false;
    }

    return true;
});
?>

<main>
    <form method="get" class="forma-pretrage">
        <div class="red">
            <label for="izvodjac">Izvođač:</label>
            <input type="text" name="izvodjac" id="izvodjac" value="<?php echo htmlspecialchars($izvodjac); ?>">
        </div>

        <div class="red">
            <label for="naziv">Naziv albuma:</label>
            <input type="text" name="naziv" id="naziv" value="<?php echo htmlspecialchars($naziv); ?>">
        </div>

        <div class="red">
            <label for="zanr">Žanr:</label>
            <select name="zanr" id="zanr">
                <option value=""></option>
                <?php foreach ($zanrovi as $z): ?>
                    <option value="<?php echo htmlspecialchars($z); ?>" <?php echo ($zanr == $z) ? "selected" : ""; ?>>
                        <?php echo htmlspecialchars($z); ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="red">
            <label for="godina">Godina izdanja:</label>
            <select name="godina" id="godina">
                <option value=""></option>
                <?php foreach ($godine as $g): ?>
                    <option value="<?php echo htmlspecialchars($g); ?>" <?php echo ($godina == $g) ? "selected" : ""; ?>>
                        <?php echo htmlspecialchars($g); ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="red">
            <label for="izdavacka_kuca">Izdavačka kuća:</label>
            <input type="text" name="izdavacka_kuca" id="izdavacka_kuca" value="<?php echo htmlspecialchars($izdavackaKuca); ?>">
        </div>

        <div class="dugme">
            <button type="submit">Traži</button>
        </div>
    </form>

    <table>
        <tr>
            <th>Izvođač</th>
            <th>Naziv albuma</th>
            <th>Žanr</th>
            <th>Godina izdanja</th>
            <th>Izdavačka kuća</th>
            <th>Slika omota</th>
        </tr>

        <?php if (count($rezultati) > 0): ?>
            <?php foreach ($rezultati as $album): ?>
                <tr>
                    <td><?php echo htmlspecialchars($album["izvodjac"]); ?></td>
                    <td><?php echo htmlspecialchars($album["naziv"]); ?></td>
                    <td><?php echo htmlspecialchars($album["zanr"]); ?></td>
                    <td><?php echo htmlspecialchars($album["godina"]); ?></td>
                    <td><?php echo htmlspecialchars($album["izdavacka_kuca"]); ?></td>
                    <td>
                        <img src="<?php echo htmlspecialchars($album["slika"]); ?>" alt="Omot albuma">
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="6">Nema rezultata za zadate kriterijume.</td>
            </tr>
        <?php endif; ?>
    </table>
</main>

<?php require "./components/footer.php"; ?>