<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_mhs extends CI_Model
{
    private $table = 'mahasiswa';

    //validasi form, method ini akan mengembailkan data berupa rules validasi form       
    public function rules()
    {
        return [
            [
                'field' => 'Nama',  
                'label' => 'Nama',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'Jenis_kelamin',
                'label' => 'Jenis Kelamin',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'Alamat',
                'label' => 'Alamat',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'Mata_kuliah',
                'label' => 'Mata Kuliah',
                'rules' => 'trim|required'
            ]
        ];
    }

    //menampilkan data mahasiswa berdasarkan id
    public function getById($id)
    {
        return $this->db->get_where($this->table, ["ID" => $id])->row();
    
    }

    //menampilkan semua data mahasiswa
    public function getAll()
    {
        $this->db->from($this->table);
        $this->db->order_by("ID", "desc");
        $query = $this->db->get();
        return $query->result();
    }

    //menyimpan data mahasiswa
    public function save()
    {
        $data = array(
            "Nama" => $this->input->post('Nama'),
            "Jenis_kelamin" => $this->input->post('Jenis_kelamin'),
            "Alamat" => $this->input->post('Alamat'),
            "Mata_kuliah" => $this->input->post('Mata_kuliah')
        );
        return $this->db->insert($this->table, $data);
    }

    //edit data mahasiswa
    public function update()
    {
        $data = array(
            "Nama" => $this->input->post('Nama'),
            "Jenis_kelamin" => $this->input->post('Jenis_kelamin'),
            "Alamat" => $this->input->post('Alamat'),
            "Mata_kuliah" => $this->input->post('Mata_kuliah')
        );
        return $this->db->update($this->table, $data, array('ID' => $this->input->post('ID')));
    }

    //hapus data mahasiswa
    public function delete($id)
    {
        return $this->db->delete($this->table, array("ID" => $id));
    }
}