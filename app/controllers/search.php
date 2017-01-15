<?php
class Search extends Controller 
{
	protected $formModel;
	function __construct(){
		$this->formModel=$this->model('Search_m');
	}
	public function index()
	{
		$this->view('search/index');
	}
	public function get($search='')
	{
		if(trim($search)!='')
		$data=$this->formModel->get($search);
		echo json_encode(array('records'=>$data));
	}
}