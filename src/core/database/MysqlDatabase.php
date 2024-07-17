<?php

namespace App\Core\Database;

use PDO;
use PDOException;

class MysqlDatabase{

    private $pdo;

    public function __construct($dsn, $user, $password) {
        
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];

        try {
            $this->pdo = new PDO($dsn, $user, $password, $options);
            //echo "Connexion à la base de données réussie";
        } catch (PDOException $e) {
            echo "Erreur de connexion : " . $e->getMessage();
        }

    }
    public function getConnexion() {
    return $this->pdo;    
    }
    public function prepare(string $sql,array $data, string $entityName, bool $single = false)
    {
        $stmt = $this->pdo->prepare($sql);
        echo "<br>";

        $stmt->execute($data);

        $stmt->setFetchMode(PDO::FETCH_CLASS, $entityName);
        if ($single) {
            return $stmt->fetch();
        }
        return $stmt->fetchAll();
    }

    public function query(string $sql, string $entityName, bool $single = false)
    {
        $stmt = $this->pdo->query($sql);
        $stmt->setFetchMode(PDO::FETCH_CLASS, $entityName);
        if ($single) {
            return $stmt->fetch();
        }
        return $stmt->fetchAll();
    }
}