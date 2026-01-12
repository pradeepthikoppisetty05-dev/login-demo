<?php namespace App\Controllers;

class Dashboard extends BaseController
{
	public function index()
	{
		$data=[];

        if(!session()->get('isLoggedIn')){
            return redirect()->to('/');
        }
        echo view('templates/header', $data);
        echo view('dashboard', $data);
        echo view('templates/footer', $data);
	}

	//--------------------------------------------------------------------

}