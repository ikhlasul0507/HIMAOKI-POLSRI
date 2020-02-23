	<div id="fh5co-main">
			<div class="fh5co-more-contact">
				<div class="fh5co-narrow-content">
					<div class="row">
						<div class="col-md-4">
							<div class="fh5co-feature fh5co-feature-sm animate-box" data-animate-effect="fadeInLeft">
								<div class="fh5co-icon">
									<i class="icon-globe"></i>
								</div>
								<div class="fh5co-text">
									<p><a href="#">himaokipolsri@gmail.com</a></p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="fh5co-feature fh5co-feature-sm animate-box" data-animate-effect="fadeInLeft">
								<div class="fh5co-icon">
									<i class="icon-map"></i>
								</div>
								<div class="fh5co-text">
									<p><a href="#">Jl. Srijaya Negara No.1978 RT.09 RW.27 Bukit Besar Palembang</a></p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="fh5co-feature fh5co-feature-sm animate-box" data-animate-effect="fadeInLeft">
								<div class="fh5co-icon">
									<i class="icon-phone"></i>
								</div>
								<div class="fh5co-text">
									<p><a href="#">0822-8052-4264</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="fh5co-narrow-content animate-box" data-animate-effect="fadeInLeft">
				
				<div class="row">
					<div class="col-md-4">
						<h4>FORMULIR KRITIK & SARAN</h4>
						 <!-- notifikasi yang di kirim dari controller -->
                  <?php if($this->session->flashdata('pesan')): ?>
                      <strong><?php echo $this->session->flashdata('pesan');?></strong>
                 <?php endif; ?>
             <!-- End -->
					</div>
				</div>
				<form action="" method="post">
					<div class="row">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Nama" name="nama">
									</div>
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Email" name="email">
									</div>
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Handphone" name="handphone">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<textarea name="saran" id="message" cols="30" rows="7" class="form-control" placeholder="Kritik & Saran"></textarea>
									</div>
									<div class="form-group">
										<input type="submit" class="btn btn-primary btn-md" value="Kirim">
									</div>
								</div>
								
							</div>
						</div>
						
					</div>
				</form>
			</div>
		</div>