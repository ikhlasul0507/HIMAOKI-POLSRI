
		<div id="fh5co-main">
			<div class="fh5co-narrow-content">
				<div class="row row-bottom-padded-md">
					<h3 class="ML-3">TATA CARA MELAKUKAN PENDAFTARAN TRY OUT UMPN TAHUN <?= date('Y'); ?>-<?php 
					$r=date('Y');
					$t= $r+1;
					echo $t; ?></h3>
					<?php foreach ($tata as $tt ): ?>
					<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
						<h2 class="fh5co-heading">MELAKUKAN PEMBAYARAN</h2>

						<ul class="list-group">
						  <li class="list-group-item">Peserta <b>Wajib</b> Melakukan Pembayaran Terlebih Dahulu Ke Rekening :<br>
						  	<br>
						  	<b><h3>
						  		Atas Nama : <?= $tt['nama_rekening'];?><br>
						  		No Rekening : <?= $tt['no_rekening'];?><br>
								Bank : <?= $tt['nama_bank'];?><br>	
						  	</b></h3>
						  	Adapun Nominal :<br>
						  	A. Paket IPA = Rp. 25000,-<br>
						  	B. Paket IPS = Rp. 25000,-<br>
						  

						  	Note : <small>SMK Menyesuaikan Jurusan Pada Sekolah Tersebut</small>

						  </li>
						  <li class="list-group-item">Setelah Mendapat Bukti Pembayaran Di Foto Dan DiUpload Pada Form<br>
							Adapun Syarat Bukti Pembayaran Yang Sah:<br>
							A. Terdapat Tanggal Transfer<br>
							B. Nama Pengirim Dan Penerima (<?= $tt['nama_rekening'];?>)<br>
							C. Nominal Yang Sesuai Dengan Pilihan Paket<br>
							Contoh :<br>
							<a href="<?= base_url();?>assets/images/rekening.png" target="_blank"><img src="<?= base_url();?>assets/images/rekening.png" width="100px" height="100px"></a>
							<br>
							Note : <small class="text-danger">jika Tidak Yakin Bisa Hubungi DM Instagram hima_oki_polsri Atau Chat via Web Disudut kiri Bawah </small></li>
						</ul>
					</div>
					<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
						<h2 class="fh5co-heading">MENGISI FORMULIR PENDAFTARAN</h2>
						<ul class="list-group">
						  <li class="list-group-item">Klik Tombol Lanjutkan Pada Bagian Bawah Halaman ini</li>
						  <li class="list-group-item">Setelah Itu Isi Semua Biodata Untuk Pendaftaran dan Silahkan Di Upload Bukti Rekening Yang Sudah di Transfer</li>
						  <li class="list-group-item">Pada Saat Pengisian Data , <b>Ingat !!! No Handphone Yang di Gunakan Harus lah aktif nanti akan di gunakan untuk login peserta pada saat Kegiatan berlangsung </b></li>
						  <li class="list-group-item">Setelah Mendaftar Akan Mendapat <b>TOKEN</b> yang di gunakan untuk login peserta</li>
						  <li class="list-group-item">Catatan : <b>Handphone dan Token Harus Di catat, untuk di gunakan pada saat login peserta nanti </b></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="fh5co-narrow-content">
					<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft"><a href="<?= base_url();?>tryout/daftar">LANJUTKAN</a></h2>
					<div class="row">
						<div class="col-md-6">
							<div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
								<div class="fh5co-icon">
									<a href="<?= base_url();?>tryout/daftar"><i class="icon-arrow-right3"></i></a>
								</div>
							</div>
						</div>
		
					</div>
				</div>
			<?php endforeach; ?>
			
		</div>