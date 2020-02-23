<!DOCTYPE html>
<html>
<head>
    <title><?= $judul; ?></title>
</head>

<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet">

 <link href='<?php base_url();?>assets/images/hima.ico' rel='shortcut icon'>
<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">


<script  src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script>
<body>


<div class="container">
  
    <a href=" <?= base_url();?>admin/konten" class="btn btn-success mt-3">Kembali</a>
    <a href=" <?= base_url();?>admin/export_excel" class="btn btn-warning mt-3">Export Excel</a>
    
 <hr>
  <!-- notifikasi yang di kirim dari controller -->
                  <?php if($this->session->flashdata('pesan')): ?>
                      <strong><?php echo $this->session->flashdata('pesan');?></strong>
                 <?php endif; ?>
             <!-- End -->
      <h4 class="text-center mt-3">DATA PESERTA TRY OUT UMPN POLSRI TAHUN <?= date('Y'); ?></h4><hr>
<table id="example" class="table mt-3 table table-striped table-bordered data table-responsive" style="width:100%">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Handphone</th>
                <th>Alamat</th>
                <th>Jurusan</th>
                <th>Asal Sekolah</th>
                <th>Paket</th>
                <th>Bukti Bayar</th>
                <th>Status Pembayaran</th>
                <th>Absen Pagi</th>
             
                <th>Absen Siang</th>
                <th>Makan Siang</th>
                <th>Status</th>
                <th>Nilai</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tryout as $try):?>
            <tr>
                <td><?= $try['nama_peserta']; ?></td>
                <td><?= $try['handphone_peserta']; ?>
                <a href="https://api.whatsapp.com/send?phone=62<?= $try['handphone_peserta']; ?>" target="blank" class="btn btn-danger">Chat Wa</a>
                </td>
                <td><?= $try['alamat_peserta']; ?></td>
                <td><?= $try['jurusan_peserta']; ?></td>
                <td><?= $try['sekolah_peserta']; ?></td>
                <td><?= $try['paket_peserta']; ?></td>
                <td><a href="<?= base_url();?>assets/images/<?= $try['bukti']; ?>" target="_blank">
                  <img src="<?= base_url();?>assets/images/<?= $try['bukti']; ?>" width="50px" height="50px" style="border-radius: 100px" alt="">
                  </a>
                </td>
                <td>
                    <?php if($try['bayar']=='proses'):?>
                    <button type="button" class="btn btn-warning btn-sm" disabled><?= $try['bayar']; ?></button>
                    <a href="<?= base_url();?>admin/validasi_bayar/<?= $try['id_peserta']; ?>">Verifikasi</a>
                    <?php elseif($try['bayar']=='selesai'):?>
                    <button type="button" class="btn btn-success btn-sm" disabled><?= $try['bayar']; ?></button>
                    <?php endif; ?>
                </td>
                <td>
                    <?php if($try['absen_pagi']=='1'):?>
                    <button type="button" class="btn btn-primary btn-sm" disabled>Hadir</button>
                    <?php endif; ?>
                </td>
               
                <td>
                    <?php if($try['absen_siang']=='1'):?>
                    <button type="button" class="btn btn-primary btn-sm" disabled>Hadir</button>
                    <?php endif; ?>
                </td>
                <td>
                    <?php if($try['makan_siang']=='1'):?>
                    <button type="button" class="btn btn-primary btn-sm" disabled>Selesai</button>
                    <?php endif; ?>
                </td>
                <td>
                    <?php if($try['status']=='0'):?>
                     <a href="<?= base_url();?>admin/validasi_selesai/<?= $try['id_peserta']; ?>">Verifikasi</a>
                    <?php endif; ?>

                    <?php if($try['status']=='1'):?>
                    <button type="button" class="btn btn-success btn-sm" disabled>Selesai</button>
                    <?php endif; ?>
                </td>
                <td>
                     <a href="<?= base_url();?>admin/input_nilai/<?= $try['id_peserta']; ?>">Input Nilai</a>
                     <button type="button" class="btn btn-success btn-sm" disabled><h2><?= $try['nilai']; ?></h2></button>
                     

                </td>
                <td align="center">

                  <a href="<?= base_url();?>admin/sertifikat/<?= $try['id_peserta']; ?>" target="_blank" class="badge badge-primary" >Sertifikat</a>
                   
                    <a href="<?= base_url();?>admin/hapus_peserta/<?= $try['id_peserta']; ?>" class="badge badge-danger"  onclick="return confirm('Yakin Ingin Menghapus ?');">Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
        <!-- <tfoot>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Jurusan</th>
                <th>Asal Sekolah</th>
                <th>Paket</th>
                <th>Bukti Bayar</th>
                <th>Status Pembayaran</th>
                <th>Absen Pagi</th>
                <th>Snack</th>
                <th>Absen Siang</th>
                <th>Makan Siang</th>
                <th>Status</th>
                <th>Nilai</th>
                <th>Action</th>
            </tr>
        </tfoot> -->
    </table>
    <hr>
    <h4 class="text ml-2 mt-3">PROFIL ADMIN</h4>
    <?php       
$row = $this->db->query("SELECT * FROM tbl_admin where email_admin='".$this->session->email_admin."'")->row_array();
  ?>
  <div class="row">
    <div class="col-md-6 justify-content-center">
       <table class="table text-dark">
              
              <tr>
                <td>Nama</td><td>: <?= $row['nama_admin']; ?></td>
              </tr>
              <tr>
                <td>Jenis Kelamin</td><td>: <?= $row['jenis_kelamin']; ?></td>
              </tr>
              <tr>
                <td>Email</td><td>: <?= $row['email_admin']; ?></td>
              </tr>
              <tr>
                <td>Password</td><td>: <?= $row['password']; ?></td>
              </tr>
            </table>
    </div>
  </div>
</div>
<div class="footer">
<H6 class="text-center">copyright@ikhlasulamal2019</H6>
</div>
</body>
</html>
