<?php
class Login extends Controller 
{
	protected $formModel;
	function __construct(){
		$this->formModel=$this->model('Login_m');
	}
	public function index($name='')
	{
		$this->view('login/index');
	}
	public function run($name='')
	{
		$this->formModel->run();
	}
}