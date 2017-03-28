<?php
class Cp extends ControllerPanel
{
	function logout(){
		Session::destroy();
		header('location: ../login');
		exit;
	}
	public function index(){
		$this->view('cp/favorites',[],false);
	}
	public function items($pageno=1)
	{
		$numrows=$this->formModel->count();
		$rows_per_page = 5;
    $pages= ceil($numrows/$rows_per_page);
    $pageno = (int)$pageno;
    if ($pageno > $pages) {
    $pageno = $pages;
    } // if
    if ($pageno < 1) {
    $pageno = 1;
    }
		$data=$this->formModel->get_all($pageno,$rows_per_page);
		$this->view('cp/index',['data'=>$data,'pages'=>$pages,'current_page'=>$pageno],true);
	}
	public function search_item($page=0)
	{
		if(isset($_POST['search'])){
			$search=$_POST['search'];
			$pages=1;
		/*$page_limit=20;
		$count=$this->formModel->count_search_item($search);
		$pages=(int)($count/$page_limit);
		if($this->formModel->count()%$page_limit!=0){
			$pages++;
		}

		if($page==0){
			$page=$pages;
		}

		$id=$page*$page_limit;
		echo $id.' ';
		echo $count;*/
		$data=$this->formModel->search_item($search);//,$id,$page_limit
		//print_r($data);
		$this->view('cp/index',['data'=>$data,'pages'=>$pages,'current_page'=>$page],true);
		}
	}

	function add_item(){
		$id=$this->formModel->add_new();
		header("Location: ".URL."cp/edit_item/$id");

	}
	function delete_item($id=''){
		$data=$this->formModel->delete_item($id);
		header("Location: ".URL."cp");
	}
	function delete_cat($id=''){
		$data=$this->formModel->delete_cat($id);
		header("Location: '.URL.'show_cat");
	}
	function add_cat(){
		$id=$this->formModel->add_cat();
		header("Location: show_cat");

	}
	function edit_cat($id){
		if(isset($_POST['cat_change'])){
			$this->formModel->edit_cat($_POST['id'],$_POST['cat'],$_POST['pa']);
			header("Location: ../show_cat");
		}
		$data=$this->formModel->show_cat($id);
		$this->view('cp/edit_cat',$data,true);

	}
	function my_orders(){
		$user_id= Session::get('id');
		$data=$this->formModel->get_my_orders($user_id);
		$this->view('cp/my_orders',$data);
	}
  function factor_show($factor_id){
		//$user_id= Session::get('id');
// check table ,userid
		if($this->formModel->check_user('factors',$factor_id,'id')){
			$req=array('pay');
			$data=$this->formModel->show_my_factor($factor_id);
			$this->view('cp/show_factor',$data);
		}else{
			header('location:'.URL.'cp');
		}

	}

