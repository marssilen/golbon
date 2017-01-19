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
        function count_items_in_basket($factor_id){
            $data=$this->db->select("SELECT count(*) as count FROM purchased WHERE factor_id= :factor_id",array('factor_id' => $factor_id));
            return $data[0]['count'];
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
        function get_menu($parent=0){
//            return $this->db->select("SELECT id,menu,href FROM menu WHERE parent= :parent",array('parent' => $parent));
            return $this->db->select("SELECT * FROM menu");
        }
        function add_to_favorite($item_id,$user_id){
            $exist_in_favorites=$this->db->select("SELECT * FROM favorites WHERE user_id= :id AND item_id= :item_id",array('id' => $user_id,'item_id'=>$item_id));
            $exist_in_items=$this->db->select("SELECT id FROM items WHERE id= :id",array('id' => $item_id));
            if(empty($exist_in_favorites) && !empty($exist_in_items)){
                $this->db->insert('favorites',array('item_id'=>$item_id,'user_id'=>$user_id));
                echo 'done';
            }
            
        }
}
