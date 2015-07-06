<?php
class MemberTest extends CI_Controller
{
	public function index()
	{
		$memberId =0;
		$this->load->library('unit_test');
		$this->load->model('register');
		$this->Member->setName('backk');
		$this->Member->setLastName('doremon');
		$this->Member->setUserName('mon2535');
		$this->Member->setPassWord('abcd2535');
		//$this->Member->setStatus('admin');
		$test=$this->Member->add();
		$memberId = $test ;
		$expencted_resut ='is_int';
		$this->unit->run($test,$expencted_resut,'UT-01 :ADD Member');
##################################################
    $this->Member->setName('วิจิตรา');
    $this->Member->setLastName('บุญปั๋น');
    $this->Member->setUserName('b552531004');
    $this->Member->setPassWord('ncu18112');
    $this->Member->setStatus('admin');
    $test=$this->Member->add();
    $memberId = $test ;
    $expencted_resut ='is_int';
    $this->unit->run($test,$expencted_resut,'UT-02 :ADD Thai Member');
################################################
	$this->Member->setId($memberId);
	$test=$this->Member->delete();
	$expencted_resut=true;
		$this->unit->run($test,$expencted_resut,'UT-06 :delete member');
echo $this->unit->report();
	}
}
?>
