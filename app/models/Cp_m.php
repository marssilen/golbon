<?php
class Cp_m extends Model
{

	function __construct(){
		parent::__construct();
	}
	function count(){
		$result=$this->db->select("SELECT count(*) as count FROM items");
		return $result[0]['count'];
	}
	function add_new(){
		$this->db->insert('items',array('id'=>''));
		$result=$this->db->select("SELECT id FROM items ORDER BY id DESC LIMIT 1");
		return $result[0]['id'];
	}
  function add_address($user_id,$post){
  // print_r($post);
		$this->db->insert('address',array(
                    'name'=>$post['name'],
                    'c_phone'=>$post['c-phone'],
                    's_phone'=>$post['s-phone'],
                    'province'=>$post['province'],
                    'city'=>$post['city'],
                    'address'=>$post['address'],
                    'postal_code'=>$post['postal-code'],
                    'user_id'=>$user_id
                    ));

	}
	function get_all_id(){
		$result=$this->db->select("SELECT id FROM items ");
		return $result;
	}
	function get_last_id(){
		$result=$this->db->select("SELECT id FROM items ORDER BY id DESC LIMIT 1");
		return $result;
	}
	function get_all($pageno,$rows_per_page){//
            $limit = 'LIMIT ' .($pageno - 1) * $rows_per_page .',' .$rows_per_page;
            $result=$this->db->select("SELECT id, name,card_image FROM items ORDER BY id DESC $limit");
            return $result;
	}
	function search_item($search){//,$id,$limit
		$id_name_and_tag=$this->db->select("SELECT id, name,card_image FROM items WHERE (name LIKE :search OR tag LIKE :search2 OR id=:id)"// AND id<=$id ORDER BY id DESC LIMIT $limit
			,array('search' => '%' . $search . '%','search2' => '{%' . $search . '%}','id'=>$search));
		return $id_name_and_tag;
	}
	/*function count_search_item($search){
		$id_name_and_tag=$this->db->select("SELECT id FROM items WHERE name LIKE :search OR tag LIKE :search2 OR id=:id"
			,array('search' => '%' . $search . '%','search2' => '{%' . $search . '%}','id'=>$search));
		return count($id_name_and_tag);
	}*/
	function get_my_orders($user_id){
		$sql="SELECT id,status,factor_id,date,factor_price
FROM factors where user_id=$user_id";//where user_id=$user_id;

		//$sql="SELECT purchased.id, items.name, factors.code, factors.status, purchased.user_id
		//FROM purchased,factors and factors INNER JOIN items ON purchased.item_id=items.id WHERE user_id=$user_id ORDER BY id DESC";// LIMIT $limit ";//
		$result=$this->db->query($sql);
		$result->setFetchMode(PDO::FETCH_ASSOC);
		return $result->fetchAll();
	}
function show_my_factor($factor_id){
    $sql="SELECT purchased.id,purchased.item_id,purchased.num,purchased.price,items.name
		FROM purchased INNER JOIN items ON items.id=purchased.item_id where factor_id=$factor_id";
		//$sql="SELECT purchased.id, items.name, factors.code, factors.status, purchased.user_id
		//FROM purchased,factors and factors INNER JOIN items ON purchased.item_id=items.id WHERE user_id=$user_id ORDER BY id DESC";// LIMIT $limit ";//
		$result=$this->db->query($sql);
		$result->setFetchMode(PDO::FETCH_ASSOC);
		return $result->fetchAll();
	}
        function get_menu(){
            $result=$this->db->select("SELECT * FROM menu ");//,array('pa'=>0)
            return $result;
        }
        function add_menu(){
            $this->db->insert('menu',array('parent'=>'0'));
        }
        function change_menu($post){
            $this->db->update("menu",array('menu'=>$post['menu'],'href'=>$post['href'],'parent'=>$post['parent']),'id='.$post['id']);
        }
        function remove_menu($id){
		return $this->db->delete('menu',"id=$id");
	}
        function change_item_numbers($id,$num,$factor_id){
            $result=$this->db->update("purchased",array('num'=>$num),'id='.$id.' AND factor_id='.$factor_id);
		return $result;
        }


  function set_final_factor($factor_id,$address){
            $sql="SELECT num,price FROM purchased where factor_id=$factor_id";
            $result=$this->db->query($sql);
            $result->setFetchMode(PDO::FETCH_ASSOC);
            $whole_price=0;
            foreach ($result as $item){
                $whole_price+=$item['price']*$item['num'];
            }
						$timestamp = date('Y-m-d H:i:s');
            $result=$this->db->update("factors",array('factor_price'=>$whole_price,'status'=>1,'date'=>$timestamp,'address'=>$address),'id='.$factor_id);
            return $whole_price;
    }

