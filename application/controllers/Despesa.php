<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Despesa extends Interface_Controller {

	public function create()
	{
		$stream_clean = $this->security->xss_clean($this->input->raw_input_stream);
		$request = json_decode($stream_clean);
	
		print_r($request->responsavel);
	}

	public function retrieve()
	{
			$response = 'Recebi os dados do ' . $this->input->post('u_name');

			$this->output
        ->set_status_header(200)
				->set_header('Content-Type:application/json')
				->set_header('Charset:UTF-8')
        ->set_output(json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));
	}

	public function update()
	{
			$response = 'Recebi os dados do ' . $this->input->post('u_name');

			$this->output
        ->set_status_header(200)
				->set_header('Content-Type:application/json')
				->set_header('Charset:UTF-8')
        ->set_output(json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));
	}

	public function delete()
	{
			$response = 'Recebi os dados do ' . $this->input->post('u_name');

			$this->output
        ->set_status_header(200)
				->set_header('Content-Type:application/json')
				->set_header('Charset:UTF-8')
        ->set_output(json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));
	}
}