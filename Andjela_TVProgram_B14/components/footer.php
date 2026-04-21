<footer>
    <div>Elektrotehnička škola "Nikola Tesla" Niš</div>

    <nav class="footer-nav">
        <?php if (isset($footer_links) && is_array($footer_links)): ?>
            <?php foreach ($footer_links as $link): ?>
                <a href="<?php echo $link['href']; ?>">
                    <?php echo $link['label']; ?>
                </a>
            <?php endforeach; ?>
        <?php endif; ?>
    </nav>
</footer>
    </div>
</body>
</html>