<?php

namespace App\Controller;

use Core\Controller\Controller;

/**
 * Classe PostsController
 */

class ContactController extends AppController {

    /**
     * Constructeur de la classe ContactController
     */

    public function __construct() {

        parent::__construct();

    }

    /**
     * Fonction permettant d'afficher la page
     */
    
    public function show() {

        $this->render('contact.show');

    }

}