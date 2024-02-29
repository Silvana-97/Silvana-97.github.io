<?php
include"koneksi.php";
$kd_jadwal=$_GET['kd_jadwal'];
$data=mysql_query("select * from jadwal,jenis_beasiswa where jadwal.kd_jenisbeasiswa=jenis_beasiswa.kd_jenisbeasiswa and kd_jadwal='$_GET[kd_jadwal]'");
$data2=mysql_fetch_array($data);
?>
<br><br><br><br><br><div class="banner_inner_content_agile_w3l"></div>
<div class="about">
		<div class="container">
			<h3 class="heading-agileinfo">AMIK MBP MEDAN<span>Informasi Detail Jadwal</span></h3>
			<div class="col-md-12 about-w3right">
            	<table id="example1" class="table table-bordered table-striped" width="100%">
                     <tr>
                       <td>KODE JADWAL</td>
                       <td>:</td>
                       <td><?php echo "$data2[kd_jadwal]";?></td>
                     </tr>
                     <tr>
                       <td>JUDUL JADWAL</td>
                       <td>:</td>
                       <td><?php echo "$data2[judul_jadwal]";?></td>
                     </tr>
                     <tr>
                       <td>NAMA JENIS BEASISWA</td>
                       <td>:</td>
                       <td><?php echo "$data2[nm_jenisbeasiswa]";?></td>
                     </tr>
                     <tr>
                       <td>KUOTA PENERIMAAN</td>
                       <td>:</td>
                       <td><?php echo "$data2[kuota]";?> ORANG</td>
                     </tr>
                     <tr>
                       <td>BESAR BEASISWA</td>
                       <td>:</td>
                       <td><b>Rp. <?php echo number_format("$data2[jlh_beasiswa]"). ""?></b></td>
                     </tr>
                     <tr>
                       <td colspan="3">KETERANGAN JADWAL</td>
                     </tr>
                     <tr>
                       <td colspan="3"><?php echo "$data2[isi_jadwal]";?></td>
                     </tr>
                  </table>
			</div>
			<div class="clearfix"> </div>
		</div>
</div>