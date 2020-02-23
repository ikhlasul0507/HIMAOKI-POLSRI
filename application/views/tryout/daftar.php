	<div id="fh5co-main">
			
			<div class="fh5co-narrow-content animate-box" data-animate-effect="fadeInLeft">
				
				<div class="row">
					<div class="col-md-8">
						<h4>FORMULIR PENDAFTARAN TRYOUT UMPN POLSRI TAHUN <?= date('Y');?>-<?php 
				$r= date('Y');
				$t=$r+1;
				echo $t;
				 ?></h4>
					</div>
				</div>
				<form action="" method="post" enctype="multipart/form-data">
					<div class="row">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">

										<input type="text" class="form-control" placeholder="Nama" name="nama_peserta" required="" autocomplete="">
									</div>
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Handphone" name="handphone_peserta" required="" autocomplete="">
										<small><?php echo form_error('handphone_peserta'); ?></small>
									</div>
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Alamat" name="alamat_peserta" required="" autocomplete="">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<select  class="form-control" id="exampleFormControlSelect2" name="jurusan_peserta">
									      <option>--(Pilih Jurusan)--</option>
									      <option value="ipa">(IPA / Rekayasa)</option>
									      <option value="ips">(IPS / Non Rekayasa)</option> 
									    </select>
									    <small>*SMK Menyesuaikan, Rekayasa:IPA & Non Rekayasa:IPS </small>
									</div>
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Asal Sekolah" name="sekolah_peserta" required="" autocomplete="">
									</div>
									<div class="form-group">
										<select  class="form-control" id="exampleFormControlSelect2" name="paket_peserta">
									      <option>--(Pilih Paket)--</option>
									      <option value="ipa">(IPA)</option>
									      <option value="ips">(IPS)</option>
									     
									      
									    </select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
									
										<input type="file" class="form-control" placeholder="Bukti " name="bukti" required="" autocomplete="">
										<small>*Upload bukti pembayaran TRY OUT UMPN POLSRI <?= date('Y');?> </small>
										<input type="hidden" name="bayar" value="proses">
										<input type="hidden" name="absen_pagi" value="0">
										<input type="hidden" name="absen_siang" value="0">
										<input type="hidden" name="makan_siang" value="0">
										<input type="hidden" name="status" value="0">
										<input type="hidden" name="nilai" value="0">
									</div>
									
								</div>
								<div class="col-md-6">
									
									<div class="form-group">
										<input type="submit" class="btn btn-primary btn-md mt-3" value="Kirim">
									</div>
								</div>
								
							</div>
						</div>
						
					</div>
				</form>
			</div>
		</div>