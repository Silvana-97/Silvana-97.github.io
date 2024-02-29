<?php
include"koneksi.php";
$id_cbeasiswa=$_GET['id_cbeasiswa'];
$data=mysql_query("select * from content_beasiswa,jenis_beasiswa where content_beasiswa.kd_jenisbeasiswa=jenis_beasiswa.kd_jenisbeasiswa and id_cbeasiswa='$_GET[id_cbeasiswa]'");
$data2=mysql_fetch_array($data);
?>
<br><br><br><br><br><div class="banner_inner_content_agile_w3l"></div>
<div class="about">
		<div class="container">
			<h3 class="heading-agileinfo">AMIK MBP MEDAN<span>Informasi Detail Prosedur Penerimaan Beasiswa</span></h3>
			<div class="col-md-12 about-w3right">
            	<table id="example1" class="table table-bordered table-striped" width="100%">
                     <tr>
                       <td>KODE JENIS BEASISWA</td>
                       <td>:</td>
                       <td><?php echo "$data2[kd_jenisbeasiswa]";?></td>
                     </tr>
                     <tr>
                       <td>NAMA JENIS BEASISWA</td>
                       <td>:</td>
                       <td><?php echo "$data2[nm_jenisbeasiswa]";?></td>
                     </tr>
                     <tr>
                       <td>KATEGORI KONTEN</td>
                       <td>:</td>
                       <td><?php echo "$data2[kategori_cbeasiswa]";?></td>
                     </tr>
                     <tr>
                       <td>JUDUL KONTEN</td>
                       <td>:</td>
                       <td><b><?php echo "$data2[judul_cbeasiswa]";?></b></td>
                     </tr>
                     <tr>
                       <td colspan="3">INFORMASI PROSEDUR PENERIMAAN BEASISWA</td>
                     </tr>
                     <tr>
                       <td colspan="3"><?php echo "$data2[isi_cbeasiswa]";?></td>
                     </tr>
                  </table>
			</div>
			<div class="clearfix"> </div>
		</div>
</div>