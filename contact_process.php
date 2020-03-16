<?php

(empty($_POST) ||
  empty($_POST['nom']) ||
  empty($_POST['année']) ||
  empty($_POST['nombre']))  && exit("Requête invalide");

require_once 'functions/contact.php';
$title = "Contact";
require_once 'views/layout/header.php';

?>
<div class="container mt-4">
  <?php if (insertContact($_POST['nom'], $_POST['année'], $_POST['nombre'])) { ?>
    <div class="alert alert-success" role="alert">
      <h2>
        Merci <?php echo $_POST['année'] . ' ' . $_POST["nom"]; ?> ! Votre demande a bien été enregistrée
      </h2>
    </div>
  <?php } else { ?>
    <div class="alert alert-danger" role="alert">
      <h2>
        Une erreur est survenue lors de l'enregistrement de votre demande
      </h2>
    </div>
  <?php } ?>
</div>

<?php require_once 'views/layout/footer.php'; ?>