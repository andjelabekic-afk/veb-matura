
<?php
$drzave = array(
        "srbija" => array(
                "naziv" => "СРБИЈА",
                "glavni_grad" => "Београд",
                "stanovnici" => "6,834 милиона",
                "povrsina" => "88.499 km²"
        ),
        "madjarska" => array(
                "naziv" => "МАЂАРСКА",
                "glavni_grad" => "Будимпешта",
                "stanovnici" => "9,730 милиона",
                "povrsina" => "93,030 km²"
        ),
        "hrvatska" => array(
                "naziv" => "ХРВАТСКА",
                "glavni_grad" => "Загреб",
                "stanovnici" => "3,899 милиона",
                "povrsina" => "56.594 km²"
        ),
        "bih" => array(
                "naziv" => "БОСНА И ХЕРЦЕГОВИНА",
                "glavni_grad" => "Сарајево",
                "stanovnici" => "3,271 милиона",
                "povrsina" => "51.209 km²"
        ),
        "crna_gora" => array(
                "naziv" => "ЦРНА ГОРА",
                "glavni_grad" => "Подгорица",
                "stanovnici" => "619.211",
                "povrsina" => "13.812 km²"
        ),
        "albanija" => array(
                "naziv" => "АЛБАНИЈА",
                "glavni_grad" => "Тирана",
                "stanovnici" => "2,812 милиона",
                "povrsina" => "28.748 km²"
        ),
        "makedonija" => array(
                "naziv" => "МАКЕДОНИЈА",
                "glavni_grad" => "Скопље",
                "stanovnici" => "2,065 милиона",
                "povrsina" => "25.713 km²"
        ),
        "bugarska" => array(
                "naziv" => "БУГАРСКА",
                "glavni_grad" => "Софија",
                "stanovnici" => "6,863 милиона",
                "povrsina" => "110.993 km²"
        ),
        "rumunija" => array(
                "naziv" => "РУМУНИЈА",
                "glavni_grad" => "Букурешт",
                "stanovnici" => "19,12 милиона",
                "povrsina" => "238.397 km²"
        ),
);

if(empty($_GET["drzava"])) {
    header("location: /");
    exit(0);
}
$drzava = $drzave[$_GET["drzava"]];
if(empty($drzava)) {
    header("location: /");
    exit(0);
}
?>
<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./slike/LOGO.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="./css/drzava.css">
    <title><?php echo $drzava["naziv"]; ?></title>
</head>
<body>
<h1><?php echo $drzava["naziv"]; ?></h1>
<p>Главни град: <?php echo $drzava["glavni_grad"]; ?></p>
<p>Број становника: <?php echo $drzava["stanovnici"]; ?></p>
<p>Површина: <?php echo $drzava["povrsina"]; ?></p>
</body>
</html>