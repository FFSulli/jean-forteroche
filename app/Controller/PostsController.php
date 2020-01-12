<?php

namespace App\Controller;

use Core\Controller\Controller;

/**
 * Classe PostsController
 */

class PostsController extends AppController {

    /**
     * Constructeur de la classe PostsController
     */

    public function __construct() {

        parent::__construct();
        $this->loadModel('Post');
        $this->loadModel('Comment');


    }

    /**
     * Fonction permettant d'afficher un article
     */
    
    public function show() {

        $article = $this->Post->find($_GET['id']);
        $comments = $this->Post->displayComments($_GET['id']);

        if(!empty($_POST)) {
            $result = $this->Comment->addComment();
            if($result) {
                header('Location: '.$_SERVER['REQUEST_URI']);
            }
        }   

        $this->render('posts.show', compact('article', 'comments'));

    }

    public function chapters() {

        $posts = $this->Post->last();
        $this->render('posts.chapters', compact('posts'));

    }

}