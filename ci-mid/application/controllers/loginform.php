<?php
class LoginForm extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('form_validation');
	}
	function index()
	{
		$this->load->view('login');
	}
	function validate()
	{
		

		$this->form_validation->set_rules('usname', 'USER', 'alpha|min_length[3]|max_length[8]');
		$this->form_validation->set_rules('email', 'E-mail', 'valid_email');
		if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('login');
                }
                else
                {
                	echo "ok";
                }
	}
}
?>