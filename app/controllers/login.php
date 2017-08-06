<?php
class Login extends Controller
{
	public function index($name='')
	{
		$this->view('login/index');
	}
	public function run($name=0)
	{
		if(Form::chpost('username') && !Form::chpost('password') && !Form::chpost('cpassword')){
			//check if there is any user with this username
			if($this->formModel->user_exists($_POST['username'])){
				echo '{ "st": "pass" ,"name":"'.$name.'"}';
			}else{
				echo '{ "st": "nouser" ,"name":"'.$name.'"}';
			}

		}elseif (Form::chpost('username') && Form::chpost('password')) {
			// signin
			$this->signin($_POST['username'],$_POST['password'],$name);
		}elseif (Form::chpost('username') && Form::chpost('cpassword')&& Form::chpost('cpassword1')) {
			if($_POST['cpassword']==$_POST['cpassword1']){
					// signup
					$this->formModel->userInsert($_POST['username'],$_POST['cpassword']);
					$this->signin($_POST['username'],$_POST['cpassword'],$name);
			}else {
				// passwords do not match
				echo '{ "st": "passnotmatch" ,"name":"'.$name.'"}';
			}
		}
	}
	private function signin($username,$password,$name){
		if($this->formModel->signin($username,$password)){
			echo '{ "st": "logged" ,"name":"'.$name.'"}';
		}else{
			echo '{ "st": "wrongpassword" ,"name":"'.$name.'"}';
		}
	}
}
