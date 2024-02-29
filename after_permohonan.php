<?php
include 'koneksi.php';
$id_permohonan=$_GET['id_permohonan'];

$sql=mysql_query("select*from permohonan,pendaftaran,jenis_beasiswa where permohonan.npm=pendaftaran.npm and pendaftaran.kd_jenisbeasiswa=jenis_beasiswa.kd_jenisbeasiswa");

$row=mysql_fetch_array(mysql_query("select*from permohonan,pendaftaran WHERE permohonan.npm=pendaftaran.npm and id_permohonan='$id_permohonan'"));
$kode = $row['id_permohonan']; // ambil nis siswa (unik)
$cinta = $row['nm_mahasiswa']; // ambil nama siswa
?>
<br><br><br><br><br><div class="banner_inner_content_agile_w3l"></div>
<div class="about">
		<div class="container">
			<h3 class="heading-agileinfo">BUKTI PERMOHONAN BEASISWA <?php echo $cinta; ?><span>Akademik Manajemen Informatika Komputer Medan</span></h3>
			<div class="col-md-12 about-w3right">
            
            Terima Kasih <font color="#FF0000"><?php echo $cinta; ?></font> Data Pendaftaran Permohonan Beasiswa Anda Telah Kami Terima. Silahkan Anda Download Bukti Pendaftaran Permohonan Penerimaan Beasiswa Berikut ini.
<p><br /></p>
<font color="red">Perhatian : Simpan Account anda dengan baik.</font><br><br>
Gunakan Bukti Permohonan ini pada saat mengikuti Ujian Seleksi.<br><br>
<div align="center">
<b><br /><br />

                <div align="center">
                    <?php echo"<a href=buktipermohonan.php?id_permohonan=$kode target=\"_blank\"><h3>DOWNLOAD BUKTI KELULUSAN BERKAS</h3></a>"; ?>
                </div>
                <br /><br /><br /><br />
			</div>
			<div class="clearfix"> </div>
		</div>
</div>