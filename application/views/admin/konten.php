<?php       
$row = $this->db->query("SELECT * FROM tbl_admin where email_admin='".$this->session->email_admin."'")->row_array();
  ?>
		<div id="fh5co-main">
			<div class="fh5co-narrow-content">
				<div class="row row-bottom-padded-md">
					<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
						<img class="img-responsive" src="<?= base_url();?>assets/images/<?= $row['photo_admin']; ?>" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
					</div>
					<div class="col-md-4 animate-box" data-animate-effect="fadeInLeft">
						<h2 class="fh5co-heading">SELAMAT ANDA TELAH BERHASIL LOGIN</h2>
						<table class="table text-dark">
							
							<tr>
								<td>Nama</td><td>: <?= $row['nama_admin']; ?></td>
							</tr>
							<tr>
								<td>Jenis Kelamin</td><td>: <?= $row['jenis_kelamin']; ?></td>
							</tr>
							<tr>
								<td>Email</td><td>: <?= $row['email_admin']; ?></td>
							</tr>
							<tr>
								<td>Password</td><td>: <?= $row['password']; ?></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
			
			
		</div>