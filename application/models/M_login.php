<?php
class M_login extends CI_Model{

   public function login($username,$password)
   {
       $this->db->select('*');
       $this->db->from('tbl_login');
       $this->db->where(array(
           'username' =>$username,
           'password' =>$password,
       ));
       return $this->db->get()->row();
   }

}
