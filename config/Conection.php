<?php
    class Connection{
        private $host = 'localhost';
        private $dbname = 'ceofdata';
        private $username = 'root';
        private $password = 'Arkanhell12';

        public function connect(){
            try{
                $connection = "mysql:host={$this->host};dbname={$this->dbname}";
                $options = [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::ATTR_EMULATE_PREPARES => false,
                ];
                $pdo = new PDO($connection, $this->username, $this->password, $options);
                return $pdo;
            }catch(PDOException $e){
                print_r('Error connection: ' . $e->getMessage());
            }
        }
    }
    