<?php 
	$zivotinje = array(
		"pas" => array(
			"naslov" => "Пас",
			"opis" => "Пас (лат. Canis lupus familiaris) је припитомљени сисар из породице Canidae. Археолошки налази доказују да пас најмање 9000 година живи уз човека, иако постоје индиције да се тај период продужи на читавих 14.000 година. Фосилни остаци показују да су преци модерног пса живели уз човека још пре 10.000 година."
		),
		"patka" => array(
			"naslov" => "Патка",
			"opis" => "Патка је општи назив за велики број врста птица из фамилије Anatidae, која укључује и лабудове и гуске. Патке су углавном водене птице, мање су од лабудова и гусака и могу се наћи у речним и морским водама."
		),
		"macka" => array(
			"naslov" => "Мачка",
			"opis" => "Мачка, такође звана и домаћа мачка или кућна мачка (лат. Felis catus), мали је месождер и врста сисара из рода Felis. Верује се да је њен предак била афричка дивља мачка (Felis silvestris lybica). Мачке живе у блиској вези са људима најмање 9.500 година."
		),
		"kokoska" => array(
			"naslov" => "Кокошка",
			"opis" => "Кокошка, кокош или домаћа кокош (лат. Gallus gallus domesticus) је подврста птице која се често гаји као живина. Сматра се да је пореклом из југоисточне Азије и да је еволуирала од дивљих подврста врсте Gallus gallus. Људи узгајају кокошке првенствено као извор хране, користећи њихово месо и јаја."
		),
		"krava" => array(
			"naslov" => "Крава",
			"opis" => "Крава је одрасла женка говечета. Млечна крава се узгаја због производње млека, које се прерађује у бројне прехрамбене производе: млеко, павлаку, кајмак, разне врсте сирева, путер и слично. Припитомљавање говеда почело је најпре ради меса, а касније и ради млека и снаге коришћене за вучу. Младунче краве зове се теле."
		),
	);

	if(empty($_GET["zivotinja"])) {
		header("location: /");
		exit(0);
	}
	$zivotinja = $zivotinje[$_GET["zivotinja"]];
	if(empty($zivotinja)) {
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
	<link rel="stylesheet" href="./css/zivotinja.css">
	<title><?php echo $zivotinja["naslov"]; ?></title>
</head>
<body>
	<h1><?php echo $zivotinja["naslov"]; ?></h1>
	<p><?php echo $zivotinja["opis"]; ?></p>
</body>
</html>
