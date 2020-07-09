<?php defined('BASEPATH') OR exid('No direct script access allowed');

class pegawai extends CI_Model
{
    private $_table = "pegawai";

    public $PG_ID;
    public $PG_NAMA;
    public $PG_JENISKELAMIN;
    public $PG_ALAMAT;
    public $PG_TLP;
  
    

    public function rules()
    {
        return [ 
            ['field' => 'PG_ID',
            'label' => 'PG_ID',
            'rules' => 'required'],

            ['field' => 'PG_NAMA',
            'label' => 'PG_NAMA',
            'rules' => 'required'],

            ['field' => 'PG_JENISKELAMIN',
            'label' => 'PG_JENISKELAMIN',
            'rules' => 'required'],

            ['field' => 'PG_ALAMAT',
            'label' => 'PG_ALAMAT',
            'rules' => 'required'],

            ['field' => 'PG_TLP',
            'label' => 'PG_TLP',
            'rules' => 'required'],

           
            
        ];

        
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ['PG_ID' => $id])->row(); 
    }
    public function save()
    {
        $post = $this->input->post();
        $this->PG_ID = $post["PG_ID"];
        $this->PG_NAMA = $post["PG_NAMA"];
        $this->PG_JENISKELAMIN = $post["PG_JENISKELAMIN"];
        $this->PG_ALAMAT = $post["PG_ALAMAT"];
        $this->PG_TLP = $post["PG_TLP"];
       
      
        return $this->db->insert($this->_table, $this);

    }

    public function update()
    {
        $post = $this->input->post();
        $this->PG_ID = $post["PG_ID"];
        $this->PG_NAMA = $post["PG_NAMA"];
        $this->PG_JENISKELAMIN = $post["PG_JENISKELAMIN"];
        $this->PG_ALAMAT = $post["PG_ALAMAT"];
        $this->PG_TLP = $post["PG_TLP"];
       
        return $this->db->update($this->_table, $this, array ('PG_ID' => $post['PG_ID']));

    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("PG_ID" => $id));
    }

}