<?php
class Login_m extends Model
{

	function __construct(){
		parent::__construct();
	}
	public function run(){
		if(isset($_POST['username']) and isset($_POST['password']))
		{
                    echo '<br>login</br>';
			if($_POST['username']!='' and $_POST['password']!=''){
                             echo '<br>loged in</br>';
                             echo sha1($_POST['password']); 
				$sth=$this->db->select("SELECT * FROM userlist WHERE username= :username AND password= :password",
					array('username' => $_POST['username'],'password' => sha1($_POST['password'])));
					$count=count($sth);
                                        echo '<br>haha</br>';
				if($count>0){
                                    echo '<br>yes</br>';
					if($sth[0]['block']){
						echo 'blocked';
						die();
					}
                                        if(!$sth[0]['active']){
                                            echo 'active your mail from '.$sth[0]['email'];
                                            $message = "Please click on link below to active your account 1\r\n".$sth[0]['ac_url'];
                                            $message = wordwrap($message, 70, "\r\n");
                                             mail($sth[0]['email'], 'Active your account', $message);
                                            die();
                                        }
					Session::init();
					Session::set('loggedIn',true);
					Session::set('id',$sth[0]['id']);
					Session::set('username',$sth[0]['username']);
					Session::set('role',$sth[0]['role']);
					Session::set('start',time());
					echo '<pre>';
					print_r($_SESSION);
                                        print_r(getallheaders());
                                        echo session_id() ;
//					print_r($_POST);
					echo '</pre><br>';
					header('location: ../cp/');
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