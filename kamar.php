<?php defined('BASEPATH') OR exid('No direct script access allowed');

class kamar extends CI_Model
{
    private $_table = "kamar";

    public $KM_ID;
    public $KM_NO;
    public $KM_LOKASI;
    public $FASILITAS;
    public $HARGA;
    public $KM_KAPASITAS;
  
  
    

    public function rules()
    {
        return [ 
            ['field' => 'KM_ID',
            'label' => 'KM_ID',
            'rules' => 'required'],

            ['field' => 'KM_NO',
            'label' => 'KM_NO',
            'rules' => 'required'],

            ['field' => 'KM_LOKASI',
            'label' => 'KM_LOKASI',
            'rules' => 'required'],

            ['field' => 'FASILITAS',
            'label' => 'FASILITAS',
            'rules' => 'required'],

            ['field' => 'HARGA',
            'label' => 'HARGA',
            'rules' => 'required'],

            ['field' => 'KM_KAPASITAS',
            'label' => 'KM_KAPASITAS',
            'rules' => 'required'],

           
            
        ];

        
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ['KM_ID' => $id])->row(); 
    }
    public function save()
    {
        $post = $this->input->post();
        $this->KM_ID = $post["KM_ID"];
        $this->KM_NO = $post["KM_NO"];
        $this->KM_LOKASI = $post["KM_LOKASI"];
        $this->FASILITAS = $post["FASILITAS"];
        $this->HARGA = $post["HARGA"];
        $this->KM_KAPASITAS = $post["HARGA"];
       
      
        return $this->db->insert($this->_table, $this);

    }

    public function update()
    {
        $post = $this->input->post();
        $this->KM_ID = $post["KM_ID"];
        $this->KM_NO = $post["KM_NO"];
        $this->KM_LOKASI = $post["KM_LOKASI"];
        $this->FASILITAS = $post["FASILITAS"];
        $this->HARGA = $post["HARGA"];
        $this->KM_KAPASITAS = $post["HARGA"];
       
        return $this->db->update($this->_table, $this, array ('KM_ID' => $post['KM_ID']));

    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("KM_ID" => $id));
    }

}