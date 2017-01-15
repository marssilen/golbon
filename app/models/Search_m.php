<?php
class Search_m extends Model
{

	function __construct(){
		parent::__construct();
	}
	protected $arr=array();
	function get($search){//SELECT id FROM items WHERE name LIKE 'z2' OR tag LIKE '[%ramin%]'
			$name_and_tag=$this->db->select("SELECT id,name FROM items WHERE name LIKE :search OR tag LIKE :search2 "
			,array('search' => '%' . $search . '%','search2' => '{%' . $search . '%}'));
			
			$cat_search=$this->db->select("SELECT id,cat FROM category WHERE cat LIKE :search "
			,array('search' => $search . '%'));//'%' . $search . '%'
			foreach($cat_search as $cats){
				$this->arr[]=$cats;
				$this->find_cat_children($cats['id']);
			}
			$cat_search_result=array();
			foreach($this->arr as $all){
				$new=$this->db->select("SELECT id,name FROM items WHERE cat = :id "
				,array('id' => $all['id'] ));
				foreach($new as $new2){
					$cat_search_result[]=$new2;
				}
			}
			$final=array_merge($name_and_tag,$cat_search_result);
			return $final;
			//return $name_and_tag;
	}
	
	
	protected $stream='';
	function find_cat_children($id){
		$sql='SELECT id,cat FROM category WHERE pa_cat='.$id;
		$result=$this->db->query($sql);
		$result->setFetchMode(PDO::FETCH_ASSOC);
		$r=$result->fetchAll();
		
		//echo '<ul>';
		foreach($r as $row){
			$this->arr[]=$row;
			
			
			//echo '<li pa="'.$row['pa_cat'].'" li_id="'.$row['id'].'">';
			
			//echo $row['cat'].' <a href="" class="add_list_a" data-toggle="modal" data-target="#myModal" pa="'.$row['id'].'">+</a>';
			$this->find_cat_children($row['id']);
			
			
			//echo '</li>';
		}
		
		//echo '</ul>';
	}
}