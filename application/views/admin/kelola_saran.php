
<BR>

  <div id="fh5co-main">
      <div class="fh5co-more-contact">
        <div class="container">
          <div class="col-md-11">
         <CENTER> <h1 class="MT-3">KELOLA DATA KRITIK & SARAN</h1></CENTER>
         <!-- notifikasi yang di kirim dari controller -->
                  <?php if($this->session->flashdata('pesan')): ?>
                      <strong><?php echo $this->session->flashdata('pesan');?></strong>
                 <?php endif; ?>
             <!-- End -->
          <table id="example" class="table mt-3 table table-striped table-bordered data table-responsive" style="width:100%">
            <thead class="thead-dark">
              <tr>
                <th scope="col">NO</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Handphone</th>
                <th scope="col">Kritik & Saran</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
             <?php $no=1;
              foreach ($saran as $srn) :?>
              <tr>
                <th scope="col"><?= $no++; ?></th>
                <th scope="col"><?= $srn['nama']; ?></th>
                <th scope="col"><?= $srn['email']; ?></th>
                <th scope="col"><?= $srn['handphone']; ?></th>
                <th scope="col"><?= $srn['handphone']; ?></th>
                <th scope="col"><a href="<?= base_url();?>admin/hapus_saran/<?= $srn['id_kontak']; ?>"  onclick="return confirm('Yakin Ingin Menghapus ?');">Hapus</a></th>
              </tr>
            <?php endforeach; ?>
            </tbody>
          </table>
          </div>
        </div>
      </div>
    </div>
    