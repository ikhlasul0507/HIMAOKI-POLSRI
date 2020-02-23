
<BR>

  <div id="fh5co-main">
      <div class="fh5co-more-contact">
        <div class="container">
          <div class="col-md-11">
         <CENTER> <h1 class="MT-3">KELOLA DATA PENGURUS</h1></CENTER>
          <a href="<?= base_url();?>admin/tambah_pengurus" class="btn btn-primary">Tambah Pengurus</a><br>
           <!-- notifikasi yang di kirim dari controller -->
                  <?php if($this->session->flashdata('pesan')): ?>
                      <strong><?php echo $this->session->flashdata('pesan');?></strong>
                 <?php endif; ?>
             <!-- End -->
          <table class="table mt-3 table table-striped table-bordered data table-responsive">
            <thead class="thead-dark">
              <tr>
                <th scope="col">NO</th>
                <th scope="col">No Urut</th>
                <th scope="col">Nama Pengurus</th>
                <th scope="col">Jabatan Pengurus</th>
                <th scope="col">Photo</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
             <?php $no=1;
              foreach ($pengurus as $pgr) :?>
              <tr>
                <th scope="col"><?= $no++; ?></th>
                <th scope="col"><?= $pgr['no_urut']; ?></th>
                <th scope="col"><?= $pgr['nama_pengurus']; ?></th>
                <th scope="col"><?= $pgr['jabatan_pengurus']; ?></th>
                <th scope="col">
                  <a href="<?= base_url();?>assets/images/<?= $pgr['photo']; ?>" target="_blank">
                  <img src="<?= base_url();?>assets/images/<?= $pgr['photo']; ?>" width="50px" height="50px" style="border-radius: 100px" alt="">
                  </a>
                </th>
                <th scope="col"><a href="<?= base_url();?>admin/hapus_pengurus/<?= $pgr['id_pengurus']; ?>"  onclick="return confirm('Yakin Ingin Menghapus ?');">Hapus</a></th>
              </tr>
            <?php endforeach; ?>
            </tbody>
          </table>
          </div>
        </div>
      </div>
    </div>
    