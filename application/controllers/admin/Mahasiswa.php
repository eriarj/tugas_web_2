<?php 


 class Mahasiswa extends CI_Controller
 {
 	public function __construct()
		{
			parent::__construct();
			$this->load->model('Mahasiswa_model');//kenalan
		}
 	
 	public function index()
 	{
 		$data['judul'] = 'Mahasiswa';
		$data['sub_judul'] = 'Halaman Mahasiswa';
		$data['halaman'] = 'admin/v_mahasiswa';

		$data['isi_tabel']=$this->Mahasiswa_model->all();

		$this->load->view('admin/v_template', $data);
 	}
 	public function tambah()
 	{
 		$data['judul'] = 'Mahasiswa';
		$data['sub_judul'] = 'Halaman tambah data Mahasiswa';
		$data['halaman'] = 'admin/v_tambah_mahasiswa';

		$data['isi_tabel']=$this->Mahasiswa_model->all();

		$this->load->view('admin/v_template', $data);
 	}
 	public function proses_tambah()
	{
		$nim= $this->input->post('nim');
		$nama_mahasiswa= $this->input->post('nama_mahasiswa');
		$program_studi= $this->input->post('program_studi');

		$objek = array(
			'nim' => $nim,
			'nama_mahasiswa' => $nama_mahasiswa,
			'program_studi' => $program_studi );

		if ($this->Mahasiswa_model->create($objek)) {
			
			$this->session->set_flashdata('info', 'Data Berhasil Disimpan !');
			redirect('admin/mahasiswa');

		}else{
			$this->session->set_flashdata('info', 'Data Gagal Disimpan !');
			redirect('admin/mahasiswa');
		}
		// var_dump($objek);
	}
	public function hapus($nim)
	{
		if ($this->Mahasiswa_model->remove($nim)) {
			$this->session->set_flashdata('info', 'Data Berhasil Dihapus !');
			redirect('admin/mahasiswa');

		}else{
			$this->session->set_flashdata('info', 'Data Gagal Dihapus !');
			redirect('admin/mahasiswa');
		}
	}
	public function edit($nim)
	{
		// echo "halaman edit";

		$data['judul']='Edit Mahasiswa';
		$data['sub_judul']='Edit Mahasiswa';
		$data['halaman']="admin/v_edit_mahasiswa";

		$data['isi_data']=$this->Mahasiswa_model->get_id($nim);

		// var_dump($data);

		$this->load->view('admin/v_template', $data);
	}

	public function proses_edit()
	{
		$nim= $this->input->post('nim');
		$nama_mahasiswa= $this->input->post('nama_mahasiswa');
		$program_studi= $this->input->post('program_studi');

		$nim=$this->input->post('nim_mahasiswa');

		$objek = array(
			'nim' => $nim,
			'nama_mahasiswa' => $nama_mahasiswa,
			'program_studi' => $program_studi );

		if ($this->Mahasiswa_model->update($nim, $objek)) {
			
			$this->session->set_flashdata('info', 'Data Berhasil Diedit !');
			redirect('admin/mahasiswa');

		}else{
			$this->session->set_flashdata('info', 'Data Gagal Diedit !');
			redirect('admin/mahasiswa');
		}
	}

 	


 } 