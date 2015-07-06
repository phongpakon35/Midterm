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
		$data['file']['file_name']='';

		$this->form_validation->set_rules('name', 'name', 'required|min_length[3]|max_length[12]',
			array(
				'required' => 'กรุณากรอก{field}',
				'min_length'=>'ช้อง{field}ต้องไม่น้อยกว่า 3 ตัวอักษร'
				'max_length'=>'ช่อง{field}น้อยกว่า 12'
				)
			);

		$this->load->library('upload', $config);
		if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('show',$data);
                }
                else
                {
                        

				 if ( ! $this->upload->do_upload('picture'))
		                {
		                        $data['error'] = $this->upload->display_errors();
		                        
		                        
		                }
		                else
		                {
		                        $data['file'] = $this->upload->data();
		                        $this->load->model('Student');
		                        $this->Student->setName($this->input->post('name'));
		                        $this->Student->setPicture('uploads/'.$data['file']['file_name']);
		                        $this->Student->add();

		                      
		                }
		               	$this->load->view('show',$data);
		        }


	}
	public function show()
	{
		$this->load->model('Student');
		$data['students'] = $this->Student->findAll();
		$this->load->view('show_student',$data); 
	}
}
?>