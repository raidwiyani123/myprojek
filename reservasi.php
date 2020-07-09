<?php defined('BASEPATH') OR exid('No direct script access allowed');

class reservasi extends CI_Model
{
    private $_table = "reservasi";

    public $RSV_ID;
    public $TM_ID;
    public $KM_ID;
    public $TGL_CHECKIN;
    public $TGL_CHECKOUT;
    public $TGL_PESAN;
    public $LAMA_MENGINAP;


  
  
    

    public function rules()
    {
        return [ 
            ['field' => 'RSV_ID',
            'label' => 'RSV_ID',
            'rules' => 'required'],

            ['field' => 'TM_ID',
            'label' => 'TM_ID',
            'rules' => 'required'],

            ['field' => 'KM_ID',
            'label' => 'KM_ID',
            'rules' => 'required'],

            ['field' => 'TGL_CHECKIN',
            'label' => 'TGL_CHECKIN',
            'rules' => 'required'],

            ['field' => 'TGL_CHECKOUT',
            'label' => 'TGL_CHECKOUT',
            'rules' => 'required'],

            ['field' => 'TGL_PESAN',
            'label' => 'TGL_PESAN',
            'rules' => 'required'],

            
            ['field' => 'LAMA_MENGINAP',
            'label' => 'LAMA_MENGINAP',
            'rules' => 'required'],

           
            
        ];

        
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ['RSV_ID' => $id])->row(); 
    }
    public function save()
    {
        $post = $this->input->post();
        $this->RSV_ID = $post["RSV_ID"];
        $this->TM_ID = $post["TM_ID"];
        $this->KM_ID = $post["KM_ID"];
        $this->TGL_CHECKIN = $post["TGL_CHECKIN"];
        $this->TGL_CHECKOUT = $post["TGL_CHECKOUT"];
        $this->TGL_PESAN = $post["TGL_PESAN"];
        $this->LAMA_MENGINAP = $post["LAMA_MENGINAP"];
       
      
        return $this->db->insert($this->_table, $this);

    }

    public function update()
    {
        $post = $this->input->post();
        $this->RSV_ID = $post["RSV_ID"];
        $this->TM_ID = $post["TM_ID"];
        $this->KM_ID = $post["KM_ID"];
        $this->TGL_CHECKIN = $post["TGL_CHECKIN"];
        $this->TGL_CHECKOUT = $post["TGL_CHECKOUT"];
        $this->TGL_PESAN = $post["TGL_PESAN"];
        $this->LAMA_MENGINAP = $post["LAMA_MENGINAP"];
       
        return $this->db->update($this->_table, $this, array ('RSV_ID' => $post['RSV_ID']));

    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("RSV_ID" => $id));
    }

}