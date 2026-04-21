<?php
$title = "Biblioteka | Pregled";
$active = "pregled";
require "./components/header.php";

$xml = simplexml_load_file("biblioteka.xml");

$knjige = [];
foreach ($xml->knjiga as $knjiga) {
    $knjige[] = [
        "ISBN" => (string)$knjiga["ISBN"],
        "naslov" => (string)$knjiga->naslov,
        "stanje" => (int)$knjiga->stanje,
        "citano" => (int)$knjiga->citano
    ];
}

usort($knjige, function($a, $b) {
    return $b["citano"] - $a["citano"];
});
?>

<main>
    <table>
        <tr>
            <th>ISBN</th>
            <th>naslov</th>
            <th>stanje</th>
            <th>čitano</th>
        </tr>

        <?php foreach ($knjige as $knjiga): ?>
            <tr>
                <td><?php echo $knjiga["ISBN"]; ?></td>
                <td><?php echo $knjiga["naslov"]; ?></td>
                <td><?php echo $knjiga["stanje"]; ?></td>
                <td><?php echo $knjiga["citano"]; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</main>

<?php require "./components/footer.php"; ?>