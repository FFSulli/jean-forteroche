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
        $this->loadModel('Comment');
    }

    /**
     * Fonction permettant de retourner à l'index Admin
     */

    public function index(){
        $saved_posts = $this->Post->saved();
        $published_posts = $this->Post->published();
        $reported_comments = $this->Comment->reportedComments();
        $this->render('admin.posts.index', compact('saved_posts', 'published_posts', 'reported_comments'));
    }

    /**
     * Fonction permettant d'ajouter un élément
     */

    public function add(){

        $errors = false;

        if (isset($_POST['save'])) {
            $title = $_POST['title'];
            $content = $_POST['content'];
            $excerpt = $_POST['excerpt'];
            if(empty($title)) {
                $errors = true;
            } elseif(empty($content)) {
                $errors = true;
            } elseif(empty($excerpt)) {
                $errors = true;
            } else {
                $result = $this->Post->create(['title' => $_POST['title'], 'content' => $_POST['content'], 'excerpt' => $_POST['excerpt'], 'post_status' => 'saved', 'date' => date('Y-m-d H:i:s')]);
                if($result) {
                    return $this->index();
                }
            }
        }
        $this->render('admin.posts.add', compact('errors'));
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
        $this->render('admin.posts.edit', compact('post'));

    }

    /**
     * Fonction permettant de supprimer un élément
     */

    public function delete(){

        if (!empty($_POST)) {
            $result = $this->Post->delete($_POST['delete_post']);
            return $this->index();

        }
    }

    public function preview() {
        $preview_article = $this->Post->find($_GET['id']);

        $this->render('admin.posts.preview', compact('preview_article'));
    }

    public function publish() {
        if (!empty($_POST)) {
            $result = $this->Post->update($_POST['publish_post'], ['post_status' => 'published']);
            return $this->index();
        }
    }

    public function unpublish() {
        if (!empty($_POST)) {
            $result = $this->Post->update($_POST['unpublish_post'], ['post_status' => 'saved']);
            return $this->index();
        }
    }

    public function allow_comment() {
        if (!empty($_POST)) {
            $this->Comment->allowComment($_POST['allow_comment']);
            return $this->index();
        }
    }

    public function delete_comment() {
        if (!empty($_POST)) {
            $result = $this->Comment->deleteComment($_POST['delete_comment']);
            return $this->index();
        }
    }

}