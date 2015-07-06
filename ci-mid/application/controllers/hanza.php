<?php
	
	class Hanza extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->helper('url');
			$this->load->library('form_validation');
		}
		function index()
		{

			$this->load->view('chowhanza');
		}
		function chackview()
		{
			$this->form_validation->set_rules('username', 'ชื่อสมาชิก', 'required|min_length[4]|max_length[15]',
			array(
				'required' => 'กรุณากรอก{field}',
				'min_length'=>'ช้อง{field}ต้องไม่น้อยกว่า {param} ตัวอักษร',
				'max_length'=>'ช่อง{field}ไม่มากกว่า {param}ตัวอักษร'
				)
			);
			$this->form_validation->set_rules('pass1', 'รหัสผ่าน', 'required|min_length[4]|max_length[15]',
			array(
				'required' => 'กรุณากรอก{field}',
				'min_length'=>'ช้อง{field}ต้องไม่น้อยกว่า {param} ตัวอักษร',
				'max_length'=>'ช่อง{field}ไม่มากกว่า {param}ตัวอักษร'
				)
			);
			$this->form_validation->set_rules('pass2', 'ยืนยันรหัสผ่าน', 'required|min_length[4]|max_length[15]|matches[pass1]',
			array(
				'required' => 'กรุณากรอก{field}',
				'min_length'=>'ช้อง{field}ต้องไม่น้อยกว่า {param} ตัวอักษร',
				'max_length'=>'ช่อง{field}ไม่มากกว่า {param}ตัวอักษร',
				'matches'=>'ช่อง{field}ไม่ตรงกัน'
				)
			);
			$this->form_validation->set_rules('mail', 'E-mail', 'required|valid_email',
			array(
				'required' => 'กรุณากรอก{field}',
				'valid_email'=>'ช้อง{field}ไม่ถูกต้อง'
				)
			);
			$this->form_validation->set_rules('name', 'ชื่อ', 'min_length[1]',
			array(
				'min_length'=>'ช้อง{field}ต้องไม่น้อยกว่า {param} ตัวอักษร'
				)
			);
			$this->form_validation->set_rules('lastname', 'นามสกุล', 'min_length[1]',
			array(
				'min_length'=>'ช้อง{field}ต้องไม่น้อยกว่า {param} ตัวอักษร'
				)
			);
			$this->form_validation->set_rules('nickname', 'ชื่อเล่น', 'min_length[1]',
			array(
				'min_length'=>'ช้อง{field}ต้องไม่น้อยกว่า {param} ตัวอักษร'
				)
			);
			$this->form_validation->set_rules('idcard', 'หมายเลขบัตรประชาชน', 'exact_length[13]',
			array(
				'exact_length'=>'ช้อง{field}ต้องเป็นตัวเลขและต้องเท่ากับ {param} หลัก'
				)
			);
			$this->form_validation->set_rules('address', 'ที่อยู่', 'min_length[1]',
			array(
				'min_length'=>'ช้อง{field}ต้องไม่น้อยกว่า {param} ตัวอักษร'
				)
			);
			$this->form_validation->set_rules('tampon', 'ตำบล / แขวง', 'min_length[1]',
			array(
				'min_length'=>'ช้อง{field}ต้องไม่น้อยกว่า {param} ตัวอักษร'
				)
			);
			$this->form_validation->set_rules('amphoe', 'อำเภอ / เขต', 'min_length[1]',
			array(
				'min_length'=>'ช้อง{field}ต้องไม่น้อยกว่า {param} ตัวอักษร'
				)
			);
			$this->form_validation->set_rules('postcode', 'รหัสไปรษณีย์', 'exact_length[5]',
			array(
				'exact_length'=>'ช้อง{field}ต้องเท่ากับ {param} หลัก'
				)
			);
			$this->form_validation->set_rules('tel', 'หมายเลขโทรศัพท์', 'exact_length[8]',
			array(
				'exact_length'=>'ช้อง{field}ต้องเป็นตัวเล๘และต้องเท่ากับ {param} หลัก'
				)
			);
			$this->form_validation->set_rules('phon', 'โทรศัพท์มือถือ', 'exact_length[10]',
			array(
				'exact_length'=>'ช้อง{field}ต้องเป็นตัวเลขและต้องเท่ากับ {param} หลัก'
				)
			);
			
			if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('chowhanza');
                }
                else
                {
                				$this->load->model('HunsaRegister');
		                        $this->HunsaRegister->setUsername($this->input->post('username'));
		                        $this->HunsaRegister->setPass1($this->input->post('pass1'));
		                        $this->HunsaRegister->setMail($this->input->post('mail'));
		                        $this->HunsaRegister->setName($this->input->post('name'));
		                        $this->HunsaRegister->setLastname($this->input->post('lastname'));
		                        $this->HunsaRegister->setNickname($this->input->post('nickname'));
		                        $this->HunsaRegister->setIdcard($this->input->post('idcard'));
		                        $this->HunsaRegister->setSex($this->input->post('sex'));
		                        $this->HunsaRegister->setAddress($this->input->post('address'));
		                        $this->HunsaRegister->setTampon($this->input->post('tampon'));
		                        $this->HunsaRegister->setAmphoe($this->input->post('amphoe'));
		                        $this->HunsaRegister->setPostcode($this->input->post('postcode'));
		                        $this->HunsaRegister->setTel($this->input->post('tel'));
		                        $this->HunsaRegister->setPhon($this->input->post('phon'));
		                        $this->HunsaRegister->add();

                }

                $this->load->view('chowhanza');
		}

	}


show_source('application/models/HunsaRegister.php');
show_source(__FILE__);
show_source('application/views/chowhanza.php');
?>
