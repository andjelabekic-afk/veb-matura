<?php
require "./functions.php";

$datumi = ucitajDatume();
$tipovi = ucitajSveTipove();

$izabraniDatum = isset($_GET["datum"]) ? trim($_GET["datum"]) : "";
$izabraniTip = isset($_GET["tip"]) ? trim($_GET["tip"]) : "";

if ($izabraniDatum == "" && count($datumi) > 0) {
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
    <form method="get" class="forma">
        <label for="datum">Datum:</label>
        <select name="datum" id="datum">
            <?php foreach ($datumi as $datum): ?>
                <option value="<?php echo htmlspecialchars($datum); ?>" <?php echo ($izabraniDatum == $datum) ? "selected" : ""; ?>>
                    <?php echo htmlspecialchars($datum); ?>
                </option>
            <?php endforeach; ?>
        </select>

        <label for="tip">Tip emisije:</label>
        <select name="tip" id="tip">
            <option value=""></option>
            <?php foreach ($tipovi as $tip): ?>
                <option value="<?php echo htmlspecialchars($tip); ?>" <?php echo ($izabraniTip == $tip) ? "selected" : ""; ?>>
                    <?php echo htmlspecialchars($tip); ?>
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
                    <td><?php echo htmlspecialchars($emisija["vreme"]); ?></td>
                    <td><?php echo htmlspecialchars($emisija["naziv"]); ?></td>
                    <td>
                        <img src="<?php echo htmlspecialchars($emisija["ikona"]); ?>" alt="<?php echo htmlspecialchars($emisija["tip"]); ?>">
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
        <div class="no-results">Nema rezultata za zadate kriterijume.</div>
    <?php endif; ?>
</main>

<?php require "./components/footer.php"; ?>