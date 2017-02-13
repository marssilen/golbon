<?php
class Controller
{
	protected $formModel;
	function __construct(){
		$this->formModel=$this->model(get_class($this).'_m');
		$this->is_login= $this->is_login();
	}
	public function model ($model){
		require_once 'app/models/'.$model.'.php';
		return new $model();
	}
	public function view($view,$data=[]){
		require_once 'app/views/'.$view.'.php';
	}
	function is_login(){
		Session::init();
		$logged=Session::get('loggedIn');
		if($logged==false || Session::timeout()){
			return false;
		}
		return true;
	}
}
