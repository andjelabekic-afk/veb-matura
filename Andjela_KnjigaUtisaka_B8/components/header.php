<?php
if (!isset($title)) {
    $title = "Knjiga utisaka";
}
if (!isset($active)) {
    $active = "";
}
?>
<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="./css/global.css">
</head>
<body>
    <div class="wrapper">
        <header>
            <h1>KNJIGA UTISAKA</h1>
        </header>

        <nav>
            <a href="./index.php" class="<?php echo $active == 'pocetna' ? 'active' : ''; ?>">Početna</a>
            <a href="./autor.php" class="<?php echo $active == 'autor' ? 'active' : ''; ?>">O autoru</a>
            <a href="./uputstvo.php" class="<?php echo $active == 'uputstvo' ? 'active' : ''; ?>">Uputstvo</a>
        </nav>