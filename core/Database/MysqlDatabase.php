<?php

namespace Core\Database;

use \PDO;

/**
 * Classe base de données Mysql
 */

class MysqlDatabase extends Database {

    private $db_name;
    private $db_user;
    private $db_pass;
    private $db_host;
    private $pdo;

    /**
     * Constructeur de la base de données Mysql
     *
     * @param string $db_name
     * @param string $db_user
     * @param string $db_pass
     * @param string $db_host
     */

    public function __construct($db_name, $db_user = 'root', $db_pass = 'root', $db_host = 'localhost') {
        $this->db_name = $db_name;
        $this->db_user = $db_user;
        $this->db_pass = $db_pass;
        $this->db_host = $db_host;
    }

    /**
     * Fonction de configuration de PDO
     *
     * @return boolean
     */

    private function getPDO() {
        if($this->pdo === null) {
            $pdo = new PDO('mysql:dbname=' . $this->db_name . ';host=' . $this->db_host, $this->db_user, $this->db_pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo = $pdo;
        }
        return $this->pdo;
    }

    /**
     * Fonction de requête PDO
     *
     * @param string $statement
     * @param string $class_name
     * @param boolean $one
     * @return boolean
     */

    public function query($statement, $class_name = null, $one = false) {
        $req = $this->getPDO()->query($statement);
        if(
            strpos($statement, 'UPDATE') === 0 ||
            strpos($statement, 'INSERT') === 0 ||
            strpos($statement, 'DELETE') === 0) {
                return $req;
            }
        if($class_name === null) {
            $req->setFetchMode(PDO::FETCH_OBJ);
        } else {
            $req->setFetchMode(PDO::FETCH_CLASS, $class_name);
        }
        
        if($one) {
            $data = $req->fetch();
        } else {
            $data = $req->fetchAll();
        }
        return $data;
    }

    /**
     * Fonction de préparation de requête PDO
     *
     * @param string $statement
     * @param string $attributes
     * @param string $class_name
     * @param boolean $one
     * @return boolean
     */

    public function prepare($statement, $attributes, $class_name = null, $one = false) {
        $req = $this->getPDO()->prepare($statement);
        $res = $req->execute($attributes);
        if(
            strpos($statement, 'UPDATE') === 0 ||
            strpos($statement, 'INSERT') === 0 ||
            strpos($statement, 'DELETE') === 0) {
                return $res;
            }
        if($class_name === null) {
            $req->setFetchMode(PDO::FETCH_OBJ);
        } else {
            $req->setFetchMode(PDO::FETCH_CLASS, $class_name);
        }
        if($one) {
            $data = $req->fetch();
        } else {
            $data = $req->fetchAll();
        }
        return $data;
    }

    /**
     * Fonction permettant de récupérer le dernier id inséré
     *
     * @return int
     */
    
    public function lastInsertId() {
        return $this->getPDO()->lastInsertId();
    }
}