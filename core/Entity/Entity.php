<?php 

namespace Core\Entity;

/**
 * Classe Entity
 */

class Entity {

    /**
     * Fonction permettant d'initialiser les getters
     *
     * @param string $key
     * @return string  getter
     */
    
    public function __get($key) {

        $method = 'get' . ucfirst($key);
        $this->$key = $this->$method();
        return $this->$key;

    }

}