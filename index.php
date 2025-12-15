<?php include 'structure/top.php'; ?>
<?php include 'structure/header.php'; ?>

<main>
    <h1>Nos varietés stars du moment</h1>
    <section>
        <img src="<?= RACINE ?>images/image8.jpg" alt="Orchidée Galactique">
        <h3>Orchidée Galactique</h3>
        <p>Origine : Andromede</p>
        <button onclick="window.location.href='<?= RACINE ?>pages/produits.php'">Voir plus</button>
    </section>
    <section>
        <img src="<?= RACINE ?>images/fougere.png" alt="Fougère Neon">
        <h3>Fougère Neon</h3>
        <p>Area : Alfaa Centaurauiri</p>
        <button onclick="window.location.href='<?= RACINE ?>pages/produits.php'">Voir plus</button>
    </section>
    <section>
        <img src="<?= RACINE ?>images/image10.jpg" alt="flacon de SolarFlare">
        <h3>Flacon de SolarFlare</h3>
        <p>Type : Cosmetique</p>
        <button onclick="window.location.href='<?= RACINE ?>pages/produits.php'">Voir plus</button>
    </section>
</main>

<?php include 'structure/aside.php'; ?>
<?php include 'structure/bot.php'; ?>