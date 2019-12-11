<?php

namespace App\Table;

use Core\Table\Table;

/**
 * Classe PostTable
 */

class PostTable extends Table {

    protected $table = 'posts';
    
    /**
     * Récupère les derniers articles
     *
     * @return array
     */

    public function last() {
        return $this->query('SELECT posts.id, posts.title, posts.content, posts.date FROM posts ORDER BY posts.date DESC');
    }

}