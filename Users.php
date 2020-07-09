<?php 

class users extends CI_Model
{
    private $_table ="user";

    public function doLogin(){
        $post = $this->input->post();
        $this->db->where('email', $post["email"])
                 ->or_where('uname', $post["email"]);
        $user = $this->db->get($this->_table)->row();


    if($user){
        $isPasswordTrue = $post["password"]==$user->pass;
        $isAdmin = $user->role == "admin";
        echo $isPasswordTrue;
        if($isPasswordTrue && $isAdmin){
            $this->session->set_userdata(['user_logged' => $user]);
            $this->_updateLastLogin($user->user_id);
            return true;
        }
    }

    return false;
 }

public function isNotLogin(){

    return $this->session->userdata('user_logged') === null;
}
private function _updateLastlogin($user_id){
    $sql = "UPDATE {$this->_table} SET last_login=now() WHERE user_id=($user_id)";
    $this->db->query($sql); 
}
}