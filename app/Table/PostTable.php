<?php

namespace App\Table;

use Core\Table\Table;

/**
 * Classe PostTable
 */

class PostTable extends Table {

    protected $table = 'posts';

    public function first() {
        return $this->query('SELECT posts.id, posts.title, posts.content, posts.excerpt, posts.date FROM posts ORDER BY posts.id ASC');
    }
    
    /**
     * Récupère les derniers articles
     *
     * @return array
     */

    public function last() {
        return $this->query('SELECT posts.id, posts.title, posts.content, posts.excerpt, posts.date FROM posts ORDER BY posts.id DESC');
    }

    public function lastThree() {
        return $this->query('SELECT posts.id, posts.title, posts.content, posts.excerpt, posts.date FROM posts ORDER BY posts.id DESC LIMIT 3');
    }

}