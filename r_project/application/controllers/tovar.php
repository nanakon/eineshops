<?php
class Tovar extends CI_Controller {
  public function __construct(){
		parent::__construct();
		$this->load->model('tovar_model');
	}
  public function index()
	{
		$data['tovar'] = $this->tovar_model->get_tovar();
    $data['title'] = 'Zobrazenie tovaru - ';

	 $this->load->view('templates/header');
	 $this->load->view('pages/tovar_page', $data);
	 $this->load->view('templates/footer');
	}
}

?>