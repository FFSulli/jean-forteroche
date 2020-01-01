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

    }

    /**
     * Fonction permettant d'afficher un article
     */
    
    public function show() {

        $article = $this->Post->find($_GET['id']);
        $this->render('posts.show', compact('article'));

    }

    public function chapters() {

        $posts = $this->Post->last();
        $this->render('posts.chapters', compact('posts'));

    }
}