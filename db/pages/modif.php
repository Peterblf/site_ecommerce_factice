<?php

include '../inc/connect.php';

// capter id du client
$id = $_POST['id'];

// interroger la DB
$sql = "SELECT * FROM clients WHERE id=$id";
$reponse = $auth->query($sql);

// reproposer un formulaire pour la modif
foreach($reponse AS $r){ ?>
        <form action="update.php" method="post">

        <input type="text" name="prenom" value="<?= $r['prenom'] ?>" maxlength="200" id="prenom">
        <input type="text" name="nom" value="<?= $r['nom'] ?>" maxlength="200" id="nom">
        <input type="text" name="email" value="<?= $r['email'] ?>" maxlength="200" id="email">
        <input type="text" name="ville" value="<?= $r['ville'] ?>" maxlength="200" id="ville">
        <input type="text" name="zip" value="<?= $r['zip'] ?>" maxlength="200" id="zip">
        <input type="hidden" name="id" value="<?= $r['id'] ?>">

        <input type="submit" value="Enregistrer mes coordonnées">

        </form>
<?php }
