
		<div id="fh5co-main">
			<div class="fh5co-narrow-content">
				<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">Pengurus Himpunan Mahasiswa Ogan Komering Ilir Tahun <?= date('Y');?>-<?php 
				$r= date('Y');
				$t=$r+1;
				echo $t;
				 ?></h2>
				<div class="row row-bottom-padded-md">
					<?php foreach ($pengurus as $pgr ):?>
					<div class="col-md-3 col-sm-6 col-padding text-center animate-box">
						<a href="#" class="work image-popup" style="background-image: url(<?= base_url();?>assets/images/<?= $pgr['photo']; ?>">
							<div class="desc">
								<h3><?= $pgr['nama_pengurus']; ?></h3>
								<span><?= $pgr['jabatan_pengurus']; ?></span>
							</div>
						</a>
					</div>
					<?php endforeach; ?>
				</div>
			</div>
		
			
		</div>