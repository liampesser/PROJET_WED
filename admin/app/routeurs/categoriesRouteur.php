<?php
/*
  ./app/routeurs/categoriesRouteur.php
 */

include_once '../app/controleurs/categoriesControleur.php';
use \App\Controleurs\CategoriesControleur;

switch ($_GET['categories']):
  case 'index':
  // LISTE DES CATEGORIES
  // PATTERN: index.php?categories=index
  // CTRL: categoriesControleur
  // ACTION: index
    CategoriesControleur\indexAction($connexion);
    break;
    case 'addForm':
    // AJOUT CATEGORIE: FORMULAIRE
    // PATTERN: index.php?categories=addForm
    // CTRL: categoriesControleur
    // ACTION: addForm
      CategoriesControleur\addFormAction();
      break;
      case 'add':
      // AJOUT CATEGORIE: INSERT
      // PATTERN: index.php?categories=add
      // CTRL: categoriesControleur
      // ACTION: add
        CategoriesControleur\addAction($connexion, [
          'name' => $_POST['name']
        ]);
        break;
        case 'delete':
        // SUPPRESSION CATEGORIE
        // PATTERN: index.php?categories=delete&id=x
        // CTRL: categoriesControleur
        // ACTION: delete
          CategoriesControleur\deleteAction($connexion, $_GET['id']);
          break;
          case 'editForm':
          // MODIFICATION D'UNE CATEGORIE: FORMULAIRE
          // PATTERN: index.php?categories=editForm&id=x
          // CTRL: categoriesControleur
          // ACTION: editForm
            CategoriesControleur\editFormAction($connexion, $_GET['id']);
            break;
            case 'edit':
            // MODIFICATION D'UNE CATEGORIE: UPDATE
            // PATTERN: index.php?categories=edit&id=x
            // CTRL: categoriesControleur
            // ACTION: edit
              CategoriesControleur\editAction($connexion, [
                'id' =>   $_GET['id'],
                'name' => $_POST['name']
              ]);
              break;
endswitch;
