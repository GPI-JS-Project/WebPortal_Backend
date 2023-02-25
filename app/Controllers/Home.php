<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;
use App\Models\ModelInbox;

class Home extends BaseController
{
	use ResponseTrait;
	function __construct()
	{
		$this->model = new ModelInbox();
	}
	 
	public function index()
	{
 		$data = [
			"name" => "GPI 'Jalan Suci'",
			"web" => "gpijalansuci.org",
			"description" => "News Web Portal to introduce the church to the world.",
			"version" => "v1.0.1"
		];
		return $this->respond($data, 200);
	} 
}
