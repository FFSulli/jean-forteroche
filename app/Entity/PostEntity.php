<?php 

namespace App\Entity;

/**
 * Classe PostEntity
 */

class PostEntity extends \Core\Entity\Entity {
    
    /**
     * Récupère l'URL de l'article
     *
     * @return string URL
     */

    public function getUrl() {

        return 'index.php?p=posts.show&id=' . $this->id;

    }
}