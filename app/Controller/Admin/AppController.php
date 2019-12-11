<?php

namespace App\Controller\Admin;

use \App;
use \Core\Auth\DBAuth;

/**
 * Class AppController Admin
 */

class AppController extends \App\Controller\AppController{

    /**
     * Constructeur de la classe AppController Admin
     */
    
    public function __construct(){
        parent::__construct();
        $app = App::getInstance();
        $auth = new DBAuth($app->getDb());
        if(!$auth->logged()){
            $this->forbidden();
        }
    }

}