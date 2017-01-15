<?php
class Item_m extends Model
{

	function __construct(){
		parent::__construct();
	}
	function get($id){
		return $this->db->select("SELECT * FROM items WHERE id= :id",array('id' => $id));
	}
	function get_factor($user_id){
		$data=$this->db->select("SELECT * FROM factors WHERE user_id= :user_id AND status= :status LIMIT 1",array('user_id' => $user_id,'status'=>'0'));
		if(count($data)==0){
			$this->db->insert('factors',array('user_id'=>$user_id,'status'=>'0'));
			$data=$this->db->select("SELECT * FROM factors WHERE user_id= :user_id AND status= :status LIMIT 1",array('user_id' => $user_id,'status'=>'0'));
		}
		Session::set('factor_id',$data[0]['id']);
		return $data[0]['id']; 
	}
	function add_item_to_factor($factor_id,$item_id,$num){
            $price=$this->db->select("SELECT price FROM items WHERE id= :item_id LIMIT 1",array('item_id'=>$item_id))[0]['price'];
        $data=$this->db->select("SELECT * FROM purchased WHERE factor_id= :factor_id AND item_id= :item_id LIMIT 1",array('factor_id' => $factor_id,'item_id'=>$item_id));
        if(count($data)>0){
        $id=$data[0]['id'];
		//$num=$data[0]['num'];
		//$num++;
        
		$this->db->update('purchased',array('num'=>$num,'price'=>$price),"id=$id");
        }else{
		$this->db->insert('purchased',array('item_id'=>$item_id,'factor_id'=>$factor_id,'num'=>$num,'price'=>$price));
		}
	}
}
