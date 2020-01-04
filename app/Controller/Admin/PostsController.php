<?php

namespace App\Controller\Admin;

use Core\HTML\Form;

/**
 * Classe PostsController Admin
 */

class PostsController extends AppController{

    /**
     * Constructeur de la classe Admin PostsController 
     */

    public function __construct(){
        parent::__construct();
        $this->loadModel('Post');
    }

    /**
     * Fonction permettant de retourner à l'index Admin
     */

    public function index(){
        $posts = $this->Post->all();
        $this->render('admin.posts.index', compact('posts'));
    }

    /**
     * Fonction permettant d'ajouter un élément
     */

    public function add(){
        
        if(!empty($_POST)) {
            $result = $this->Post->create(['title' => $_POST['title'], 'content' => $_POST['content'], 'excerpt' => $_POST['excerpt']]);
            if($result) {
                return $this->index();
            }
        }   
        $this->render('admin.posts.edit');
    }

    /**
     * Fonction permettant de modifier un élément
     */

    public function edit(){

        if(!empty($_POST)) {
            $result = $this->Post->update($_GET['id'], ['title' => $_POST['title'], 'content' => $_POST['content'], 'excerpt' => $_POST['excerpt']]);
            if($result) {
                return $this->index();
            }
        }
        $post = $this->Post->find($_GET['id']);
        $this->render('admin.posts.edit');

    }

    /**
     * Fonction permettant de supprimer un élément
     */

    public function delete(){

        if (!empty($_POST)) {
            $result = $this->Post->delete($_POST['id']);
            return $this->index();

        }
    }

}