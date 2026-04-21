<footer>
    <p>Elektro-saobraćana tehnička škola "Nikola Tesla", Kraljevo</p>
    <nav>
        <?php if (isset($url) && $url === "uputstvo"): ?>
            <a href="./index.php">Početna</a>
            <a href="./autor.php">O autoru</a>
        <?php elseif (isset($url) && $url === "autor"): ?>
            <a href="./index.php">Početna</a>
            <a href="./uputstvo.php">Uputstvo</a>
        <?php else: ?>
            <a href="./uputstvo.php">Uputstvo</a>
            <a href="./autor.php">O autoru</a>
        <?php endif; ?>
    </nav>
</footer>