<?php

require_once 'Database.php';

class Post extends Database
{
    public function __construct()
    {
        parent::__construct();
        $this->initFormulaireTable();
    }

    private function initFormulaireTable()
    {
        $this->pdo->query('CREATE TABLE IF NOT EXISTS formulaire(
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    nom VARCHAR(255) NOT NULL,
    email TEXT NOT NULL,
    message VARCHAR(255) NOT NULL
)');
    }

    private function checkNom(string $nom): bool
    {
        return $nom !== '' && strlen($nom) <= 255;
    }

    private function checkEmail(string $email): bool
    {
        return $email !== '' && strlen($email) <= 255;
    }

    private function checkMessage(string $message): bool
    {
        return $message !== '' && strlen($message) <= 1000;
    }

    public function createPost(string $nom, string $email, string $message)
    {
        if ($this->checkNom($nom) && $this->checkEmail($email) && $this->checkMessage($message)) {
            $stmt = $this->pdo->prepare("INSERT INTO formulaire (`nom`, `email`, `message`) VALUES (:nom, :email, :message)");
            $stmt->bindValue(':nom', htmlspecialchars($nom));
            $stmt->bindValue(':email', htmlspecialchars($email));
            $stmt->bindValue(':message', htmlspecialchars($message));
            $stmt->execute();
        }
    }

    public function getPost(int $id)
    {
        $stmt = $this->pdo->prepare('SELECT * FROM formulaire WHERE id=:identifiant');
        $stmt->bindValue(':identifiant', $id);
        $stmt->execute();

        return $stmt->fetch();
    }

    public function getPosts()
    {
        return $this->pdo->query('SELECT * FROM formulaire')
            ->fetchAll();
    }
}
