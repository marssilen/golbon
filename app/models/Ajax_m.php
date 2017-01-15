<?php
class Ajax_m extends Model
{

	function __construct(){
		parent::__construct();
	}
	function count(){
		$sql='SELECT * FROM items';
		$result=$this->db->query($sql);
		return $result->rowCount();
	}
	function show($fun=0,$id=0,$cat=0){
		if($fun==0)
		//ORDER BY id DESC
		$sql="SELECT * FROM items where id>$id AND cat=$cat limit 4";
		else
		$sql="SELECT * FROM items where id<$id AND cat=$cat  ORDER BY id DESC limit 4";
		$result=$this->db->query($sql);
		$return=$result->fetchAll(PDO::FETCH_ASSOC);
		if($fun==1)
			$return = array_reverse($return);
		return $return;
	}
	function get_cat(){
		$sql='SELECT * FROM category';
		$result=$this->db->query($sql);
		return $result->fetchAll(PDO::FETCH_ASSOC);
	}
        function add_province($data){
            foreach($data as $p)
            $this->db->insert('province',array('name'=>$p));
        }
        function get_cities($pro){
            $pro=  intval($pro);
            //$result=$this->db->select("SELECT name FROM city  WHERE pa=:search",array('search' => $pro));
            $sql='SELECT name FROM city WHERE pa='.$pro;
            $result=$this->db->query($sql);
            return $result->fetchAll(PDO::FETCH_NUM);
            //return $result;
        }
}