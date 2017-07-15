<?php
class Signup_m extends Model
{


	function __construct(){
		parent::__construct();
		/*$sql='SELECT * FROM items';
		$result=$this->db->query($sql);
		echo $result->rowCount();*/
	}
	/*public function userList(){
		$id=1;
		return $this->db->select("SELECT * FROM userlist WHERE id= :id",array('id' => $id));
	}*/
  public function active_mail($ac_url){
		$r=$this->db->select("SELECT id,ac_url FROM userlist WHERE ac_url= :ac_url",array('ac_url' => $ac_url));
		if(count($r)>0){
			$id=$r[0]['id'];
			$rr=$this->db->update('userlist',array('active'=>true),"`id`=$id");
			return true;
		}
	}
	public function userInsert($username,$password,$email,$phone){
            $ac_url=md5(rand(0,9999999).md5($username));
		$username=strtolower($username);
		$this->db->insert('userlist',array('username'=>$username,'password'=>$password,'email'=>$email
		,'phone'=>$phone,'ac_url'=>$ac_url));
                // $message = "Please click on link below to active your account 1\r\n".$ac_url;
                // $message = wordwrap($message, 70, "\r\n");
                // mail($email, 'Active your account', $message);
	}

}
