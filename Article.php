<?php
require 'database.php';

class Article{
    private $conn;

    public function __construct(){
        $db = new Database("localhost","blogdb","root","");
        $this->conn = $db->getconnection();
    }

    public function create($titre,$contenu,$date_pub){
        $query ="INSERT INTO article (titre, contenu, date_pub)
                 VALUES(:titre, :contenu, :date_pub)";
        $stmt=$this->conn->prepare($query);
        return $stmt->execute([
            "titre" => $titre,
            "contenu"=>$contenu,
            "date_pub"=>$date_pub
        ]);
    }

    public function update($id,$titre,$contenu,$date_pub){
        $query ="UPDATE article 
                 SET titre=:titre, contenu=:contenu, date_pub=:date_pub
                 WHERE id =:id";
        $stmt=$this->conn->prepare($query);
        return $stmt->execute([
            "titre" => $titre,
            "contenu"=>$contenu,
            "date_pub"=>$date_pub,
            "id"=> $id
        ]);
    }

    public function delete($id){
        $query ="DELETE FROM article WHERE id =:id";
        $stmt=$this->conn->prepare($query);
        return $stmt->execute([
            "id"=> $id
        ]);
    }

    public function readAll(){
        $query ="SELECT * FROM article";
        $stmt =$this->conn->query($query);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>