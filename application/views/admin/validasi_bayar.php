
<BR>

  <div id="fh5co-main">
      <div class="fh5co-more-contact">
        <div class="container">
         <CENTER> <h1 class="MT-3">VALIDASI PEMBAYARAN</h1></CENTER>
          
          <form action="" method="post" enctype="multipart/form-data">
          <div class="row">
            
                <div class="col-md-6">
                  <div class="form-group">
                    <a href="<?= base_url();?>assets/images/<?= $peserta['bukti']; ?>" target="_blank">
                   <img src="<?= base_url();?>assets/images/<?= $peserta['bukti']; ?>" width="300px" height="300px">
                  </a>
                    <small class="text-danger ml-4 mt-2">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Nama" name="nama_peserta" value=" <?= $peserta['nama_peserta'];?> " readonly>
                    <small class="text-danger ml-4 mt-2">
                  </div>
                   <div class="form-group">
                    <input type="text" class="form-control" placeholder="Email" name="handphone_peserta" value=" <?= $peserta['handphone_peserta'];?>" readonly>
                    <small class="text-danger ml-4 mt-2">
                  </div>
                  <div class="form-group">
                    <input type="hidden" name="id_peserta" value="<?= $peserta['id_peserta'];?>">
                    <input type="hidden" name="alamat_peserta" value="<?= $peserta['alamat_peserta'];?>">
                    <input type="hidden" name="jurusan_peserta" value="<?= $peserta['jurusan_peserta'];?>">
                    <input type="hidden" name="sekolah_peserta" value="<?= $peserta['sekolah_peserta'];?>">
                    <input type="hidden" name="paket_peserta" value="<?= $peserta['paket_peserta'];?>">
                    <input type="hidden" name="bukti" value="<?= $peserta['bukti'];?>">
                    <input type="hidden" name="bayar" value="selesai">
                    <input type="submit" class="btn btn-primary" value="Verifikasi">
                  </div>
                </div>
                
                
              </div>
            </div>
            
          </div>
        </form>
        </div>
      </div>
    </div>
    