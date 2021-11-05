<?php
namespace Libs\Database;

use PDO;
use PDOException;

class Category
{
    //database connection and table name
    private $db;
    private $table = 'categories';
    public $id;
    public $name;

    public function __construct($db)
    {
        $this->db = $db;
    }

    //used by select drop-downlist
    public function getCategories()
    {
        $query = "SELECT
        id, name , created, modified 
        FROM
          " . $this->table . "
        ORDER BY 
        name";

        $stmt = $this->db->prepare($query);
        $stmt->execute();

        return $stmt;
    }
    public function CategoryInsert($data)
    {
        try{
            $query = "INSERT INTO categories (name, created, modified) VALUES (:name, Now(), Now())";
            
            $statement = $this->db->prepare($query);
            $statement->execute($data);
            return $this->db->lastInsertId();
        }catch (PDOException $e){
            return $e->getMessage()();
        }
    }
}