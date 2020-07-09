<?php defined('BASEPATH') OR exid('No direct script access allowed');

class pemesan extends CI_Model
{
    private $_table = "pemesan";

    public $PMSN_ID;
    public $RSV_ID;
    public $GUESS;
    


  
  
    

    public function rules()
    {
        return [ 
            ['field' => 'PMSN_ID',
            'label' => 'PMSN_ID',
            'rules' => 'required'],

            ['field' => 'RSV_ID',
            'label' => 'RSV_ID',
            'rules' => 'required'],

            ['field' => 'GUESS',
            'label' => 'GUESS',
            'rules' => 'required'],

            

           
            
        ];

        
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ['PMSN_ID' => $id])->row(); 
    }
    public function save()
    {
        $post = $this->input->post();
        $this->PMSN_ID = $post["PMSN_ID"];
        $this->RSV_ID = $post["RSV_ID"];
        $this->GUESS = $post["GUESS"];
        
        return $this->db->insert($this->_table, $this);

    }

    public function update()
    {
       
        $post = $this->input->post();
        $this->PMSN_ID = $post["PMSN_ID"];
        $this->RSV_ID = $post["RSV_ID"];
        $this->GUESS = $post["GUESS"];
       
        return $this->db->update($this->_table, $this, array ('PMSN_ID' => $post['PMSN_ID']));

    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("PMSN_ID" => $id));
    }

}