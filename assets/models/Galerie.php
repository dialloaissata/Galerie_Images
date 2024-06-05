<?php
// inclusion de Database.php
require_once "Database.php";
class Galerie extends Database
{
    public function __construct()
    {
        parent::__construct();
        $this->initGalerieTable();
    }

    private function initGalerieTable(): void
    {
        $this->pdo->exec('CREATE TABLE IF NOT EXISTS galerie (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            imageName VARCHAR(255) NOT NULL,
            imageDescription TEXT NOT NULL,
            type VARCHAR(8) NOT NULL
        )');
    }

    public function getImagesLivre($type)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM galerie WHERE type = :liv");
        $stmt->bindValue(":liv", $type);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function getImagesArchitecture($type)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM galerie WHERE type = :arch");
        $stmt->bindValue(":arch", $type);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function getImagesMaquillage($type)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM galerie WHERE type = :maq");
        $stmt->bindValue(":maq", $type);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function getImagesTechnologie($type)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM galerie WHERE type = :tec");
        $stmt->bindValue(":tec", $type);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getImageBetween(int $startImage, int $countImage, string $type)
    {
        $statement = $this->pdo->prepare(
            'SELECT * FROM galerie
            WHERE type=:typeImg
            LIMIT :start, :countImg'
        );

        $statement->bindValue(':start', $startImage, PDO::PARAM_INT);
        $statement->bindValue(':countImg', $countImage, PDO::PARAM_INT);
        $statement->bindValue(':typeImg', $type, PDO::PARAM_STR);


        $statement->execute();

        return $statement->fetchAll();
    }
}
