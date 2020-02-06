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
        $comments = $this->Comment->displayComments($_GET['id']);

        if(!empty($_POST['add_comment'])) {
            $result = $this->Comment->addComment();
            if($result) {
                header('Location: '.$_SERVER['REQUEST_URI']);
            }
        }  

        if(isset($_POST['report_comment'])) {
            $reported = $this->Comment->reportComment($_POST['comment_id']);
            if($reported) {
                header('Location: '.$_SERVER['REQUEST_URI']);
            }
        }

        $this->render('posts.show', compact('article', 'comments'));

    }

    public function chapters() {

        $posts = $this->Post->published();
        $this->render('posts.chapters', compact('posts'));

    }

}