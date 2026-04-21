<?php
require './db.php';
$data = getUspehData($conn);
$pageTitle = 'Uspeh učenika | Grafika';
$activePage = 'grafika';
require './components/header.php';
?>

<main class="page-content">
    <?php if ($conn->connect_error): ?>
        <div class="message-box">
            Nije moguće povezivanje sa bazom podataka. Proverite da li su Apache i MySQL pokrenuti u XAMPP-u.
        </div>
    <?php elseif (empty($data)): ?>
        <div class="message-box">
            Nema podataka za prikaz grafikona.
        </div>
    <?php else: ?>
        <div class="chart-wrapper">
            <canvas id="chartCanvas" class="chart-canvas" width="360" height="270"></canvas>
        </div>

        <script>
            window.chartData = <?php
                echo json_encode(
                    array_map(
                        function ($row) {
                            return [
                                'razred' => $row['Razred'],
                                'prosek' => (float) $row['ProsOcena']
                            ];
                        },
                        $data
                    ),
                    JSON_UNESCAPED_UNICODE
                );
            ?>;
        </script>
        <script src="./js/grafika.js"></script>
    <?php endif; ?>
</main>

<?php require './components/footer.php'; ?>
