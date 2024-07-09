<?php

    class Model {
        
        private PDO $bdd; //book_user ; azerty

        public function __construct() {
            try  {
                $this->bdd = new PDO('mysql:host=localhost:3306;dbname=books_e2c;charset=utf8',$_POST["identifiant"],$_POST["password"]);
            } catch (Exception $e) {
                die($e->getMessage());
            }
        } 
        
        public function findUserByIdentifier(string $identifier) {
            $sqlQuery = "SELECT id, firstname, lastname, password FROM Users WHERE email = :identifier";
            $statement = $this->bdd->prepare($sqlQuery);
            $statement->execute([
                ":identifier" => $identifier
            ]);
            $req = $statement -> fetch();
            return $req;
        }
    }

?>