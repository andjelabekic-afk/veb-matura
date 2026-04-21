<?php
$pageTitle = 'Uspeh učenika | O autoru';
$activePage = 'autor';
require './components/header.php';

$imePrezime = 'Andjela Bekic';
$email = 'andjela.bekic2007@gmail.com';

?>

<main class="page-content">
    <div class="author-card">
        <h2>O autoru i aplikaciji</h2>
        <p><strong>Autor:</strong> <?php echo $imePrezime; ?></p>
        <p><strong>Email:</strong> <?php echo $email; ?></p>
        <p><strong>Naziv aplikacije:</strong> Uspeh učenika</p>
      

        <p>
            Aplikacija se sastoji od tri stranice:
        </p>
        <ul>
            <li><strong>Početna</strong> – prikazuje tabelu sa podacima o uspehu učenika po razredima.</li>
            <li><strong>Grafika</strong> – prikazuje grafik prosečne ocene po razredima.</li>
            <li><strong>O autoru</strong> – sadrži podatke o autoru i kratko korisničko uputstvo.</li>
        </ul>

        <p>
            Na početnoj stranici podaci se učitavaju iz baze podataka <strong>Skola</strong>, iz tabele <strong>Uspeh</strong>,
            i prikazuju se u tabeli. Na stranici Grafika podaci se prikazuju u obliku stubičastog grafikona,
            gde je na x-osi prikazan razred, a na y-osi prosečna ocena razreda.
        </p>
    </div>
</main>

<?php require './components/footer.php'; ?>
