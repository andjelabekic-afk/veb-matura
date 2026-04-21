<?php
if (!isset($pageTitle)) {
    $pageTitle = 'Uspeh učenika';
}

if (!isset($activePage)) {
    $activePage = 'pocetna';
}
?>
<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="./css/global.css">
</head>
<body>
    <header class="site-header">
        <div class="brand-bar">
            <h1>Uspeh učenika</h1>
        </div>
        <nav class="top-nav">
            <a href="./index.php" class="<?php echo $activePage === 'pocetna' ? 'active' : ''; ?>">Početna</a>
            <a href="./grafika.php" class="<?php echo $activePage === 'grafika' ? 'active' : ''; ?>">Grafika</a>
            <a href="./autor.php" class="<?php echo $activePage === 'autor' ? 'active' : ''; ?>">O autoru</a>
        </nav>
    </header>
