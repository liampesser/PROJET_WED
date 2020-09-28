<?php
/*
  ./app/controleurs/usersControleur.php
*/

  namespace App\Controleurs\UsersControleur;
  use \App\Modeles\UsersModele;

function loginFormAction() {
  GLOBAL $content;
  ob_start();
    include '../app/vues/users/loginForm.php';
  $content = ob_get_clean();
}

function loginCheckAction(\PDO $connexion) {
  // On va chercher le user dont le login et le mot de passe correspondent au $POST
  include '../app/modeles/usersModele.php';
  $user = UsersModele\findOneByLoginPassword($connexion, $_POST['login'], $_POST['password']);
  if ($user) {
    header('location: ' . BASE_URL_ADMIN);
  }
  else {
    header('location: ' . BASE_URL_PUBLIC .'users/login');
  }
}
