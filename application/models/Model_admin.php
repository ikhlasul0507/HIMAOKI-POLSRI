<?php 

class model_admin extends CI_model{

	public function loginadmin($email_admin,$password)
	{
		$this->db->where('email_admin',$email_admin);
		$this->db->where('password',$password);
		return $this->db->get('tbl_admin')->row();
	}
	public function loginpesertahandphone($handphone_peserta)
	{
		$this->db->where('handphone_peserta',$handphone_peserta);
		return $this->db->get('tbl_peserta')->row();
	}

	public function loginpesertatoken($token)
	{
		$this->db->where('token',$token);
		return $this->db->get('tbl_token')->row();
	}

	public function getAlladmin()
	{
		$this->db->order_by('id_admin', 'DESC');
		return $this->db->get('tbl_admin')->result_array();	
	}
	public function getAlltoken()
	{
		$this->db->order_by('id_token', 'DESC');
		return $this->db->get('tbl_token')->result_array();	
	}
	public function tambahadmin($data)
	{
		//query untuk insert kedalam database
		$this->db->insert('tbl_admin', $data);
	}
	public function hapusDataAdmin($id_admin)
		{
		 $adm = $this->model_admin->getAdminById($id_admin);
	     $path= ('./assets/images/'.$adm['photo_admin']);
         unlink($path);
		
			$this->db->where('id_admin', $id_admin);
			$this->db->delete('tbl_admin');
		}
	public function getAdminById($id_admin)
		{
			return $this->db->get_where('tbl_admin',['id_admin'=>  $id_admin])->row_array();
		}
	public function hapusDataBerita($id_berita)
		{
			 $brt = $this->model_admin->getAdminById($id_berita);
		     $path= ('./assets/images/'.$adm['photo_berita']);
	         unlink($path);

			$this->db->where('id_berita', $id_berita);
			$this->db->delete('tbl_berita');
		}
	public function getAllberita()
	{
		$this->db->order_by('id_berita', 'DESC');
		return $this->db->get('tbl_berita')->result_array();	
	}
	public function getBeritaById($id_berita)
		{
			return $this->db->get_where('tbl_berita',['id_berita'=>  $id_berita])->row_array();
		}
	public function tambahberita($data)
	{
		//query untuk insert kedalam database
		$this->db->insert('tbl_berita', $data);
	}
	// untuk pengurus

	public function hapusDataPengurus($id_pengurus)
		{
			 $pgr = $this->model_admin->getPengurusById($id_pengurus);
		     $path= ('./assets/images/'.$pgr['photo']);
	         unlink($path);

			$this->db->where('id_pengurus', $id_pengurus);
			$this->db->delete('tbl_pengurus');
		}
	public function getAllpengurus()
	{
		$this->db->order_by('no_urut', 'ASC');
		return $this->db->get('tbl_pengurus')->result_array();	
	}
	public function getPengurusById($id_pengurus)
		{
			return $this->db->get_where('tbl_pengurus',['id_pengurus'=>  $id_pengurus])->row_array();
		}
	public function tambahpengurus($data)
	{
		//query untuk insert kedalam database
		$this->db->insert('tbl_pengurus', $data);
	}

	//saran
	public function getAllsaran()
	{
		$this->db->order_by('id_kontak', 'DESC');
		return $this->db->get('tbl_kontak')->result_array();	
	}
	public function hapusDataSaran($id_kontak)
		{
			$this->db->where('id_kontak', $id_kontak);
			$this->db->delete('tbl_kontak');
		}

		//tata cara

	public function getAlltata()
	{
		$this->db->order_by('id_tata_cara', 'DESC');
		return $this->db->get('tbl_tata_cara')->result_array();	
	}
		//daftar peserta
	public function tambahpeserta($data)
	{
		//query untuk insert kedalam database
		$this->db->insert('tbl_peserta', $data);
	}

	//token
	public function hapusDataToken($id_token)
		{
			$this->db->where('id_token', $id_token);
			$this->db->delete('tbl_token');
		}
	public function tambahtoken($data)
	{
		//query untuk insert kedalam database
		$this->db->insert('tbl_token', $data);
	}

