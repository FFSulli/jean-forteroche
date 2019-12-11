<?php

namespace Core\Table;

use Core\Database\Database;

/**
 * Classe Table
 */

class Table {

    protected $table;
    protected $db;

    /**
     * Constructeur de la classe Table
     */
 
    public function __construct(Database $db) {

        $this->db = $db;

        if(is_null($this->table)) {
            $parts = explode('\\', get_class($this));
            $class_name = end($parts);
            $this->table = strtolower(str_replace('Table', '', $class_name)) . 's';
        }
    }

    /**
     * Fonction permettant de récupérer tous les éléments d'une table de la base de données
     */

    public function all() {

        return $this->query('SELECT * FROM ' . $this->table);

    }

    /**
     * Fonction permettant d'effectuer une requête dans une table de la base de données
     *
     * @param string $statement
     * @param string $attributes
     * @param boolean $one
     */

    public function query($statement, $attributes = null, $one = false) {
        
        if($attributes) {
            return $this->db->prepare($statement, $attributes, str_replace('Table', 'Entity', get_class($this)), $one);
        } else {
            return $this->db->query($statement, str_replace('Table', 'Entity', get_class($this)), $one);
        }
    }

    /**
     * Fonction permettant d'effectuer une recherche dans une table de la base de données
     *
     * @param int $id
     */

    public function find($id) {

        return $this->query('SELECT * FROM ' . $this->table . ' WHERE id = ?', [$id], true);

    }

    /**
    * Fonction permettant de créer un élément dans une table de la base de données
    *
    * @param string $fields
    */

    public function create($fields) {

        $sql_parts = [];
        $attributes = [];
        foreach($fields as $k => $v) {
            $sql_parts[] = "$k = ?";
            $attributes[] = $v;
        }
        $sql_part = implode(', ', $sql_parts);
        return $this->query('INSERT INTO ' . $this->table . ' SET ' . $sql_part . '', $attributes, true);

    }

    /**
     * Fonction permettant de mettre à jour un élément dans une table de la base de données
     *
     * @param int $id
     * @param string $fields
     */

    public function update($id, $fields) {

        $sql_parts = [];
        $attributes = [];
        foreach($fields as $k => $v) {
            $sql_parts[] = "$k = ?";
            $attributes[] = $v;
        }
        $attributes[] = $id; 
        $sql_part = implode(', ', $sql_parts);
        return $this->query('UPDATE ' . $this->table . ' SET ' . $sql_part .  ' WHERE id = ?', $attributes, true);

    }

    /**
     * Fonction permettant de supprimer un élément dans une table de la base de données
     *
     * @param int $id
     */

    public function delete($id) {

        return $this->query('DELETE FROM ' . $this->table . ' WHERE id = ?', [$id], true);

    }

}