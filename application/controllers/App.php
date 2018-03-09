<?php defined('BASEPATH') OR exit('No direct script access allowed');

class App extends CI_Controller {

	public function index()
	{
		$response = array('Version' => '1.0');

		$this->output
			->set_status_header(200)
			->set_header('Content-Type:application/json')
			->set_header('Charset:UTF-8')
			->set_output(json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));
	}
}
