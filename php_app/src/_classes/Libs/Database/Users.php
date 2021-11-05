<?php
namespace Libs\Database;
use PDO;
use PDOEException;

class Users
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }
    // public function getAll()
    // {
    //     $query = "SELECT * FORM users";
    //     $stmt = $this->db->prepare($query);
    //     $stmt->execute();
    //     return $stmt->fetchAll();
    // }
    
    public function getAll()
    {
        $query = "SELECT * FROM users";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function insert($data)
    {
        try{
             $query =" INSERT INTO users (username, email, password, phone) VALUES (:username, :email, :password, :phone)";

             $statement = $this->db->prepare($query);
             $statement->execute($data);
             return $this->db->lastInsertId();
        }  catch(PDOException $e){
            return $e->getMessage()();
        }
    }
    public function findByEmailAndPassword($email, $password)
    {
        $query = $this->db->prepare("SELECT * FROM users WHERE email = :email AND password = :password");
        $query->execute([
            'email' => $email,
            'password' => $password
        ]);
        $row = $query->fetch();
        return $row ?? false;
    }
}