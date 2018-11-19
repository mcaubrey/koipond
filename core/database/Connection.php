<?php

namespace App\Core\Database;

use PDO;
use PDOException;

class Connection
{
    /**
     * Create a new PDO connection.
     *
     * @param array $config
     */
    public static function make($config)
    {
        if ($config['type'] == "mysql") {
            try {
                return new PDO(
                    $config['type'].':host='.$config['host'].';port='.$config['port'].';dbname='.$config['name'],
                    $config['username'],
                    $config['password'],
                    $config['options']
                );
            } catch (PDOException $e) {
                die($e->getMessage());
            }
        }
        
        if ($config['type'] == "sqlite") {
            
            try {
                return new PDO(
                    $config['type'].':'.$config['path']
                );
            } catch (PDOException $e) {
                die($e->getMessage());
            }
        }
        
        throw new \Exception("Database type not recognized by Koipond.");
    }
}
