
<div id="fh5co-main">
			
			<div class="fh5co-narrow-content">
				<h1 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft"><?= $berita['judul_berita']; ?></h1>
				<div class="row row-bottom-padded-md">
					
					<div class="col-md-12 col-sm-12 col-padding animate-box" data-animate-effect="fadeInLeft">
						<div class="blog-entry">
							<center>
							<a href="<?= base_url();?>assets/images/<?= $berita['photo_berita']; ?>" class="blog-img "><img src="<?= base_url();?>assets/images/<?= $berita['photo_berita']; ?>" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co" widht></a>
							</center>
							<div class="desc">
								<h3><a href="#"><?= $berita['judul_berita']; ?></a></h3>
								<span><small><?= $berita['tgl_berita']; ?></small></span>
								<p class="text-dark"><?= $berita['isi_berita']; ?></p>
							<a href=" <?= base_url();?>berita" class="btn btn-primary">Kembali</a>
							</div>
						</div>
					</div>
				
				</div>
			</div>

			
		</div>
	</div>
