<?php

function ucitajDatume($folder = "./programi")
{
    $datumi = [];

    if (!is_dir($folder)) {
        return $datumi;
    }

    $fajlovi = glob($folder . "/*.txt");

    foreach ($fajlovi as $fajl) {
        $naziv = basename($fajl, ".txt");
        $datumi[] = $naziv;
    }

    usort($datumi, function ($a, $b) {
        $da = DateTime::createFromFormat("d.m.Y", $a);
        $db = DateTime::createFromFormat("d.m.Y", $b);

        if ($da && $db) {
            return $da <=> $db;
        }

        return strcmp($a, $b);
    });

    return $datumi;
}

function ucitajProgramZaDatum($datum, $folder = "./programi")
{
    $rezultat = [];
    $putanja = $folder . "/" . $datum . ".txt";

    if (!file_exists($putanja)) {
        return $rezultat;
    }

    $linije = file($putanja, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    foreach ($linije as $linija) {
        $delovi = explode("|", $linija);

        if (count($delovi) >= 4) {
            $putanjaIkone = trim($delovi[3]);
            $putanjaIkone = str_replace("\\", "/", $putanjaIkone);
            $imeIkone = basename($putanjaIkone);

            $rezultat[] = [
                "vreme" => trim($delovi[0]),
                "naziv" => trim($delovi[1]),
                "tip" => trim($delovi[2]),
                "ikona" => "./slike/" . $imeIkone
            ];
        }
    }

    return $rezultat;
}

function ucitajSveTipove($folder = "./programi")
{
    $tipovi = [];
    $datumi = ucitajDatume($folder);

    foreach ($datumi as $datum) {
        $programi = ucitajProgramZaDatum($datum, $folder);

        foreach ($programi as $emisija) {
            if (!in_array($emisija["tip"], $tipovi)) {
                $tipovi[] = $emisija["tip"];
            }
        }
    }

    sort($tipovi);
    return $tipovi;
}
?>