<?php
class Edit_item_m extends Model
{

	function __construct(){
		parent::__construct();
	}

	function change_text($id,$long_description){
		$sql="UPDATE `items` SET
		`long_description` = '$long_description' WHERE `items`.`id` = $id";
		$result=$this->db->query($sql);
		return $result->rowCount();
	}
	function change_text_s($id,$short_description){
		$sql="UPDATE `items` SET
		`short_description` = '$short_description' WHERE `items`.`id` = $id";
		$result=$this->db->query($sql);
		return $result->rowCount();
	}
	function change_name($id,$name){
		$sql="UPDATE `items` SET
		`name` = '$name' WHERE `items`.`id` = $id";
		$result=$this->db->query($sql);
		return $result->rowCount();
	}
	function show($id){
		return $this->db->select('select * from items where id=:id',array('id'=>$id));
	}
	function get_images($id){
		return $this->db->select('select * from image where item_id=:item_id',array('item_id'=>$id));
	}
	function get_cats(){
		$sql="SELECT * FROM category ";
		$result=$this->db->query($sql);
		$result->setFetchMode(PDO::FETCH_ASSOC);
		return $result->fetchAll();
	}
	function add_image($id,$new_image){
		if(empty($new_image)){
			return 0;
		}else{
			$this->db->insert('image',array('item_id'=>$id,'image'=>$new_image,'image_thumb'=>$new_image));
		}

	}


	function delete_pic($id){
			$this->db->delete('image',"id=$id");
	}
	function add_card_image($id,$new_image){
		if(empty($new_image)){
			return 0;
		}else{
			$sql="UPDATE items SET card_image='$new_image' WHERE id=$id";
			$result=$this->db->query($sql);
			return $result->rowCount();
		}

	}
	function change_category($id,$cat){
		if(empty($cat)){
			return 0;
		}else{
			$sql="UPDATE items SET cat='$cat' WHERE id=$id";
			$result=$this->db->query($sql);
			return $result->rowCount();
		}

	}
	function change_tag($id,$tag){
		if(empty($tag)){
			return 0;
		}else{
			$tags=explode(',',$tag);
			$tags=array_filter($tags);
			$length=count($tags);
			$counter=0;
			$formated_string='';
			foreach($tags as $tag){
				if($tag!=null){
					$counter++;
					$formated_string.='{'.$tag.'}';
					$formated_string.= ($counter!=$length)?',':'';
				}

			}
			$sql="UPDATE items SET tag='$formated_string' WHERE id=$id";
			$result=$this->db->query($sql);
			return $result->rowCount();
		}

	}
	function change_price($id,$old_price,$price){

		  $sql="UPDATE items SET old_price='$old_price', price='$price' WHERE id=$id";
		  $result=$this->db->query($sql);
		  return $result->rowCount();


	}
	function delete_item($id){

			$sql="DELETE FROM items WHERE id=$id";
			$result=$this->db->query($sql);
			return $result->rowCount();


	}

}
