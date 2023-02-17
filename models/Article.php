<?php
class Article {
    private $id = 0;
    private $textes = null;
    private $id_utilisateurs = null;

    const HOST = "localhost";
    const DBNAME = "blogville";
    const LOGIN = "root";
    const PASSWORD = "";


public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        return $this->id = $id;
    }
    public function getTextes()
    {
        return $this->textes;
    }
    public function setTextes($textes)
    {
        return $this->textes = $textes;
    }
    public function getId_utilisateurs()
    {
        return $this->id_utilisateurs;
    }
    public function setId_utilisateurs($id_utilisateurs)
    {
        return $this->id_utilisateurs = $id_utilisateurs;
    }

    private function connecter()
    {
        $pdo = new PDO("mysql:host=" . self::HOST . ";dbname=" . self::DBNAME, self::LOGIN, self::PASSWORD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }

    public function requete(){

        $insert = $this->connecter()->prepare("INSERT INTO articles (textes,id_utilisateurs)
        VALUES(?,?) ");

        $insert->bindValue(1, $this->textes, PDO::PARAM_STR);
        $insert->bindValue(2, $this->id_utilisateurs, PDO::PARAM_INT);
        $insert->execute();
    }
}
