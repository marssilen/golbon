<?php
class Cp extends ControllerPanel
{
	function view($page,$data=array(),$secure=false){
        $this->page=$page;
        parent::view('cp/panel_master',$data,$secure);
	}
function logout(){
Session::destroy();
header('location: '.URL.'login');
exit;
}
public function index(){
$this->my_orders();
}
public function items($pageno=1)
{
	if(isAdmin()){
		$rows_per_page=3;
		$data=$this->formModel->get_all($pageno,$rows_per_page);
		$pview=$this->formModel->get_pview('items',$pageno,$rows_per_page);
		$this->view('cp/index',['data'=>$data,'pview'=>$pview],true);
	}
}
public function pm(){
    $this->view('cp/pm',[]);
}
public function search_item($pageno=0)
{
	if(isAdmin()){
		if(isset($_POST['search'])){
		$search=$_POST['search'];

		$pview='';
		$data=$this->formModel->search_item($search);
		$this->view('cp/index',['data'=>$data,'pview'=>$pview],true);
		}
	}
}

function add_item(){
	if(isAdmin()){
		$id=$this->formModel->add_new();
		header("Location: ".URL."edit_item/$id");
	}
}
function delete_item($id=''){
	if(isAdmin()){
		$data=$this->formModel->delete_item($id);
		header("Location: ".URL."cp/items/");
	}
}
function delete_cat($id=''){
	if(isAdmin()){
		$data=$this->formModel->delete_cat($id);
		header("Location: '.URL.'show_cat");
	}
}
function add_cat(){
	if(isAdmin()){
		$id=$this->formModel->add_cat();
		header("Location: '.URL.'show_cat");
	}
}
function edit_cat($id){
	if(isAdmin()){
		$req= array('cat_change','id','cat','pa');
		if(form::check($_POST,$req)){
		$this->formModel->edit_cat($_POST['id'],$_POST['cat'],$_POST['pa']);
		header('Location: '.URL.'cp/show_cat');
		}
		$data=$this->formModel->show_cat($id);
		$this->view('cp/edit_cat',$data,true);
	}
}




function show_cat($id=0){
	if(isAdmin()){
		if(isset($_POST['add_row'])){
		$this->formModel->add_cat2($_POST['pa'],$_POST['cat']);
		}
		if(isset($_POST['add_list'])){
		$this->formModel->add_cat2($_POST['pa_cat'],$_POST['cat']);
		}
		$data=$this->formModel->ss($id);
		$this->view('cp/cat',$data,true);
}
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
function purchased($page=1){
$page=(int)$page;
$data=$this->formModel->get_orders($page);
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
function get_users($page=1){
$page=(int)$page;
$pagelimit=2;
$data=$this->formModel->get_users($page,$pagelimit);
$pview=$this->formModel->get_pview('userlist',$page,$pagelimit);
$this->view('cp/users_list',['data'=>$data,'pview'=>$pview],true);
}
function edit_user($id){

if(isset($id)){

if(isset($_POST['sub']) and $_POST['sub']=='submit'){
//print_r($_POST);
$this->formModel->edit_user($id,array('password'=>htmlentities($_POST['pass']),'email'=>htmlentities($_POST['email']),
'phone'=>htmlentities($_POST['tel']),'role'=>htmlentities($_POST['role']),
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
function edit_order($factor_id){
	if(isset($factor_id)){
		$req=array('status','submit');
		if(form::check($_POST,$req,true)){
			$this->formModel->set_status($_POST,$factor_id);
		}
		$data=array('items'=>$this->formModel->show_factor($factor_id),'factor'=>$this->formModel->show_factor_main($factor_id));
		$this->view('cp/edit_order',$data);
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
function factor_show($factor_id){
if($this->formModel->check_user('factors',$factor_id,'id')){
	$data=array('items'=>$this->formModel->show_factor($factor_id),'factor'=>$this->formModel->show_factor_main($factor_id));
// $data=$this->formModel->show_factor($factor_id);
$this->view('cp/show_factor',$data);
}else{
header('location:'.URL.'cp');
}

}

function factor_review(){
	$factor_id= $this->formModel->get_factor();
	$req=array('sel');
	//item hay sel vojood dashte bashad
	if(form::check($_POST, $req)){
	foreach($_POST['sel'] as $item=>$value){
	$this->formModel->change_item_numbers($item,$value,$factor_id);
	}
	}
	if (form::check($_POST, array('pay'))){
        $this->view('cp/factor_paid',[]);
	$price=$this->formModel->set_final_factor($factor_id,$_POST['address']);
	die();
	}
	$data=$this->formModel->show_factor($factor_id);
	$this->view('cp/review_factor',$data);
}
function remove_from_list($id){
	if($this->formModel->remove_from_list($id)){
	    echo 'done';
    }else{
	    echo 'failed';
    }
}
function my_orders(){
	$data=$this->formModel->get_my_orders();
	$this->view('cp/my_orders',$data);
}
function my_comments(){
$data=$this->formModel->get_my_comments();
$this->view('cp/my_comments',$data);
}
function my_favorites(){
$data=$this->formModel->get_my_favorites();
$this->view('cp/my_favorites',$data);
}
function address_remove($id){
	$this->formModel->remove_address($id);
	 header('location: '.URL.'cp/address');
}


}
