
<div id="fh5co-main">
			
			<div class="fh5co-narrow-content">
				<h1 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">SEPUTAR BERITA HIMA OKI</h1>
				<div class="row row-bottom-padded-md">
					<?php foreach ($berita as $brt): ?>
					<div class="col-md-3 col-sm-6 col-padding animate-box" data-animate-effect="fadeInLeft">
						<div class="blog-entry">
							<a href="#" class="blog-img"><img src="<?= base_url();?>assets/images/<?= $brt['photo_berita']; ?>" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
							<div class="desc">
								<h3><a href="#"><?= $brt['judul_berita']; ?></a></h3>
								<span><small><?= $brt['tgl_berita']; ?></small></span>
								<p><?= word_limiter($brt['isi_berita'],10); ?></p>
								<a href="<?= base_url();?>berita/detail/<?= $brt['id_berita'];?>" class="lead">Read More <i class="icon-arrow-right3"></i></a>
							</div>
						</div>
					</div>
					<?php endforeach; ?>
				</div>
			</div>

			
		</div>
	</div>
