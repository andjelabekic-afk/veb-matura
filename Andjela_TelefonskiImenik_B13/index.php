<?php
$title = "Telefonski imenik";
$active = "imenik";
require "./components/header.php";

function contains_value($haystack, $needle) {
    if ($needle === "") {
        return true;
    }

    if (function_exists("mb_stripos")) {
        return mb_stripos($haystack, $needle) !== false;
    }

    return stripos($haystack, $needle) !== false;
}

$zapisi = [];

if (file_exists("imenik.txt")) {
    $linije = file("imenik.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    foreach ($linije as $linija) {
        $delovi = explode("|", $linija);

        if (count($delovi) >= 7) {
            $zapisi[] = [
                "rbr" => trim($delovi[0]),
                "ime" => trim($delovi[1]),
                "prezime" => trim($delovi[2]),
                "adresa" => trim($delovi[3]),
                "mesto" => trim($delovi[4]),
                "telefon" => trim($delovi[5]),
                "email" => trim($delovi[6])
            ];
        }
    }
}

$mesta = [];
foreach ($zapisi as $zapis) {
    if (!in_array($zapis["mesto"], $mesta)) {
        $mesta[] = $zapis["mesto"];
    }
}
sort($mesta);

$ime = isset($_GET["ime"]) ? trim($_GET["ime"]) : "";
$prezime = isset($_GET["prezime"]) ? trim($_GET["prezime"]) : "";
$adresa = isset($_GET["adresa"]) ? trim($_GET["adresa"]) : "";
$mesto = isset($_GET["mesto"]) ? trim($_GET["mesto"]) : "";
$telefon = isset($_GET["telefon"]) ? trim($_GET["telefon"]) : "";
$email = isset($_GET["email"]) ? trim($_GET["email"]) : "";

$rezultati = array_filter($zapisi, function ($zapis) use ($ime, $prezime, $adresa, $mesto, $telefon, $email) {
    if (!contains_value($zapis["ime"], $ime)) {
        return false;
    }

    if (!contains_value($zapis["prezime"], $prezime)) {
        return false;
    }

    if (!contains_value($zapis["adresa"], $adresa)) {
        return false;
    }

    if ($mesto !== "" && $zapis["mesto"] !== $mesto) {
        return false;
    }

    if (!contains_value($zapis["telefon"], $telefon)) {
        return false;
    }

    if (!contains_value($zapis["email"], $email)) {
        return false;
    }

    return true;
});
?>

<main>
    <div class="search-title">Parametri za pretragu:</div>

    <form method="get" class="search-form">
        <div class="search-grid">
            <label for="ime">Ime:</label>
            <input type="text" name="ime" id="ime" value="<?php echo htmlspecialchars($ime); ?>">

            <label for="adresa">Adresa:</label>
            <input type="text" name="adresa" id="adresa" value="<?php echo htmlspecialchars($adresa); ?>">

            <label for="telefon">Telefon:</label>
            <input type="text" name="telefon" id="telefon" value="<?php echo htmlspecialchars($telefon); ?>">

            <label for="prezime">Prezime:</label>
            <input type="text" name="prezime" id="prezime" value="<?php echo htmlspecialchars($prezime); ?>">

            <label for="mesto">Mesto:</label>
            <select name="mesto" id="mesto">
                <option value=""></option>
                <?php foreach ($mesta as $grad): ?>
                    <option value="<?php echo htmlspecialchars($grad); ?>" <?php echo ($mesto == $grad) ? "selected" : ""; ?>>
                        <?php echo htmlspecialchars($grad); ?>
                    </option>
                <?php endforeach; ?>
            </select>

            <label for="email">Email:</label>
            <input type="text" name="email" id="email" value="<?php echo htmlspecialchars($email); ?>">
        </div>

        <div class="search-button">
            <button type="submit">Traži</button>
        </div>
    </form>

    <hr class="separator">

    <?php if (count($rezultati) > 0): ?>
        <table>
            <tr>
                <th>Rbr</th>
                <th>Ime</th>
                <th>Prezime</th>
                <th>Adresa</th>
                <th>Telefon</th>
                <th>E-mail</th>
                <th>Mesto</th>
            </tr>

            <?php foreach ($rezultati as $red): ?>
                <tr>
                    <td><?php echo htmlspecialchars($red["rbr"]); ?></td>
                    <td><?php echo htmlspecialchars($red["ime"]); ?></td>
                    <td><?php echo htmlspecialchars($red["prezime"]); ?></td>
                    <td><?php echo htmlspecialchars($red["adresa"]); ?></td>
                    <td><?php echo htmlspecialchars($red["telefon"]); ?></td>
                    <td><?php echo htmlspecialchars($red["email"]); ?></td>
                    <td><?php echo htmlspecialchars($red["mesto"]); ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
        <div class="no-results">Nema rezultata za zadate kriterijume.</div>
    <?php endif; ?>
</main>

<?php require "./components/footer.php"; ?>