<?php defined('BASEPATH') OR exid('No direct script access allowed');

class tamu extends CI_Model
{
    private $_table = "tamu";

    public $TM_ID;
    public $PG_ID;
    public $TM_NAMA;
    public $TM_ALAMAT;
    public $TM_JK;
    public $TM_NOTLP;
    

    public function rules()
    {
        return [ 
            ['field' => 'TM_ID',
            'label' => 'TM_ID',
            'rules' => 'required'],

            ['field' => 'PG_ID',
            'label' => 'PG_ID',
            'rules' => 'required'],

            ['field' => 'TM_NAMA',
            'label' => 'TM_NAMA',
            'rules' => 'required'],

            ['field' => 'TM_ALAMAT',
            'label' => 'TM_ALAMAT',
            'rules' => 'required'],

            ['field' => 'TM_JK',
            'label' => 'TM_JK',
            'rules' => 'required'],

            ['field' => 'TM_NOTLP',
            'label' => 'TM_NOTLP',
            'rules' => 'required'],

           
            
        ];

        
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ['TM_ID' => $id])->row(); 
    }
    public function save()
    {
        $post = $this->input->post();
        $this->TM_ID = $post["TM_ID"];
        $this->PG_ID = $post["PG_ID"];
        $this->TM_NAMA = $post["TM_NAMA"];
        $this->TM_ALAMAT = $post["TM_ALAMAT"];
        $this->TM_JK = $post["TM_JK"];
        $this->TM_NOTLP = $post["TM_NOTLP"];
      
        return $this->db->insert($this->_table, $this);

    }

    public function update()
    {
        $post = $this->input->post();
        $this->TM_ID = $post["TM_ID"];
        $this->PG_ID = $post["PG_ID"];
        $this->TM_NAMA = $post["TM_NAMA"];
        $this->TM_ALAMAT = $post["TM_ALAMAT"];
        $this->TM_JK = $post["TM_JK"];
        $this->TM_NOTLP = $post["TM_NOTLP"];
       
        return $this->db->update($this->_table, $this, array ('TM_ID' => $post['TM_ID']));

    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("TM_ID" => $id));
    }

}