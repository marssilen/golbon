<?php
class address extends Model
{
	function __construct(){
		parent::__construct();
	}
	function get($uid){
		$result=$this->db->select("SELECT * FROM address WHERE user_id=:uid",array('uid' =>$uid));
		return $result;
	}
}
