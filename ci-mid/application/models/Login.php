<?php 
class Login extends CI_Model {

    function __construct(){
	   parent::__construct();
    }

######  Attribute  ###### 
 
    var $Username ; ######  ชื่อเข้าใช้งานระบบ  ######
    var $Password ; ######  รหัสผ่านเข้าใช้งานระบบ  ######
    var $memberStatus ; ######  สถานะบัญชี  ######
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
   $this -> db -> from('member'); 						 ########### เช็คข้อมูลใน DB 
   $this -> db -> where('username', $this->getMemberUsername()); ###########
   $this -> db -> where('password', md5($this->getMemberPassword())); ###########
   $this -> db -> limit(1); ############## ตำกัดให้คืนค่าแค่ record เดียว

   $query = $this -> db -> get(); ##############  สั่งดึงข้อมูลตามเงื่อนไข

   if($query -> num_rows() == 1)  ############  เมื่อมีข้อมูล 1 record 
   {
     return $query->result(); ############# ส่งค้าที่ดึงได้กลับ
   }
   else ########### เมื่อไม่ตรงตามเงื่อนไข
   {
		  return FALSE;  ############# ส่งค้า FALSE กลับ

   }
 }
 ######################## end function login #############################


}
?>