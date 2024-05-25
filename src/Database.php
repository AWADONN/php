<?php

declare (strict_types=1);

namespace App;

use App\Exception\ConfiguratonException;
use App\Exception\NotFoundException;
use App\Exception\StorageException;
use Exception;
use PDO;
use PDOException;
use throwable;

class Database
{
    private PDO $conn;
    public function __construct(array $config)
    {
        try{
            $this->validateConfig($config);
            $this->createConnection($config);
        } catch (PDOException $e) {
            throw new storageException("problem z płączeniem do bazy!");
        }
    }

    public function createNote(array $data): void
    {
      try {
        $title = $this->conn->quote($data['title']);
        $description = $this->conn->quote($data['description']);
        $created = date('Y-m-d H:i:s');
        $query = "INSERT INTO notes(title,description,created)VALUES($title,$description,'$created')";//APOSTROF
        $result =$this->conn->exec($query);
      }  catch (throwable $e) {
        throw new StorageException('nie udało się utworzyć nowej notatki',400,$e);
      }
    }

    public function getNotes():array
    {
        try{
            $notes=[];
            $query = 'SELECT id, title, created FROM notes';

            $result =$this->conn->query($query);
            return $result->fetchAll(PDO::FETCH_ASSOC);
        }catch (Throwable $e){
            throw new StorageException('Nie można pobrać notatek.', 400, $e);
        }
    }

    public function getNote(int $id):array
    {
        try {
            $query = "SELECT * FROM notes WHERE id=$id";
            $result = $this -> conn -> query($query);
            $note = $result -> fetch(PDO::FETCH_ASSOC);
        } catch (Throwable $e) {
            throw new StorageException('nie udało się pobrać notatki',400,$e);
        }
        if (!$note){
            throw new NotFoundException('Notatka o id: $id nie istnieje.');
        }
        
        return $note;
    }
    private function createConnection(array $config):void 
    {
       $dsn="mysql:dbname={$config['database']};host={$config['host']}";
       $this->conn = new PDO(
            $dsn,
            $config['user'],
            $config['password'],
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]
       ); 
       //$this->conn=PDO('lalalalala');
    }

    private function ValidateConfig(array $config): void 
    {
        if (empty($config['database'])||empty($config['user'])||empty($config['host'])){
            throw new ConfigurationException("problem z konfiguracją bazy - skontaktuj się z administratorem.");
        }
    }

}