	function delete_item($id){
		return $this->db->delete('items',"id=$id");
	}
	function add_cat(){
		$sql="INSERT INTO `category` (`cat`)
		VALUES ('');";
		$result=$this->db->query($sql);
		$sql='SELECT id FROM category ORDER BY id DESC LIMIT 1';
		$result=$this->db->query($sql);
		$result->setFetchMode(PDO::FETCH_ASSOC);
		$id=$result->fetch();
		return $id['id'];
	}
	function add_cat2($pa,$cat){
		$sql="INSERT INTO `category` (`id`, `cat`, `pa_cat`) VALUES (NULL, '$cat', '$pa');";
		$result=$this->db->query($sql);
		$id=$result->fetch();
		return $id['id'];
	}
	function delete_cat($id){
			$sql="DELETE FROM category WHERE id=$id";
			$result=$this->db->query($sql);
			return $result->rowCount();
	}
	function edit_cat($id,$cat,$pa){
			$sql="UPDATE `category` SET
			`cat` = '$cat', pa_cat='$pa' WHERE `category`.`id` = $id";
			$result=$this->db->query($sql);
			return $result->rowCount();
	}
	function show_cat($id){
		$sql="SELECT * FROM category where id=$id";
		$result=$this->db->query($sql);
		$result->setFetchMode(PDO::FETCH_ASSOC);
		return $result->fetch();
	}
	function get_all_cat(){
		$sql='SELECT * FROM category';
		$result=$this->db->query($sql);
		$result->setFetchMode(PDO::FETCH_ASSOC);
		return $result->fetchAll();
	}
	protected $arr=array();
	protected $stream='';
	function find_cat_children($id){
		$sql='SELECT * FROM category WHERE pa_cat='.$id;
		$result=$this->db->query($sql);
		$result->setFetchMode(PDO::FETCH_ASSOC);
		$r=$result->fetchAll();
		$this->stream.='<ul>';
		//echo '<ul>';
		foreach($r as $row){
			$this->arr[]=$row;

			$this->stream.='<li pa="'.$row['pa_cat'].'" li_id="'.$row['id'].'">';
			//echo '<li pa="'.$row['pa_cat'].'" li_id="'.$row['id'].'">';
			$this->stream.='<a type="button" class="btn-primary" href="edit_cat/'.$row['id'].'">'.$row['cat'].'</a>'.'<a href="delete_cat/'.$row['id'].'"> delete</a> <a href="" class="add_list_a" data-toggle="modal" data-target="#myModal" pa="'.$row['id'].'">+</a>';
			//echo $row['cat'].' <a href="" class="add_list_a" data-toggle="modal" data-target="#myModal" pa="'.$row['id'].'">+</a>';
			$this->find_cat_children($row['id']);

			$this->stream.='</li>';
			//echo '</li>';
		}
		$this->stream.='</ul>';
		//echo '</ul>';
	}
	function ss($id){
		$this->find_cat_children($id);
		return $this->stream;
	}
    function get_orders(){
		$result=$this->db->select("SELECT * FROM factors");
		return $result;
    }
	function get_order($id){
		$result=$this->db->select("SELECT * FROM purchased WHERE id=:ids",array('ids'=>$id));
		return $result;
    }
	function get_comment($id){
		$result=$this->db->select("SELECT * FROM comments WHERE id=:ids",array('ids'=>$id));
		return $result;
    }
	function edit_comment($id,$options){
		$result=$this->db->update("comments",$options,'id='.$id);
		return $result;
    }
	function delete_comment($id){
		return $this->db->delete('comments',"id=$id");
	}
	function get_users(){
		$result=$this->db->select("SELECT id, username, email, role FROM userlist");
		return $result;
    }
	function edit_user($id,$options){
		$result=$this->db->update("userlist",$options,'id='.$id);
		return $result;
    }
	function get_user($id){
		$result=$this->db->select("SELECT * FROM userlist WHERE id=:ids",array('ids'=>$id));
		return $result;
    }
    function get_profile($id){
		$result=$this->db->select("SELECT * FROM profile WHERE user_id=:ids",array('ids'=>$id));
                //print_r($result);
		return $result;
    }
    function get_my_favorites($id){
		$result=$this->db->select("SELECT items.name,favorites.item_id FROM favorites INNER JOIN items ON items.id=favorites.item_id WHERE user_id=:ids",array('ids'=>$id));
		return $result;
    }
    function get_my_comments($id){
		$result=$this->db->select("SELECT * FROM comments WHERE user_id=:ids",array('ids'=>$id));
                //print_r($result);
		return $result;
    }
   function get_comments($verified){
	   $result=$this->db->select("SELECT * FROM comments WHERE verified=:verified"
			,array('verified' =>$verified));
		return $result;

   }
}
