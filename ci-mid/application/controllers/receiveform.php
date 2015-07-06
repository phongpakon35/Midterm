<?php
class Receiveform extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('form_validation');
	}
	function received() {

		$data['error']='';
		
		$this->form_validation->set_rules('name', 'name', 'required|min_length[3]|max_length[12]',
			array(
				'required' => 'กรุณากรอก{field}',
				'min_length'=>'ช้อง{field}ต้องไม่น้อยกว่า 3 ตัวอักษร',
				'max_length'=>'ช่อง{field}น้อยกว่า 12'
				)
			);

		
		if ($this->form_validation->run() == FALSE)
                {
                        
                
		                       
		                        $this->load->model('Register');
		                        $this->Register->setName($this->input->post('name'));
		                        $this->Register->setEmail($this->input->post('email'));
		                        $this->Register->setUsername($this->input->post('username'));
		                        $this->Register->setPassword($this->input->post('password'));
		                        $this->Register->setRepassword($this->input->post('repassword'));
		                       
		                        $this->Register->add();

		                      
		                }
		               	$this->load->view('show',$data);
		        }
		        
		public function show()
	{
		$this->load->model('Member');
		$data['students']=$this->Member->findByAll();
		$this->load->view('show_student',$data);

	}
 	

	}

	

?>