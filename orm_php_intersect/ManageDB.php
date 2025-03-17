<?php
include_once 'DB.php';
class ManageBD extends DB{
  public function getQueries(){

	$intersect = $this->connect()->query("
    SELECT edificio FROM departamento AS d1
    INTERSECT
    SELECT edificio FROM departamento AS d2
");
 
	$cJoin = $this->connect()->query("SELECT * FROM departamento AS d1 CROSS JOIN departamento AS d2");
	
	$queries = array (
		"intersect"=>$intersect,
		"cross_join"=>$cJoin
	);
	
		return $queries;
	
	}
}
?>
