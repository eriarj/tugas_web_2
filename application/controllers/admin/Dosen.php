<?php 

 class Dosen extends CI_Controller
 {
 	public function __construct()
		{
			parent::__construct();
			$this->load->model('Dosen_model');//kenalan
		}
 	
 	public function index()
 	{
 		$data['judul'] = 'Dosen';
		$data['sub_judul'] = 'Halaman Dosen';
		$data['halaman'] = 'admin/v_dosen';

		$data['isi_tabel']=$this->Dosen_model->all();

		$this->load->view('admin/v_template', $data);
 	}
 	public function tambah()
 	{
 		$data['judul'] = 'Dosen';
		$data['sub_judul'] = 'Halaman tambah data Dosen';
		$data['halaman'] = 'admin/v_tambah_dosen';

		$data['isi_tabel']=$this->Dosen_model->all();

		$this->load->view('admin/v_template', $data);
 	}
 	public function proses_tambah()
	{
		$nik= $this->input->post('nik');
		$nama_dosen= $this->input->post('nama_dosen');
		$alamat= $this->input->post('alamat');

		$objek = array(
			'nik' => $nik,
			'nama_dosen' => $nama_dosen,
			'alamat' => $alamat );

		if ($this->Dosen_model->create($objek)) {
			
			$this->session->set_flashdata('info', 'Data Berhasil Disimpan !');
			redirect('admin/dosen');

		}else{
			$this->session->set_flashdata('info', 'Data Gagal Disimpan !');
			redirect('admin/dosen');
		}
		// var_dump($objek);
	}
	public function hapus($nik)
	{
		if ($this->Dosen_model->remove($nik)) {
			$this->session->set_flashdata('info', 'Data Berhasil Dihapus !');
			redirect('admin/dosen');

		}else{
			$this->session->set_flashdata('info', 'Data Gagal Dihapus !');
			redirect('admin/dosen');
		}
	}
	public function edit($nik)
	{
		// echo "halaman edit";

		$data['judul']='Edit Dosen';
		$data['sub_judul']='Edit Dosen';
		$data['halaman']="admin/v_edit_dosen";

		$data['isi_data']=$this->Dosen_model->get_id($nik);

		// var_dump($data);

		$this->load->view('admin/v_template', $data);
	}

	public function proses_edit()
	{
		// $nik= $this->input->post('nik');
		$nama_dosen= $this->input->post('nama_dosen');
		$alamat= $this->input->post('alamat');
		
		$nik=$this->input->post('nik_dosen');

		$objek = array(
			// 'nik' => $nik,
			'nama_dosen' => $nama_dosen,
			'alamat' => $alamat);

		if ($this->Dosen_model->update($nik, $objek)) {
			
			$this->session->set_flashdata('info', 'Data Berhasil Diupdate !');
			redirect('admin/dosen');

		}else{
			$this->session->set_flashdata('info', 'Data Gagal Diupdate !');
			redirect('admin/dosen');
		}
	}



}