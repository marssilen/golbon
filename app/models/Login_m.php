<?php
class Login_m extends Model
{
	function __construct(){
		parent::__construct();
	}
	public function run(){
			//  echo hash('sha256',$timestamp);
		if(isset($_POST['username']) and isset($_POST['password']))
		{
			if($_POST['username']!='' and $_POST['password']!=''){
				$sth=$this->db->select("SELECT * FROM userlist WHERE username= :username AND password= :password",
					array('username' => $_POST['username'],'password' => sha1($_POST['password'])));
					$count=count($sth);
				if($count>0){
					if($sth[0]['block']){
						echo 'blocked';
						return false;
						die();
					}
          // if(!$sth[0]['active']){
          // echo 'active your mail from '.$sth[0]['email'];
          // $message = "Please click on link below to active your account 1\r\n".$sth[0]['ac_url'];
          // $message = wordwrap($message, 70, "\r\n");
          // mail($sth[0]['email'], 'Active your account', $message);
					// return false;
          // die();
          // }
					Session::init();
					Session::set('loggedIn',true);
					Session::set('id',$sth[0]['id']);
					Session::set('username',$sth[0]['username']);
					Session::set('role',$sth[0]['role']);
					Session::set('start',time());
					return true;
					// header('location: '.URL.'cp/');
                                        //ok let's change this file
					//header('location: run');
				}else{
					//header('location: ../login');
				}
			}else{
					//header('location: ../login');
				}
		}else{
					//header('location: ../login');
				}
	}

}
