<?php 
class Login extends CI_Model {

    function __construct(){
	   parent::__construct();
    }

######  Attribute  ###### 
 
    var $Username ; ######  ���������ҹ�к�  ######
    var $Password ; ######  ���ʼ�ҹ�����ҹ�к�  ######
    var $memberStatus ; ######  ʶҹкѭ��  ######
###### End Attribute  ###### 

###################################### GET SET ######################################

 

 ###### SET : $Username ######
    function setUsername($Username){
        $this->Username = $Username; 
     }
###### End SET : $Username ###### 


###### GET : $Username ######
    function getUsername(){
        return $this->Username; 
     }
###### End GET : $Username ###### 


 ###### SET : $Password ######
    function setPassword($Password){
        $this->Password = $Password; 
     }
###### End SET : $Password ###### 


###### GET : $Password ######
    function getPassword(){
        return $this->Password; 
     }
###### End GET : $Password ###### 


 ###### SET : $Status ######
    function setStatus($Status){
        $this->Status = $Status; 
     }
###### End SET : $Status ###### 


###### GET : $Status ######
    function getStatus(){
        return $this->rStatus; 
     }
###### End GET : $memberStatus ###### 

###################################### End GET SET ######################################



######################## function login #############################
function login()
 {
   $this -> db -> select('*');  						###########
   $this -> db -> from('member'); 						 ########### �礢������ DB 
   $this -> db -> where('username', $this->getMemberUsername()); ###########
   $this -> db -> where('password', md5($this->getMemberPassword())); ###########
   $this -> db -> limit(1); ############## �ӡѴ���׹����� record ����

   $query = $this -> db -> get(); ##############  ��觴֧�����ŵ�����͹�

   if($query -> num_rows() == 1)  ############  ������բ����� 1 record 
   {
     return $query->result(); ############# �觤�ҷ��֧���Ѻ
   }
   else ########### ��������ç������͹�
   {
		  return FALSE;  ############# �觤�� FALSE ��Ѻ

   }
 }
 ######################## end function login #############################


}
?>