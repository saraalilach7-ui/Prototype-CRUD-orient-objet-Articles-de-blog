<?php
require_once __DIR__ . '/../config/database.php';

class Article {

    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->getConnection();
    }

    public function readAll() {
        $sql = "SELECT * FROM articles ORDER BY id DESC";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($titre, $contenu, $date_pub) {
        if (empty($titre) || empty($contenu) || empty($date_pub)) return false;

        $sql = "INSERT INTO articles (titre, contenu, date_pub)
                VALUES (:titre, :contenu, :date_pub)";

        $stmt = $this->conn->prepare($sql);

        return $stmt->execute([
            ':titre' => htmlspecialchars($titre),
            ':contenu' => htmlspecialchars($contenu),
            ':date_pub' => $date_pub
        ]);
    }

    public function delete($id) {
        $sql = "DELETE FROM articles WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([':id' => $id]);
    }

    public function find($id) {
        $sql = "SELECT * FROM articles WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([':id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function update($id, $titre, $contenu, $date_pub) {
        if (empty($titre) || empty($contenu) || empty($date_pub)) return false;

        $sql = "UPDATE articles 
                SET titre = :titre, contenu = :contenu, date_pub = :date_pub
                WHERE id = :id";

        $stmt = $this->conn->prepare($sql);

        return $stmt->execute([
            ':id' => $id,
            ':titre' => htmlspecialchars($titre),
            ':contenu' => htmlspecialchars($contenu),
            ':date_pub' => $date_pub
        ]);
    }
}