<?php

require_once __DIR__ . '/db.php';

function insertContact(
  string $nom,
  string $année,
  string $nombre
) {
  $pdo = getPdo();

  $query = "INSERT INTO contact (nom, année, nombre) VALUES (:nom, :prenom, :email, :message)";

  $stmt = $pdo->prepare($query);

  // On retourne le résultat d'execute car en cas de succès elle retourne TRUE, sinon en cas d'échec elle retourne FALSE
  return $stmt->execute([
    'nom' => $nom,
    'année' => $année,
    'nombre' => $nombre
  ]);
}