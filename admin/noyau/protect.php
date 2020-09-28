<?php
/*
  ./noyau/protect.php
  Vérification des badges !!!
 */

// Si y a pas de badge, je redirige vers le formulaire de login
// Attention, travailler avec les BASE_URL...
  // Soit vous changez les constantes du public
  // Soit vous changer les constantes de l'admin...

if (!isset($_SESSION['user'])) :
  header('location: ' . BASE_URL_PUBLIC . 'users.login');
endif;
