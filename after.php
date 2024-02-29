<?php
include 'koneksi.php';
$npm=$_GET['npm'];

$sql=mysql_query("select*from pendaftaran");

$row=mysql_fetch_array(mysql_query("select*from pendaftaran WHERE npm='$npm'"));
$kode = $row['npm']; // ambil nis siswa (unik)
$cinta = $row['nm_mahasiswa']; // ambil nama siswa
?>
<br><br><br><br><br><div class="banner_inner_content_agile_w3l"></div>
<div class="about">
		<div class="container">
			<h3 class="heading-agileinfo">BUKTI PENDAFTARAN <?php echo $cinta; ?><span>Akademik Manajemen Informatika Komputer Medan</span></h3>
			<div class="col-md-12 about-w3right">
            
            Terima Kasih <font color="#FF0000"><?php echo $cinta; ?></font> Data Pendaftaran Anda Telah Kami Terima. Silahkan Anda Download Bukti Pendaftaran Penerimaan Beasiswa Berikut ini.
<p><br /></p>
<font color="red">Perhatian : Simpan Account anda dengan baik.</font><br><br>
Gunakan account tersebut untuk Login dan melihat pengumuman.<br><br>
<div align="center">
<b><br /><br />
<a href="javascript:void(0);"
    onclick="window.open('buktipendaftaran.php?kode=<?php echo $kode; ?>','nama_window_pop_up','size=800,height=800,scrollbars=yes,resizeable=no')">DOWNLOAD BUKTI PENDAFTARAN</a>  <br /><br />
            
			</div>
			<div class="clearfix"> </div>
		</div>
</div>