	function factor_review(){


		//$user_id= Session::get('id');
		$factor_id= $this->formModel->get_factor();
    // print_r($_POST);
    $req=array('sel');
    //item hay sel vojood dashte bashad
    if(form::check($_POST, $req)){
    // echo ' validate <br>';
    foreach($_POST['sel'] as $item=>$value){
	    // echo ' '.$item.' '.$value.'<br>';
	    $this->formModel->change_item_numbers($item,$value,$factor_id);
	    }
    }
		if (form::check($_POST, array('pay'))){
			echo 'pay now';
			echo $_POST['address'];
			$price=$this->formModel->set_final_factor($factor_id,$_POST['address']);
			die();
    }

    $data=$this->formModel->show_my_factor($factor_id);
		$this->view('cp/review_factor',$data);
	}
	function show_cat($id=0){
		if(isset($_POST['add_row'])){
			$this->formModel->add_cat2($_POST['pa'],$_POST['cat']);
		}
		if(isset($_POST['add_list'])){
			$this->formModel->add_cat2($_POST['pa_cat'],$_POST['cat']);
		}

		$data=$this->formModel->ss($id);

		$this->view('cp/cat',$data,true);

	}

function shipping(){
	//$data=$this->formModel->show_my_factor($factor_id);
	$data=array();
	$this->view('cp/shipping',$data);
}
function add_address(){
	$req=array('name','c-phone','s-phone','province','city','address','postal-code','submit');
	if(form::check($_POST, $req,TRUE)){
		// if(form::check_type('siiiisis',$_POST)){
		$user_id= Session::get('id');
		$this->formModel->add_address($user_id,$_POST);
		// }
	}else {
		echo "no";
	}
	$data=array();
	$this->view('cp/address_add',$data);
}
function address(){
	$data=$this->formModel->get_address();
	print_r($data);
	$this->view('cp/my_address',$data);
}
function address_detail($id){
	// validate id
	$data=$this->formModel->get_address_detail($id);
	print_r($data);
	$this->view('cp/address_detail',$data);
}
function purchased(){
    $data=$this->formModel->get_orders();
    $this->view('cp/purchased',$data,true);
}
        function menu(){
            $req=array('id','menu','parent','href','submit');
            if(form::check($_POST, $req,TRUE)){
                if(form::check_type('isiss',$_POST)){
                   $this->formModel->change_menu($_POST);
                }
            }
            $insert=array('id','submit');
            if(form::check($_POST, $insert,TRUE)){
                if(form::check_type('is',$_POST)){
                  $this->formModel->remove_menu($_POST['id']);
                }
            }
            $insert=array('submit');
            if(form::check($_POST, $insert,TRUE)){
                if(form::check_type('s',$_POST)){
                  $this->formModel->add_menu();
                }
            }
            $data=$this->formModel->get_menu();
            $this->view('cp/menu',$data,true);
        }
	function get_users(){
            $data=$this->formModel->get_users();
            $this->view('cp/users_list',$data,true);
        }
		function edit_user($id){

			if(isset($id)){

				if(isset($_POST['sub']) and $_POST['sub']=='submit'){
					//print_r($_POST);
					$this->formModel->edit_user($id,array('password'=>htmlentities($_POST['pass']),'email'=>htmlentities($_POST['email']),
					'address'=>htmlentities($_POST['add']),'phone'=>htmlentities($_POST['tel']),'role'=>htmlentities($_POST['role']),
					'block'=>htmlentities($_POST['block'])));
				}
			$data=$this->formModel->get_user($id);
			//print_r($data);
			if(isset($data[0])){
				$data=$data[0];
				$this->view('cp/edit_user',$data,true);
			}

			}
		}
		function edit_order($id){

			if(isset($id)){

				if(isset($_POST['sub']) and $_POST['sub']=='submit'){
					//print_r($_POST);
					/*$this->formModel->edit_user($id,array('password'=>htmlentities($_POST['pass']),'email'=>htmlentities($_POST['email']),
					'address'=>htmlentities($_POST['add']),'phone'=>htmlentities($_POST['tel']),'role'=>htmlentities($_POST['role']),
					'block'=>htmlentities($_POST['block'])));*/
				}
			$data=$this->formModel->get_order($id);
			//print_r($data);
			if(isset($data[0])){
				$data=$data[0];
				$this->view('cp/edit_order',$data,true);
			}

			}
		}
		function comments($verified=false){
			if($verified){
				$verified=1;
			}else{
				$verified=0;
			}
            $data=$this->formModel->get_comments($verified);
            $this->view('cp/comments',$data,true);
        }
		function edit_comment($id){
			if(isset($id)){

				if(isset($_POST['sub']) and $_POST['sub']=='submit'){
					$this->formModel->edit_comment($id,array('comment'=>htmlentities($_POST['comment']),'verified'=>htmlentities($_POST['verified'])));
				}elseif(isset($_POST['sub']) and $_POST['sub']=='delete'){
					$this->formModel->delete_comment($id);
					header('location:'.URL.'cp/comments/'.$_POST['verified']);
				}
			$data=$this->formModel->get_comment($id);
			//print_r($data);
			if(isset($data[0])){
				$data=$data[0];
				$this->view('cp/edit_comment',$data,true);
			}

			}
        }
        function profile(){
            $user_id= Session::get('id');
            $data=$this->formModel->get_profile($user_id);
            $this->view('cp/profile',$data);
        }
        function my_comments(){
            $user_id= Session::get('id');
            $data=$this->formModel->get_my_comments($user_id);
            $this->view('cp/my_comments',$data);
        }
        function my_favorites(){
            $user_id= Session::get('id');
            $data=$this->formModel->get_my_favorites($user_id);
            $this->view('cp/my_favorites',$data);
        }
        function view($page,$data=array(),$secure=false){
            parent::view('cp/panel_top');
            parent::view($page,$data,$secure);
            parent::view('cp/panel_down');
        }
        function bot(){
            $web='https://api.telegram.org/bot301194378:AAGDsvj1V5elKNEFAtAyP-I_8-VvAbT8Qgk/';
            $update=  file_get_contents($web.'getUpdates');
            $updateA=  json_decode($web, TRUE);
            echo '<pre>';
            print_r($updateA);
        }
}
