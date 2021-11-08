<?php
// post class
class PostClass
{
    // database connection and table name
    private $conn;
    private $table_name = "posts";

    // object properties
    public $id;
    public $title;
    public $body;
    public $author;
    public $created_at;

    // constructor with $db as database connection
    public function __construct($db)
    {
        $this->conn = $db;
    }

    // read posts
    function read()
    {
        // select all query
        $query = "SELECT
                id, title, body, author, created_at
            FROM
                " . $this->table_name . "
            ORDER BY
                created_at DESC";

        // prepare query statement
        $stmt = $this->conn->prepare($query);

        // execute query
        $stmt->execute();

        return $stmt;
    }
}