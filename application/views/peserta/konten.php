<?php       
$try = $this->db->query("SELECT * FROM tbl_peserta where handphone_peserta='".$this->session->handphone_peserta."'")->row_array();
  ?>

<?php       
$token = $this->db->query("SELECT * FROM tbl_token where token='".$this->session->token."'")->row_array();
  ?>

		<div id="fh5co-main">
			<div class="fh5co-narrow-content">
				<div class="row row-bottom-padded-md">
					<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
						<h3>Bukti Diri</h3>
						<img class="img-responsive" src="<?= base_url();?>assets/images/<?= $try['bukti']; ?>" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
						<center>
						<h1 >TRY OUT UMPN POLSRI TAHUN <?= date('Y');?></h1>
					   	<h2>HIMPUNAN MAHASISWA OGAN KOMERING ILIR<BR>POLITEKNIK NEGERI SRIWIJAYA</h2>
					</div>
					<div class="col-md-4 animate-box" data-animate-effect="fadeInLeft">
						<h2 class="fh5co-heading">SELAMAT ANDA TELAH BERHASIL LOGIN</h2>
						<h3><a href="<?= base_url();?>berita">Keluar</a></h3>
						<font size="3">
						<form method="post" action="perbaharui">
						<table class="table text-dark">
							<tr>
								<td>ID</td><td>: <input type="text" name="id_peserta" value="<?= $try['id_peserta']; ?>" style="border: 0" readonly></td>
							</tr>
							<tr>
								<td>Token</td><td>: <b><?= $token['token']; ?></b></td>
							</tr>
							<tr>
								<td>Nama</td><td>: <input type="text" name="nama_peserta" value="<?= $try['nama_peserta']; ?>" style="border: 0" readonly></td>
							</tr>
							<tr>
								<td>Handphone</td><td>: <input type="text" name="handphone_peserta" value="<?= $try['handphone_peserta']; ?>" style="border: 0"></td>
							</tr>
							<tr>
								<td>Alamat</td><td>: <input type="text" name="alamat_peserta" value="<?= $try['alamat_peserta']; ?>" style="border: 0"></td>
							</tr>
							<tr>
								<td>Jurusan</td><td>: <input type="text" name="jurusan_peserta" value="<?= $try['jurusan_peserta']; ?>" style="border: 0"></td>
							</tr>
							<tr>
								<td>Asal Sekolah</td><td>: <input type="text" name="sekolah_peserta" value="<?= $try['sekolah_peserta']; ?>" style="border: 0"></td>
							</tr>
							<tr>
								<td>Paket</td><td>: <input type="text" name="paket_peserta" value="<?= $try['paket_peserta']; ?>" style="border: 0"></td>
							</tr>
							<tr>
								<td>Status Bayar</td><td>: <input type="text" name="bayar" value="<?= $try['bayar']; ?>" style="border: 0" readonly></td>
							</tr>
							<tr>
								<td>Absen Pagi</td>
								<td valign="top">
									<?php if ($try['absen_pagi']=='1') : ?>
										<h4>Hadir</h4>
									<?php endif ?>
									 <input type="hidden" class="form-check-input" name="absen_pagi" value="<?= $try['absen_pagi']; ?>" readonly>
								</td>
							</tr>
							
							<tr>
								<td>Absen Siang</td>
								<td>
									<?php if ($try['absen_siang']=='1') : ?>
										<h4>Hadir</h4>
									<?php endif ?>
									 <input type="hidden" class="form-check-input" name="absen_siang" value="0" readonly>
								</td>
							</tr>
							<tr>
								<td>Makan Siang</td>
								<td>
									<?php if ($try['makan_siang']=='1') : ?>
										<h4>Selesai</h4>
									<?php endif ?>
									 <input type="hidden" class="form-check-input" name="makan_siang" value="<?= $try['makan_siang']; ?>" readonly>
								</td>
							</tr>
							<tr>
								<td>Nilai</td>
								<td>
									 <h1><?= $try['nilai']; ?></h1>
								</td>
							</tr>









							<?php if($token['token']=='himaoki'):?>
							<tr>
								<td>Isi Absen Pagi</td>
								<td>
									<select name="absen_pagi" style="height: 45px">
										<option value="0">Tidak Hadir</option>
							      		<option value="1" selected>Hadir</option>
							     	</select>
									 <!-- <input type="text" class="form-check-input" name="absen_pagi" value="<?= $try['absen_pagi']; ?>"> -->
								</td>
							</tr>
							
							<?php elseif($token['token']=='umpn'): ?>
							<tr>
								<td>Isi Absen Siang</td>
								<td>
									<select name="absen_siang" style="height: 45px">
										<option value="0">Tidak Hadir</option>
							      		<option value="1" selected>Hadir</option>
							     	</select>
									 <!-- <input type="text" class="form-check-input" name="absen_siang" value="<?= $try['absen_siang']; ?>"> -->
								</td>
							</tr>
							<?php elseif($token['token']=='polsri'): ?>
							<tr>
								<td>Isi Makan Siang</td>
								<td>
									<select name="makan_siang" style="height: 45px">
										<option value="0">Belum Selesai</option>
							      		<option value="1" selected>Selesai</option>
							     	</select>
									 <!-- <input type="hidden" class="form-check-input" name="makan_siang" value="<?= $try['makan_siang']; ?>"> -->
								</td>
							</tr>
						
							<?php elseif($token['token']=='2020'): ?>
							<tr>
								<td>Ambil Sertifikat</td>
								<td>
									  <a href="<?= base_url();?>admin/sertifikat/<?= $try['id_peserta']; ?>" target="_blank">Download</a>
								</td>
							</tr>
							<?php endif; ?>
							<tr>
								
								<td colspan="2">
									 <button type="submit" name="simpan" class="btn btn-danger" style="width: 400px">Simpan</button>
								</td>
							</tr>
						</table>
						</form>
						</font>
					</div>
				</div>
			</div>
			
			
		</div>

		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">