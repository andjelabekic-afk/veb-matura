<?php
require "./functions.php";

$datumi = ucitajDatume();
$tipovi = ucitajSveTipove();

$izabraniDatum = isset($_GET["datum"]) ? trim($_GET["datum"]) : "";
$izabraniTip = isset($_GET["tip"]) ? trim($_GET["tip"]) : "";

// Ako nije izabran datum ili je u URL-u pogrešan datum, uzima se prvi postojeći datum iz foldera programi.
if (($izabraniDatum == "" || !in_array($izabraniDatum, $datumi)) && count($datumi) > 0) {
    $izabraniDatum = $datumi[0];
}

$emisije = [];
if ($izabraniDatum != "") {
    $emisije = ucitajProgramZaDatum($izabraniDatum);
}

if ($izabraniTip != "") {
    $emisije = array_filter($emisije, function ($emisija) use ($izabraniTip) {
        return $emisija["tip"] === $izabraniTip;
    });
}

$title = "TV Program";
require "./components/header.php";

$footer_links = [
    ["href" => "./uputstvo.php", "label" => "Uputstvo"],
    ["href" => "./kontakt.php", "label" => "Kontakt"]
];
?>

<main>
    <form method="get" class="forma" id="pretraga-forma">
        <label for="datum">Datum:</label>
        <select name="datum" id="datum">
            <?php foreach ($datumi as $datum): ?>
                <option value="<?php echo htmlspecialchars($datum, ENT_QUOTES, 'UTF-8'); ?>" <?php echo ($izabraniDatum == $datum) ? "selected" : ""; ?>>
                    <?php echo htmlspecialchars($datum, ENT_QUOTES, 'UTF-8'); ?>
                </option>
            <?php endforeach; ?>
        </select>

        <label for="tip">Tip emisije:</label>
        <select name="tip" id="tip">
            <option value="">Svi tipovi</option>
            <?php foreach ($tipovi as $tip): ?>
                <option value="<?php echo htmlspecialchars($tip, ENT_QUOTES, 'UTF-8'); ?>" <?php echo ($izabraniTip == $tip) ? "selected" : ""; ?>>
                    <?php echo htmlspecialchars($tip, ENT_QUOTES, 'UTF-8'); ?>
                </option>
            <?php endforeach; ?>
        </select>

        <button type="submit">Pronađi</button>
    </form>

    <?php if (count($emisije) > 0): ?>
        <table>
            <tr>
                <th>Vreme</th>
                <th>Naziv Emisije</th>
                <th>Tip Emisije</th>
            </tr>

            <?php foreach ($emisije as $emisija): ?>
                <tr>
                    <td><?php echo htmlspecialchars($emisija["vreme"], ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php echo htmlspecialchars($emisija["naziv"], ENT_QUOTES, 'UTF-8'); ?></td>
                    <td>
                        <img src="<?php echo htmlspecialchars($emisija["ikona"], ENT_QUOTES, 'UTF-8'); ?>" alt="<?php echo htmlspecialchars($emisija["tip"], ENT_QUOTES, 'UTF-8'); ?>">
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
        <div class="no-results">Nema rezultata za zadate kriterijume.</div>
    <?php endif; ?>
</main>

<script>
    const forma = document.getElementById("pretraga-forma");
    const datum = document.getElementById("datum");
    const tip = document.getElementById("tip");

    datum.addEventListener("change", function () {
        tip.value = "";
        forma.submit();
    });

    tip.addEventListener("change", function () {
        forma.submit();
    });
</script>

<?php require "./components/footer.php"; ?>
