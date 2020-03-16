<?php // Enregistrement pour un nouveau véhicule
$title = "Enregistrement";
require_once 'views/layout/header.php';
?>

<!-- CONTENU -->
<div class="container mt-4">
  <h1>Enregistrez votre véhicule</h1>
  <form action="contact_process.php" method="POST">
    <div class="form-group">
      <label for="nom">Nom de la voiture</label>
      <input type="text" class="form-control" id="nom" name="nom" aria-describedby="nomHelp">
      <small id="nomHelp" class="form-text text-muted">Entrez le nom du véhicule</small>
    </div>
    <div class="form-group">
      <label for="année">Année de sortie</label>
      <input type="date" class="form-control" id="année" name="année" aria-describedby="annéeHelp">
      <small id="annéeHelp" class="form-text text-muted">Entrez l'année de sortie</small>
    </div>
    <div class="form-group">
      <label for="nombre">Nombre de kilomètres</label>
      <input type="nombre" class="form-control" id="nombre" name="nombre" aria-describedby="nombreHelp">
      <small id="nombreHelp" class="form-text text-muted">Entrez le nombre de kilomètres</small>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
<!-- FIN CONTENU -->

<?php require_once 'views/layout/footer.php'; ?>