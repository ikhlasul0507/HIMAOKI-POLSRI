
<BR>

  <div id="fh5co-main">
      <div class="fh5co-more-contact">
        <div class="container">
          <div class="col-md-10">
         <CENTER> <h1 class="MT-3">KELOLA DATA TOKEN</h1></CENTER>
          <a href="<?= base_url();?>admin/tambah_token" class="btn btn-primary">Tambah Token</a><br><br>
            <!-- notifikasi yang di kirim dari controller -->
                  <?php if($this->session->flashdata('pesan')): ?>
                      <strong><?php echo $this->session->flashdata('pesan');?></strong>
                 <?php endif; ?>
             <!-- End -->
          <table class="table mt-3 table table-striped table-bordered data table-responsive">
            <thead class="thead-dark">
              <tr>
      
                <th scope="col">Token</th>
               
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
             <?php
              foreach ($token as $tkn) :?>
              <tr>
            
                <th scope="col"><h1><?= $tkn['token']; ?></h1></th>
                <th scope="col"><a href="<?= base_url();?>admin/hapus_token/<?= $tkn['id_token']; ?>"  onclick="return confirm('Yakin Ingin Menghapus ?');">Hapus</a></th>
              </tr>
            <?php endforeach; ?>
            </tbody>
          </table>
          <ul>
            <li>himaoki= absen pagi</li>
            <li>tryout = Data Diri</li>
            <li>umpn = absen siang</li>
            <li>polsri = makan siang</li>
            <li>2020= sertifikat</li>
          </ul>
          </div>
        </div>
      </div>
    </div>
    