<?php

declare (strict_types=1);

namespace App;

use App\Exception\ConfiguratonException;
use App\Exception\StorageException;
use Exception;
use PDO;
use PDOException;

class Database
{
    public function __construct(array $config)
    {
        try{
            $this->validateConfig($config);
            $dsn ="mysql:dbname={$config['database']};host={$config['host']}";
            $connection = new PDO(
                $dsn,
                $config['user'],
                $config['password'],
            );
        } catch (PDOException $e) {
            throw new storageException("problem z płączeniem do bazy!");
        }
    }
    private function ValidateConfig(array $config): void 
    {
        if (empty($config['database'])||empty($config['user'])||empty($config['host'])){
            throw new ConfigurationException("problem z konfiguracją bazy - skontaktuj się z administratorem.");
        }
    }

}
