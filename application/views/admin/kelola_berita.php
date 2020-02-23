
<BR>

  <div id="fh5co-main">
      <div class="fh5co-more-contact">
        <div class="container">
          <div class="col-md-10">
         <CENTER> <h1 class="MT-3">KELOLA DATA BERITA</h1></CENTER>
          <a href="<?= base_url();?>admin/tambah_berita" class="btn btn-primary">Tambah Berita</a><br><br>
            <!-- notifikasi yang di kirim dari controller -->
                  <?php if($this->session->flashdata('pesan')): ?>
                      <strong><?php echo $this->session->flashdata('pesan');?></strong>
                 <?php endif; ?>
             <!-- End -->
          <table class="table mt-3 table table-striped table-bordered data table-responsive">
            <thead class="thead-dark">
              <tr>
                <th scope="col">NO</th>
                <th scope="col">Judul Berita</th>
                <th scope="col">Tanggal Berita</th>
                <th scope="col">Isi Berita</th>
                <th scope="col">Photo</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
             <?php $no=1;
              foreach ($berita as $brt) :?>
              <tr>
                <th scope="col"><?= $no++; ?></th>
                <th scope="col"><?= $brt['judul_berita']; ?></th>
                <th scope="col"><?= $brt['tgl_berita']; ?></th>
                <th scope="col"><?= $brt['isi_berita']; ?></th>
                <th scope="col">
                  <a href="<?= base_url();?>assets/images/<?= $brt['photo_berita']; ?>" target="_blank">
                  <img src="<?= base_url();?>assets/images/<?= $brt['photo_berita']; ?>" width="50px" height="50px" style="border-radius: 100px" alt="">
                  </a>
                </th>
                <th scope="col"><a href="<?= base_url();?>admin/hapus_berita/<?= $brt['id_berita']; ?>"  onclick="return confirm('Yakin Ingin Menghapus ?');">Hapus</a></th>
              </tr>
            <?php endforeach; ?>
            </tbody>
          </table>
          </div>
        </div>
      </div>
    </div>
    