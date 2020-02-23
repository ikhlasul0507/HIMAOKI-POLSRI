
<BR>

  <div id="fh5co-main">
      <div class="fh5co-more-contact">
        <div class="container">
         <CENTER> <h1 class="MT-3">TAMBAH DATA ADMIN</h1></CENTER>
          
          <form action="" method="post" enctype="multipart/form-data">
          <div class="row">
            
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Nama" name="nama_admin">
                    <small class="text-danger ml-4 mt-2"><?php echo form_error('nama_admin'); ?></small>
                  </div>
                  <div class="form-group">
                    <select class="form-control" id="exampleFormControlSelect1" name="jenis_kelamin">
                      <option>Laki-laki</option>
                      <option>Perempuan</option>
                    </select>
                    <small class="text-danger ml-4 mt-2"><?php echo form_error('jenis_kelamin'); ?></small>
                  </div>
                   <div class="form-group">
                    <input type="text" class="form-control" placeholder="Email" name="email_admin">
                    <small class="text-danger ml-4 mt-2"><?php echo form_error('email_admin'); ?></small>
                  </div>
                   <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" name="password">
                    <small class="text-danger ml-4 mt-2"><?php echo form_error('password'); ?></small>
                  </div>
                   <div class="form-group">
                    <input type="file" class="form-control" placeholder="" name="photo_admin">
                    <small class="text-danger ml-4 mt-2"><?php echo form_error('photo_admin'); ?></small>
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
    