<?php 
	$gradovi = array(
    "beograd" => array(
        "ime" => "Beograd",
        "tekst" => "Beograd je glavni grad Srbije, poznat po Kalemegdanskoj tvrđavi, Knez Mihailovoj ulici i Hramu Svetog Save. Grad ima bogat noćni život i nalazi se na ušću Save u Dunav."
    ),
    "novi-sad" => array(
        "ime" => "Novi Sad",
        "tekst" => "Novi Sad je drugi najveći grad u Srbiji, poznat po Petrovaradinskoj tvrđavi i EXIT festivalu. Nalazi se na obali Dunava i važi za kulturni centar zemlje."
    ),
    "kraljevo" => array(
        "ime" => "Kraljevo",
        "tekst" => "Kraljevo je grad u centralnoj Srbiji, poznat po blizini manastira Žiča i Studenica. Okružen je prirodnim lepotama i planinama."
    ),
    "nis" => array(
        "ime" => "Niš",
        "tekst" => "Niš je jedan od najstarijih gradova u Evropi, poznat po Niškoj tvrđavi, Ćele kuli i bogatoj istoriji iz rimskog perioda."
    ),
    "kragujevac" => array(
        "ime" => "Kragujevac",
        "tekst" => "Kragujevac je važan industrijski i univerzitetski centar Srbije. Poznat je po memorijalnom parku Šumarice i istorijskom značaju."
    ),
    "subotica" => array(
        "ime" => "Subotica",
        "tekst" => "Subotica je poznata po secesijskoj arhitekturi, Gradskoj kući i blizini Palićkog jezera koje je popularna turistička destinacija."
    ),
    "zrenjanin" => array(
        "ime" => "Zrenjanin",
        "tekst" => "Zrenjanin se nalazi u Banatu i poznat je po mostovima, starom gradskom jezgru i brojnim kulturnim manifestacijama."
    ),
    "pancevo" => array(
        "ime" => "Pančevo",
        "tekst" => "Pančevo se nalazi na ušću Tamiša u Dunav i poznato je po lepim šetalištima, parkovima i blizini Beograda."
    ),
    "cacak" => array(
        "ime" => "Čačak",
        "tekst" => "Čačak je smešten u zapadnoj Srbiji i poznat je po Ovčarsko-kablarskoj klisuri, koja je značajna prirodna i turistička atrakcija."
    ),
    "uzice" => array(
        "ime" => "Užice",
        "tekst" => "Užice je grad u zapadnoj Srbiji, blizu Zlatibora i Tare, poznat po Starom gradu i bogatoj istoriji."
    )
);

	if(empty($_GET["grad"])) {
		header("location: /");
		exit(0);
	}
	$grad = $gradovi[$_GET["grad"]];
	if(empty($grad)) {
		header("location: /");
		exit(0);
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="./slike/LOGO.ico" type="image/x-icon">
	<link rel="stylesheet" href="./css/global.css">
	<link rel="stylesheet" href="./css/grad.css">
	<title><?php echo $grad["ime"]; ?></title>
</head>
<body>
	<h1><?php echo $grad["ime"]; ?></h1>
	<p><?php echo $grad["tekst"]; ?></p>
</body>
</html>