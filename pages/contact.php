<?php include '../structure/top.php'; ?>

<section class="forum">
<h1>Vos Coordonnées</h1>
<form action="../db/pages/enregistrement.php" method="post">

    <input type="text" name="prenom" placeholder="prenom" maxlength="200" id="prenom">
    <input type="text" name="nom" placeholder="nom" maxlength="200" id="nom">
    <input type="email" name="email" placeholder="email" maxlength="200" id="email">
    <input type="text" name="ville" placeholder="ville" maxlength="200" id="ville">
    <input type="text" name="adresse" placeholder="adresse" maxlength="400" id="adresse">
    <input type="text" name="zip" placeholder="Code Postal" maxlength="5" id="zip">

    <input class="submit" type="submit" value="Envoyer votre demande de contact">

</form>
</section>

<?php include '../structure/bot.php'; ?>