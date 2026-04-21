<?php
if (!isset($title)) {
    $title = "CD katalog";
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
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="wrapper">
        <header>
            <h1>CD Katalog</h1>
        </header>

        <nav>
            <a href="./index.php" class="<?php echo $active == 'katalog' ? 'active' : ''; ?>">Katalog</a>
            <a href="./uputstvo.php" class="<?php echo $active == 'uputstvo' ? 'active' : ''; ?>">Korisničko uputstvo</a>
        </nav>