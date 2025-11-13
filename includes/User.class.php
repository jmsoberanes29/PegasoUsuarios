<?php
    require_once('Database.class.php');

    class User{
        public static function create_user($name, $email, $city, $telephone){
            $database = new Database();
            $conn = $database->getConnection();

            $stmt = $conn->prepare('INSERT INTO users(name, email, city, telephone)
                VALUES(:name, :email, :city, :telephone)');            
            $stmt->bindParam(':name',$name);
            $stmt->bindParam(':email',$email);
            $stmt->bindParam(':city',$city);
            $stmt->bindParam(':telephone',$telephone);

            if($stmt->execute()){
                header('HTTP/1.1 201 Usuario creado correctamente');
            } else {
                header('HTTP/1.1 404 Usuario no se ha creado correctamente');
            }
        }
    }

?>