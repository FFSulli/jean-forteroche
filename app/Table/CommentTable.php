<?php

namespace App\Table;

use Core\Table\Table;

/**
 * Classe PostTable
 */

class CommentTable extends Table {

    protected $table = "comments";

    public function addComment() {
        $post_id = $_GET['id'];
        $comment_author = $_POST['comment_author'];
        $comment = $_POST['comment'];

        return $this->query("INSERT INTO comments (post_id, comment_author, comment, comment_date) VALUES ('$post_id', '$comment_author', '$comment', NOW())");
    }

}