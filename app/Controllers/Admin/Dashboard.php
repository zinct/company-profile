<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Dashboard extends BaseController
{
	public function index()
	{
		$userModel = new UserModel();
		$data = [
			'title' => 'Dashboard',
			'usersCount' => $userModel->countAllResults(),
		];
        return view('admin/pages/dashboard', $data);		
	}
}
