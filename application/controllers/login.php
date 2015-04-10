<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 *
	 */
	public function __construct()
	{
	    parent::__construct();
	    //$this->load->model('usermanager');
	    $this->load->helper('url');
	    //$this->load->database('default');
	    $this->load->library( 'session' );
	    $this->load->library( 'MY_Session' );
	    $this->load->library( 'encrypt' );
	    $this->load->helper('form');
	    $this->load->library('form_validation');
	}
	public function index()
	{
		$nombre = $this->session->userdata('nombre');
		if($nombre){
			redirect('login/panel');
		}

		$this->form_validation->set_rules('username', 'Usuario', 'required');
		$this->form_validation->set_rules('password', 'Contraseña', 'required');
		if($this->form_validation->run() == true){
				$name = $this->input->post('username');
				$pass = $this->encrypt->sha1($this->input->post('password'));
				$this->session->set_userdata('nombre',$name);
				redirect("login/panel");
		}
		$this->load->view('login/login');
	}
	public function panel()
	{
		$nombre = $this->session->userdata('nombre');
		if(!$nombre){
			redirect('login');
		}
			$data['usuario'] = $this->session->userdata('nombre');
			$this->load->view('login/ok',$data);
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
