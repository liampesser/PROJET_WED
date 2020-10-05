<?php
/*
  ./app/controleurs/userControleur.php
 */
namespace App\Controleurs\UserControleur;

function logoutAction() {
  // On tue la variable de session
    unset($_SESSION['user']);

  // On redirige vers le formulaire de connexion
    header('location: ' . BASE_URL_PUBLIC . 'users/login');
}
