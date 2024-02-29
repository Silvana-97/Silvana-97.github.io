<?php
include"koneksi.php";
$kd_jenisbeasiswa=$_GET['kd_jenisbeasiswa'];
$data=mysql_query("select * from jenis_beasiswa where kd_jenisbeasiswa='$_GET[kd_jenisbeasiswa]'");
$data2=mysql_fetch_array($data);
?>
<br><br><br><br><br><div class="banner_inner_content_agile_w3l"></div>
<div class="about">
		<div class="container">
			<h3 class="heading-agileinfo">AMIK MBP MEDAN<span> Informasi Detail Jenis Beasiswa</span></h3>
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
                       <td>KUOTA PENERIMAAN</td>
                       <td>:</td>
                       <td><?php echo "$data2[kuota]";?></td>
                     </tr>
                     <tr>
                       <td>BESAR BEASISWA</td>
                       <td>:</td>
                       <td><b>Rp. <?php echo number_format("$data2[jlh_beasiswa]"). ""?></b></td>
                     </tr>
                     <tr>
                       <td colspan="3">KETERANGAN BEASISWA</td>
                     </tr>
                     <tr>
                       <td colspan="3"><?php echo "$data2[deskripsi_beasiswa]";?></td>
                     </tr>
                  </table>
			</div>
			<div class="clearfix"> </div>
		</div>
</div>