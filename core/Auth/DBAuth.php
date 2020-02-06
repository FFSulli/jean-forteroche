<?php

namespace Core\Auth;

use Core\Database\Database;

/**
 * Classe DBAuth
 */

class DBAuth {

    private $db;

    /**
     * Constructeur de la classe DBAuth
     */

    public function __construct (Database $db) {

        $this->db = $db;

    }

    /**
     * Fonction permettant de récupérer l'id de l'utilisateur
     *
     * @return boolean
     */

    public function getUserId() {
        if($this->logged()) {
            return $_SESSION['auth']; 
        }
        return false;
    }
    
    /**
     * Fonction permettant de s'identifier
     *
     * @param $username
     * @param $password
     * @return boolean
     */

    public function login($username, $password) {

        $user = $this->db->prepare('SELECT * FROM users WHERE username = ?', [$username], null, true);
        if($user) {
            if($user->password === sha1($password)) {
                $_SESSION['auth'] = $user->id;
                return true;
            }
        } 
        return false;
    }

    /**
     * Fonction permettant de vérifier si l'utilisateur est connecté
     *
     * @return boolean
     */

    public function logged() {

        return isset($_SESSION['auth']);

    }

}