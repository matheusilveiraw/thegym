<?php

    namespace App\Model;

    class Conexao { //padrão singleton, ter só uma única instancia de uma classe para ser mais rápido 

        private static $instance;

        public static function getConn() { 
            if (!isset(self::$instance)) { 
                self::$instance = new \PDO('mysql:host=localhost; dbname=pdo; charset=utf8', 'root', ''); 
            }
            
            return self::$instance;
        }
    } 
?>