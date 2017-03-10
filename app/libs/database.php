<?php
class Database extends PDO{
	public function __construct(){
		parent::__construct('mysql:host=localhost;dbname=golbon', 'root', '');
	}
	public function select($sql,$data=array(),$fetchMode=PDO::FETCH_ASSOC){
		$sth=$this->prepare($sql);
		foreach($data as $key =>$value){
			$sth->bindValue(":$key",$value);
		}
		$sth->execute();
		return $sth->fetchAll($fetchMode);
	}
	public function insert($table,$data){
		ksort($data);
		$fieldNames=implode("`, `",array_keys($data));
		$fieldValues=':'.implode(', :',array_keys($data));
		$sth=$this->prepare("INSERT INTO $table (`$fieldNames`) VALUES ($fieldValues)");
		foreach($data as $key =>$value){
			$sth->bindValue(":$key",$value);
		}
		$sth->execute();
	}
	public function update($table,$data,$where){
		ksort($data);
		$fieldDetails=NULL;
		foreach($data as $key =>$value){
			$fieldDetails .="`$key`=:$key,";
		}
		$fieldDetails=rtrim($fieldDetails,',');
		$sth=$this->prepare("UPDATE $table SET $fieldDetails WHERE $where");
		foreach($data as $key =>$value){
			$sth->bindValue(":$key",$value);
		}
		$sth->execute();
	}
	// public function myquery($sql){
	// 	if(isset($sql)){
	// 		$result=$this->db->query($sql);
	// 	}
	// }
	public function delete($table,$where,$limit=1){
		return $this->exec("DELETE FROM $table WHERE $where LIMIT $limit");
	}
}
