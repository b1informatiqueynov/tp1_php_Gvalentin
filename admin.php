<?php
$title = "administration";
require_once 'view/layout/header.php';
?>

<!-- CONTENU -->
<div class="container mt-4">
    <h1>Liste des machines</h1>
    <form method='POST' action='admin.php'>
        <input type="checkbox" name="visible" value="visible"> Visible<br>
        <input type="checkbox" name="nomvisible" value="nomvisible"> Nom visible<br>
        <input type="submit" name="exple2" value="Mettre à jour">
    </form>
</div>

<!-- FIN CONTENU -->

<?php require_once 'views/layout/footer.php'; ?>