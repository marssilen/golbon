<?php
class Edit_item_m extends Model
{

	function __construct(){
		parent::__construct();
	}
	function count(){
		$sql='SELECT * FROM items';
		$result=$this->db->query($sql);
		return $result->rowCount();
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
		$sql="SELECT * FROM items WHERE id=$id";
		$result=$this->db->query($sql);
		$result->setFetchMode(PDO::FETCH_ASSOC);
		return $result->fetch();
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
                    //$images=json_decode();
//                    echo '<pre>';
                    $images=$this->db->select("SELECT image FROM items WHERE id= :item_id LIMIT 1",array('item_id'=>$id));
                    $json=  json_decode($images[0]['image']);
                    print_r($json);
                    if(!empty($json)){
//                        echo 'n';
                        array_push($json,$new_image);
                    }
                    else {
//                        echo 'y';
                        $json=array($new_image);
                        
                    }
                    $this->db->update('items',array('image'=>  json_encode($json)),"id=$id");
//			$sql="UPDATE items SET image=CONCAT(image,',$new_image') WHERE id=$id";
//			$result=$this->db->query($sql);
//			return $result->rowCount();
		}
		
	}
	
	
	function delete_pic($id,$name){
			$sql="SELECT image FROM items WHERE id=$id";
			$result=$this->db->query($sql);
			$result->setFetchMode(PDO::FETCH_ASSOC);
			$imageq=$result->fetch();
			$images=  json_decode($imageq['image']);
                        $i=0;
                        foreach ($images as $image){
                            if($name==$image){
                                unset($images[$i]);
                                break;
                            }
                            $i++;
                        }
			$new_images=  json_encode(array_values($images));
			$sql="UPDATE items SET image='$new_images' WHERE id=$id";
			$result=$this->db->query($sql);
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