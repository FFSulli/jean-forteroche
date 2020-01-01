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

        $errors = false;
        if(!empty($_POST)) {
            $auth = new DBAuth(App::getInstance()->getDb());
            if($auth->login($_POST['username'], $_POST['password'])) {
                header('Location: index.php?p=admin.posts.index');
            } else {
                $errors = true;
            }
        }

        $form = new Form($_POST);
        $this->render('users.login', compact('form', 'errors'));

    }

    public function register() {

        $errors = false;
        if(!empty($_POST)) {
            $auth = new DBAuth(App::getInstance()->getDb());
            if($auth->logged()) {
                header('Location: index.php');
            } else {
                $errors = true;
            }
        }

        $form = new Form($_POST);
        $this->render('users.register', compact('form', 'errors'));

    }

}