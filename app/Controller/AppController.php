<?php

namespace App\Controller;

use \App;
use Core\Controller\Controller;

/**
 * Classe AppController
 */

class AppController extends Controller {

    protected $template = 'default';

    /**
     * Constructeur de la classe AppController
     */

    public function __construct() {

        $this->viewPath = ROOT . '/app/Views/';
        $this->loadModel('Post');

    }

    /**
     * Fonction permettant de générer un modèle
     *
     * @param string $model_name
     */
    
    public function loadModel($model_name) {

        $this->$model_name = App::getInstance()->getTable($model_name);

    }

    /**
     * Fonction permettant d'afficher l'index
     */

    public function index() {
        $lastThreePosts = $this->Post->lastThree();
        $this->render('index', compact('lastThreePosts'));
    }

    public function biography() {
        $this->render('posts.biography');
    }

}