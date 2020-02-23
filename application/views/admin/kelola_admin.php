
<BR>

  <div id="fh5co-main">
      <div class="fh5co-more-contact">
        <div class="container">
          <div class="col-md-10 table-responsive">
         <CENTER> <h1 class="MT-3">KELOLA DATA ADMIN</h1></CENTER>
          <a href="<?= base_url();?>admin/tambah_admin" class="btn btn-primary">Tambah Admin</a><br><br>
            <!-- notifikasi yang di kirim dari controller -->
                  <?php if($this->session->flashdata('pesan')): ?>
                      <strong><?php echo $this->session->flashdata('pesan');?></strong>
                 <?php endif; ?>
             <!-- End -->
          <table class="table mt-3 table table-striped table-bordered data table-responsive">
            <thead class="thead-dark">
              <tr>
                <th scope="col">NO</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col">Photo</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
             <?php $no=1;
              foreach ($admin as $adm) :?>
              <tr>
                <th scope="col"><?= $no++; ?></th>
                <th scope="col"><?= $adm['nama_admin']; ?></th>
                <th scope="col"><?= $adm['jenis_kelamin']; ?></th>
                <th scope="col"><?= $adm['email_admin']; ?></th>
                <th scope="col"><?= $adm['password']; ?></th>
                <th scope="col">
                  <a href="<?= base_url();?>assets/images/<?= $adm['photo_admin']; ?>" target="_blank">
                  <img src="<?= base_url();?>assets/images/<?= $adm['photo_admin']; ?>" width="50px" height="50px" style="border-radius: 100px" alt="">
                  </a>
                </th>
                <th scope="col"><a href="<?= base_url();?>admin/hapus_admin/<?= $adm['id_admin']; ?>"  onclick="return confirm('Yakin Ingin Menghapus ?');">Hapus</a></th>
              </tr>
            <?php endforeach; ?>
            </tbody>
          </table>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript">
  $(document).ready(function(){
    $('.data').DataTable();
  });
</script>
    