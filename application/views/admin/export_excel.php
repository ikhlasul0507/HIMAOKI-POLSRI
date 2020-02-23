 <?php
 
 header("Content-type: application/vnd-ms-excel");
 
 header("Content-Disposition: attachment; filename=$title.xls");
 
 header("Pragma: no-cache");
 
 header("Expires: 0");
 
 ?>
<h4 class="text-center">DATA PESERTA TRY OUT UMPN POLSRI TAHUN <?= date('Y'); ?></h4>
<table border="1">
       
            <tr>
            	 <th>No</th>
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
                
            </tr>
            <?php 
            $no=1;
            foreach ($peserta as $try):?>
            <tr>
            	<td><?= $no++; ?></td>
                <td><?= $try['nama_peserta']; ?></td>
                <td><?= $try['handphone_peserta']; ?></td>
                <td><?= $try['alamat_peserta']; ?></td>
                <td><?= $try['jurusan_peserta']; ?></td>
                <td><?= $try['sekolah_peserta']; ?></td>
                <td><?= $try['paket_peserta']; ?></td>
                <td><?= $try['bukti']; ?></td>>
                 
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
                    
                     <button type="button" class="btn btn-success btn-sm" disabled><h2><?= $try['nilai']; ?></h2></button>
                     

                </td>
               
            </tr>
            <?php endforeach; ?>
       
    </table>