	//tryout
	public function getAlltryout()
	{
		$this->db->order_by('id_peserta', 'DESC');
		return $this->db->get('tbl_peserta')->result_array();	
	}
	public function getPesertaById($id_peserta)
		{
			return $this->db->get_where('tbl_peserta',['id_peserta'=>  $id_peserta])->row_array();
		}
	 public function lengkapiPeserta($id_peserta)
	 {
	 	 $data=[
		 	'nama_peserta'=> $this->input->post('nama_peserta'),
			'handphone_peserta'=> $this->input->post('handphone_peserta'),
			'alamat_peserta'=> $this->input->post('alamat_peserta'),
			'jurusan_peserta'=> $this->input->post('jurusan_peserta'),
			'sekolah_peserta'=> $this->input->post('sekolah_peserta'),
			'paket_peserta'=> $this->input->post('paket_peserta'),
			'bukti'=> $this->input->post('bukti'),
			'bayar'=> $this->input->post('bayar')
		 ];

	 	$this->db->where('id_peserta', $this->input->post('id_peserta'));
	 	$this->db->update('tbl_peserta', $data);
	 }
	  public function lengkapiSelesai($id_peserta)
	 {
	 	 $data=[
		 	'nama_peserta'=> $this->input->post('nama_peserta'),
			'handphone_peserta'=> $this->input->post('handphone_peserta'),
			'alamat_peserta'=> $this->input->post('alamat_peserta'),
			'jurusan_peserta'=> $this->input->post('jurusan_peserta'),
			'sekolah_peserta'=> $this->input->post('sekolah_peserta'),
			'paket_peserta'=> $this->input->post('paket_peserta'),
			'bukti'=> $this->input->post('bukti'),
			'bayar'=> $this->input->post('bayar'),
			'absen_pagi'=> $this->input->post('absen_pagi'),
			
			'makan_siang'=> $this->input->post('makan_siang'),
			'status'=> $this->input->post('status'),

		 ];

	 	$this->db->where('id_peserta', $this->input->post('id_peserta'));
	 	$this->db->update('tbl_peserta', $data);
	 }
	  public function nilaiSelesai($id_peserta)
	 {
	 	 $data=[
		 	'nama_peserta'=> $this->input->post('nama_peserta'),
			'handphone_peserta'=> $this->input->post('handphone_peserta'),
			'alamat_peserta'=> $this->input->post('alamat_peserta'),
			'jurusan_peserta'=> $this->input->post('jurusan_peserta'),
			'sekolah_peserta'=> $this->input->post('sekolah_peserta'),
			'paket_peserta'=> $this->input->post('paket_peserta'),
			'bukti'=> $this->input->post('bukti'),
			'bayar'=> $this->input->post('bayar'),
			'absen_pagi'=> $this->input->post('absen_pagi'),
			
			'makan_siang'=> $this->input->post('makan_siang'),
			'status'=> $this->input->post('status'),
			'nilai' => $this->input->post('nilai')
			
		 ];

	 	$this->db->where('id_peserta', $this->input->post('id_peserta'));
	 	$this->db->update('tbl_peserta', $data);
	 }

	 public function hapusDataPeserta($id_peserta)
		{
		 $try = $this->model_admin->getPesertaById($id_peserta);
	     $path= ('./assets/images/'.$try['bayar']);
         unlink($path);
		
			$this->db->where('id_peserta', $id_peserta);
			$this->db->delete('tbl_peserta');
		}
	public function ubahDataPeserta($id_peserta, $data)
	{

		$this->db->where('id_peserta', $this->input->post('id_peserta'));
		$this->db->update('tbl_peserta',$data);
	}
		//kontak
	public function tambahkontak($data)
	{
		//query untuk insert kedalam database
		$this->db->insert('tbl_kontak', $data);
	}
		//TAMBAH TATA CARA
	public function tambahtatacara($data)
	{
		//query untuk insert kedalam database
		$this->db->insert('tbl_tata_cara', $data);
	}
	public function hapusDataTatacara($id_tata_cara)
		{
			$this->db->where('id_tata_cara', $id_tata_cara);
			$this->db->delete('tbl_tata_cara');
		}
}

