<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./slike/LOGO.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="./css/uputstva.css">
    <title>B22 - Efekti Tabele | Uputstvo</title>
</head>
<body>
   <?php require "./components/header.php"; ?>
    <main>
<section>
    <h2>Početna</h2>
    <p>
        Na početnoj stranici možete videti tabelu sa podacima o učenicima. <br>
        Tabela sadrži kolone Rbr, Ime, Prezime, Škola i Poeni. <br>
        Ispod tabele nalaze se dugmad pomoću kojih možete sortirati tabelu, obojiti alternativne redove, označiti učenike koji su položili i one koji nisu položili, kao i izdvojiti samo učenike koji su položili.
    </p>
</section>
<section>
    <h2>Autor</h2>
    <p>
        Na stranici o autoru možete videti podatke o autoru aplikacije, naziv aplikacije i datum kreiranja.
    </p>
</section>
<section>
    <h2>Uputstvo</h2>
    <p>
        Na stranici uputstvo možete videti objašnjenje načina korišćenja aplikacije i njenih funkcionalnosti.
    </p>
</section>

   
    </main>
         <?php 
        $url = "uputstvo";
        require "./components/footer.php";
    ?>
</body>
</html>