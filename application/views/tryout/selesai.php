				<?php       
				$try = $this->db->query("SELECT * FROM tbl_peserta where nama_peserta='".$this->session->nama_peserta."'")->row_array();
                 ?>
		<div id="fh5co-main">
			<div class="fh5co-narrow-content">
				<center>
					<div class="col-md-4 animate-box align-center" data-animate-effect="fadeInLeft">
						
					</div>
					<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
						<img class="img-responsive" src="<?= base_url();?>assets/images/hima.ico" alt="Free HTML5 Bootstrap Template by FreeHTML5.co" style="height: 200px; width: 220px">
						<br>
						<h4 class="fh5co-heading mt-5">Selamat Anda Telah Melakukan Pendaftaran</h4>
						<b><font color="red">Catatan : Jangan Lupa Membawa Pensil, Penghapus, Penggaris Untuk Mengerjakan Try OUT SBMPN 2020</font></b>
						<h3><?= $try['nama_peserta']; ?></h3>
						<p class="text-dark">Data anda telah berhasil diverifikasi oleh system , silahkan kunjungi link di bawah ini <br><a href="<?= base_url();?>peserta">Login Peserta</a><br>Gunakan Token : <b>
							<?php foreach ($token as $tkn) :?>
							<?= $tkn['token']; ?>
							<?php endforeach; ?>
							</b><br>Untuk Login</p>
						<p>Terima Kasih Sampai Bertemu Di Puncak Acara TRY OUT UMPN TAHUN <?= date('Y'); ?>-<?php 
						$r=date("Y"); 
						$t= $r+1;
						echo $t;
						?></p>
						<h6>Waktu : Minggu, 16 Februari 2020</h6>
						<h6>Pukul : 08.00 - Selesai</h6>
						<a href="<?= base_url();?>berita">Kembali</a>
					</div>
				</div>
			</div>	
		</center>