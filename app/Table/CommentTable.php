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

    public function reportedComments() {
        return $this->query("SELECT comment_id, comment, report_status  FROM comments WHERE report_status = 'reported' ORDER BY comments.comment_id ASC");
    }

    public function allowComment($comment_id) {
        return $this->query("UPDATE comments SET report_status = 'allowed' WHERE comment_id = '$comment_id'");
    }

    public function deleteComment($comment_id) {
        return $this->query("DELETE FROM comments WHERE comment_id = '$comment_id'");
    }


    public function displayComments($post_id) {
        return $this->query("SELECT comment_id, comment, comment_author, DATE_FORMAT(comment_date, '%d/%m/%Y %Hh%i') AS comment_date, report_status FROM posts INNER JOIN comments ON posts.id = comments.post_id WHERE post_id = ? ORDER BY comments.comment_date ASC", [$post_id]);
    }

}