<?php 

class QueryBuilder{
	protected $pdo;
	public function __construct($pdo)
	{
		$this->pdo=$pdo;
	}
	public function selectAll($table)

   {
	$statement=$pdo->prepare("select * from $table");
	$statement->execute();
	return $statement->fetchAll(POD::FETCH_OBJ);
  }
}
