<?php
require './db.php';
$data = getUspehData($conn);
$pageTitle = 'Uspeh učenika | Početna';
$activePage = 'pocetna';
require './components/header.php';
?>

<main class="page-content">
    <?php if ($conn->connect_error): ?>
        <div class="message-box">
            Nije moguće povezivanje sa bazom podataka. Proverite da li su Apache i MySQL pokrenuti u XAMPP-u
            i da li baza <strong>Skola</strong> postoji u phpMyAdmin-u.
        </div>
    <?php elseif (empty($data)): ?>
        <div class="message-box">
            U tabeli <strong>Uspeh</strong> nema podataka ili naziv baze / tabele nije ispravan.
        </div>
    <?php else: ?>
        <table class="data-table">
            <thead>
                <tr>
                    <th>Razred</th>
                    <th>Odličan</th>
                    <th>Vrlodobar</th>
                    <th>Dobar</th>
                    <th>Dovoljan</th>
                    <th>Nedovoljan</th>
                    <th>ProsOcena</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $row): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row['Razred']); ?></td>
                        <td><?php echo htmlspecialchars($row['Odlican']); ?></td>
                        <td><?php echo htmlspecialchars($row['Vrlodobar']); ?></td>
                        <td><?php echo htmlspecialchars($row['Dobar']); ?></td>
                        <td><?php echo htmlspecialchars($row['Dovoljan']); ?></td>
                        <td><?php echo htmlspecialchars($row['Nedovoljan']); ?></td>
                        <td><?php echo number_format((float) $row['ProsOcena'], 2, ',', ''); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
</main>

<?php require './components/footer.php'; ?>
