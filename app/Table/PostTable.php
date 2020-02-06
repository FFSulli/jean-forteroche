<?php

namespace App\Table;

use Core\Table\Table;

/**
 * Classe PostTable
 */

class PostTable extends Table {

    protected $table = 'posts';

    public function first() {
        return $this->query('SELECT posts.id, posts.title, posts.content, posts.excerpt, DATE_FORMAT(posts.date, "%d/%m/%Y à %Hh%i") AS date FROM posts ORDER BY posts.id ASC');
    }

    public function saved() {
        return $this->query('SELECT posts.id, posts.title, posts.content, posts.excerpt, DATE_FORMAT(posts.date, "%d/%m/%Y à %Hh%i") AS date FROM posts WHERE posts.post_status = "saved" ORDER BY posts.id DESC');
    }
    
    /**
     * Récupère les derniers articles
     *
     * @return array
     */

    public function published() {
        return $this->query('SELECT posts.id, posts.title, posts.content, posts.excerpt, DATE_FORMAT(posts.date, "%d/%m/%Y à %Hh%i") AS date FROM posts WHERE posts.post_status = "published" ORDER BY posts.id DESC');
    }

    public function lastThreePublished() {
        return $this->query('SELECT posts.id, posts.title, posts.content, posts.excerpt, DATE_FORMAT(posts.date, "%d/%m/%Y à %Hh%i") AS date FROM posts WHERE posts.post_status = "published" ORDER BY posts.id DESC LIMIT 3');
    }

}