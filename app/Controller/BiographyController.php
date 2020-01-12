<?php

namespace App\Controller;

use Core\Controller\Controller;

/**
 * Classe PostsController
 */

class BiographyController extends AppController {

    /**
     * Constructeur de la classe PostsController
     */

    public function __construct() {

        parent::__construct();

    }

    /**
     * Fonction permettant d'afficher un article
     */
    
    public function show() {

        $this->render('biography.show');

    }

}