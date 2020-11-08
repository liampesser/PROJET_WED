<?php
/*
  ./app/routeurs/postsRouteur.php
 */

include_once '../app/controleurs/postsControleur.php';
use \App\Controleurs\postsControleur;

switch ($_GET['posts']):
  case 'index':
  // LISTE DES POSTS
  // PATTERN: index.php?posts=index
  // CTRL: postsControleur
  // ACTION: index
    PostsControleur\indexAction($connexion);
    break;
    case 'addForm':
    // FORMULAIRE D'AJOUT D'UN POST
    // PATTERN: index.php?posts=addForm
    // CTRL: postsControleur
    // ACTION: addForm
      PostsControleur\addFormAction($connexion);
      break;
      case 'addInsert':
      // AJOUT D'UN POST: INSERT
      // PATTERN: index.php?posts=addInsert
      // CTRL: postsControleur
      // ACTION: addInsert
        PostsControleur\addInsertAction($connexion, [
          'title'      => $_POST['title'],
          'content'    => $_POST['content'],
          'author'     => $_POST['author']
        ]);
        break;
        case 'delete':
        // SUPPRESSION D'UN POST: DELETE
        // PATTERN: index.php?posts=delete&id=xxx
        // CTRL: postsControleur
        // ACTION: DELETE
          PostsControleur\deleteAction($connexion, $_GET['id']);
          break;

endswitch;
