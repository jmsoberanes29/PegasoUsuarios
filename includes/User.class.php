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

        public static function update_user($id, $name, $email, $city, $telephone){
            $database = new Database();
            $conn = $database->getConnection();

            $stmt = $conn->prepare('UPDATE users SET name=:name, email=:email, city=:city, telephone=:telephone WHERE id=:id');            
            $stmt->bindParam(':name',$name);
            $stmt->bindParam(':email',$email);
            $stmt->bindParam(':city',$city);
            $stmt->bindParam(':telephone',$telephone);
            $stmt->bindParam(':id',$id);

            if($stmt->execute()){
                header('HTTP/1.1 201 Usuario actualizado correctamente');
            } else {
                header('HTTP/1.1 404 Usuario no se ha podido actualizar correctamente');
            }

        }

        public static function delete_user_by_id($id){
            $database = new Database();
            $conn = $database->getConnection();

            $stmt = $conn->prepare('DELETE FROM users WHERE id=:id');
            $stmt->bindParam(':id',$id);
            if($stmt->execute()){
                header('HTTP/1.1 201 Usuario eliminado correctamente');
            } else {
                header('HTTP/1.1 404 Usuario no se ha podido eliminar correctamente');
            }
        }
    }

?>