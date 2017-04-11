<?php
class Login extends Controller
{
	public function index($name='')
	{
		$this->view('login/index');
	}
	public function run($name=0)
	{
		if($this->formModel->run()){
			echo '{ "st": "logged" ,"name":"'.$name.'"}';
			if($name==1){
				header('location: '.URL.'cp/');
			}
		}else{
			echo '{ "st": "failed" ,"name":"'.$name.'"}';
			if($name==1){
				header('location: '.URL.'login/');
			}
		}
	}
}
