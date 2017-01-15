<?php
class ControllerPanel extends Controller 
{
	function __construct(){
		Session::init();
		$logged=Session::get('loggedIn');
		if($logged==false || Session::timeout()){
			Session::destroy();
			header('location: ../login');
			exit;
		}
	}
	/*public function model ($model){
		require_once '../app/models/'.$model.'.php';
		return new $model();
	}*/
	public function view($view,$data=[],$secure=false){
		if($secure){
			$logged=Session::get('role');
			if($logged!='admin'){
				/*Session::destroy();
				header('location: ../login');
				exit;*/
				
			}else{
				require_once 'app/views/'.$view.'.php';
			}
			
		}else{
			require_once 'app/views/'.$view.'.php';
		}
		
	}
}