<?php 

 class Dosen_model extends CI_Model
 {
	public function all()
	{
		return $this->db->get('dosen')->result();
	}
	 public function create($objek)
    {
        return $this->db->insert('dosen', $objek);
    }
    public function remove($kode)
    {
        return $this->db->delete('dosen', array('nik' => $kode));
    }
    public function get_id($kode){
        return $this->db->where('nik', $kode)->get('dosen')->row();
    }

    public function update($nik, $objek)
    {
        return $this->db->where('nik', $nik)->update('dosen', $objek);
    }
    



 }