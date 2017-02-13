<?php
class Home extends Controller
{
	public function index()
	{
		$this->is_login= $this->is_login();
		$this->view('home/index',[]);
	}
	public function load_item($index=''){
		$this->view('home/load_item');
	}
}
