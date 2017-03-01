<?php
class Login extends Controller
{
	public function index($name='')
	{
		$this->view('login/index');
	}
	public function run($name='')
	{
		if($this->formModel->run()){
			//  ;

			echo '{ "st": "logged" }';
		};
	}

}
