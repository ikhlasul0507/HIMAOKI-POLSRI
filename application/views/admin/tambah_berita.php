

<BR>

  <div id="fh5co-main">
      <div class="fh5co-more-contact">
        <div class="container">
         <CENTER> <h1 class="MT-3">TAMBAH DATA BERITA</h1></CENTER>
          
          <form action="" method="post" enctype="multipart/form-data">
          <div class="row">
            
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Judul Berita" name="judul_berita">
                    <small class="text-danger ml-4 mt-2"><?php echo form_error('judul_berita'); ?></small>
                  </div>
                   <div class="form-group">
                    <input type="date" class="form-control" placeholder="Tanggal" name="tgl_berita">
                    <small class="text-danger ml-4 mt-2"><?php echo form_error('tgl_berita'); ?></small>
                  </div>
                   <div class="form-group">
                   <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="isi_berita"></textarea>
                    <small class="text-danger ml-4 mt-2"><?php echo form_error('isi_berita'); ?></small>
                  </div>
                   <div class="form-group">
                    <input type="file" class="form-control" placeholder="" name="photo_berita">
                    <small class="text-danger ml-4 mt-2"><?php echo form_error('photo_berita'); ?></small>
                  </div>
                  <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Kirim">
                  </div>
                </div>
                
                
              </div>
            </div>
            
          </div>
        </form>
        </div>
      </div>
    </div>
    