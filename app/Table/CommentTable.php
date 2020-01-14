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

    public function reportComment($comment_id) {
        return $this->query("UPDATE comments SET report_status = 'reported' WHERE comment_id = '$comment_id'");
    }

    public function displayComments($post_id) {
        return $this->query("SELECT comment_id, comment, comment_author, comment_date, report_status FROM posts INNER JOIN comments ON posts.id = comments.post_id WHERE post_id = ? ORDER BY comments.comment_date ASC", [$post_id]);
    }

}