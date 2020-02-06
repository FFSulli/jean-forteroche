<?php 

namespace App\Controller;

use \Core\Auth\DBAuth;
use \Core\HTML\Form;
use \App;

/**
 * Classe UsersController
 */

class UsersController extends AppController {

    /**
     * Fonction permettant de se connecter
     */

    public function login() {

        $app = App::getInstance();
        $auth = new DBAuth($app->getDb());

        if($auth->logged()) {
            header('Location: index.php?p=admin.posts.index');
        }

        $errors = false;
        if(!empty($_POST)) {
            if($auth->login($_POST['username'], $_POST['password'])) {
                header('Location: index.php?p=admin.posts.index');
            } else {
                $errors = true;
            }
        }

        $this->render('users.login', compact('errors'));

    }
}