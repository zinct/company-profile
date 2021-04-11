<?php namespace App\Controllers\Admin\Data;

use App\Controllers\BaseController;
use App\Models\CommentModel;

class Comment extends BaseController
{
	public function index()
	{
    return view('admin/pages/data/comment/index', ['title' => 'Comments']);		
	}

	public function save()
	{
		$commentModel = new CommentModel();
		$data = [
			'name' => $this->request->getPost('name'),
			'email' => $this->request->getPost('email'),
			'phone' => $this->request->getPost('phone'),
			'company' => $this->request->getPost('company'),
			'message' => $this->request->getPost('message'),
		];
		if($commentModel->save($data)) {
			return redirect()->route('home')->with('success', 'Data berhasil ditambahkan!');
		}
		
	}
}
