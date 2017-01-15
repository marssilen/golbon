<?php
class Uf extends Controller 
{
	public function index($name='')
	{
		$user=$this->model('Uf_m');
		$user->name= $name;
		$this->view('uf/index',['name'=>$user->name]);
	}
}