<?php 

 class Mahasiswa_model extends CI_Model
 {
 	
	public function all()
	{
		//select * from mahasiswa
		return $this->db->get('mahasiswa')->result();
	}
	 public function create($objek)
    {
        return $this->db->insert('mahasiswa', $objek);
    }
    public function remove($kode)
    {
        return $this->db->delete('mahasiswa', array('nim' => $kode));
    }
    public function get_id($kode){
        return $this->db->where('nim', $kode)->get('mahasiswa')->row();
    }

    public function update($nik, $objek)
    {
        return $this->db->where('nim', $nim)->update('mahasiswa', $objek);
    }



 }