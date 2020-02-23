
<BR>

  <div id="fh5co-main">
      <div class="fh5co-more-contact">
        <div class="container">
          <div class="col-md-11">
         <CENTER> <h1 class="MT-3">KELOLA DATA TATA CARA</h1></CENTER>
         <a href="<?= base_url();?>admin/tambah_tata_cara" class="btn btn-primary">Tambah Tata Cara</a><br><br>
         <!-- notifikasi yang di kirim dari controller -->
                  <?php if($this->session->flashdata('pesan')): ?>
                      <strong><?php echo $this->session->flashdata('pesan');?></strong>
                 <?php endif; ?>
             <!-- End -->
          <table id="example" class="table table-striped table-bordered table-responsive" style="width:100%">
            <thead class="thead-dark">
              <tr>
                <th scope="col">NO</th>
                <th scope="col">Nama Rekening</th>
                <th scope="col">No Rekening</th>
                <th scope="col">Nama Bank</th>
                <th scope="col">Waktu</th>
                <th scope="col">Lokasi</th>
                <th scope="col">Pukul</th>
                <th scope="col">Aksi</th>

              </tr>
            </thead>
            <tbody>
             <?php $no=1;
              foreach ($tata as $tt) :?>
              <tr>
                <th scope="col"><?= $no++; ?></th>
                <th scope="col"><?= $tt['nama_rekening']; ?></th>
                <th scope="col"><?= $tt['no_rekening']; ?></th>
                <th scope="col"><?= $tt['nama_bank']; ?></th>
                <th scope="col"><?= $tt['waktu']; ?></th>
                <th scope="col"><?= $tt['lokasi']; ?></th>
                <th scope="col"><?= $tt['pukul']; ?></th>
                <th scope="col"><a href="<?= base_url();?>admin/hapus_tata_cara/<?= $tt['id_tata_cara']; ?>"  onclick="return confirm('Yakin Ingin Menghapus ?');">Hapus</a></th>
              </tr>
            <?php endforeach; ?>
            </tbody>
          </table>
          </div>
        </div>
      </div>
    </div>
    