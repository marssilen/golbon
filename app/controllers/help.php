<?php
class Help extends Controller
{
    function __construct()
    {
    }

    public function index()
	{
        $this->view('help/index',[]);
	}
}
