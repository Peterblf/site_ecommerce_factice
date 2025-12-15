<?php include '../structure/top.php'; ?>

<section class="liste">
<h1>Listes</h1>
<table border="1">
    <caption>Liste des inscrits</caption>
    <thead>
        <tr>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Email</th>
            <th>ville</th>
            <th>Adresse</th>
            <th>Code postal</th>
            <th>Suppr</th>
            <th>Modification</th>
        </tr>
    </thead>
    <tbody>
        <?php
            include '../db/inc/connect.php';
            $req = "SELECT * FROM clients";
            $reponse = $auth->query($req);
            foreach($reponse AS $r):
        ?>
        <tr>
                <td><?= $r['prenom']?></td>
                <td><?= $r['nom']?></td>
                <td><?= $r['email']?></td>
                <td><?= $r['ville']?></td>
                <td><?= $r['adresse']?></td>
                <td><?= $r['zip']?></td>

                <td>
                <form action="../db/pages/delete.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $r['id']; ?>">
                    <input type="image" src="../images/" alt="suppr">
                </form>
            </td>
            <td>
                <form action="../db/pages/modif.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $r['id']; ?>">
                    <input type="image" src="../images/" alt="modif">
                </form>
            </td>

        </tr>

        <?php
            endforeach;
        ?>
    </tbody>
</table>
</section>


<section class="apropos">
    <h1>À propos de HEIZEN KASKROUT 🌿</h1>
    <p>Bienvenue sur <strong>HEIZEN KASKROUT</strong>, votre jardin secret pour les plantes... disons, peu conventionnelles.</p>
    <p>Créé dans une cave obscure quelque part en Europe, notre site s'est donné pour mission de faire découvrir les merveilles de la botanique underground à ceux qui osent sortir des sentiers battus.</p>
    <p>Notre équipe de passionnés cultive, récolte et partage avec amour des espèces rares, exotiques, parfois interdites, mais toujours fascinantes. Ici, on ne vend pas que des plantes : on vend une expérience végétale alternative 🌱.</p>
    <p>Évidemment, toute ressemblance avec des substances contrôlées serait purement fortuite... ou pas.</p>
    <p><em>Note légale : ce site n'existe que dans votre imagination. Toute tentative d’achat pourrait déclencher l’arrivée d’agents très curieux à votre porte.</em></p>

    <p>🌿 GreenFantasie – Parce que même les plantes ont un côté rebelle.</p>
</section>

<?php include '../structure/bot.php'; ?>