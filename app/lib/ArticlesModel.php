<?php

namespace App\Lib;

class ArticlesModel extends Model {
    public function getAllArticles() {
        $query = "
            SELECT a.id, a.title, a.date, u.login as author
            FROM articles a
            JOIN users u ON a.author_id = u.id
        ";
        $result = $this->db->query($query);

        if (!$result) {
            die("Error executing query: " . $this->db->error);
        }

        $articles = [];
        while ($row = $result->fetch_assoc()) {
            $articles[] = $row;
        }

        return $articles;
    }
}
