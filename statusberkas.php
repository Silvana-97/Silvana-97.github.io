<?php
require 'koneksi.php';
session_start();
$npm = $_SESSION['npm'];
$tgl_registrasi = $_SESSION['tgl_registrasi'];
$nm_mahasiswa = $_SESSION['nm_mahasiswa'];
$password = $_SESSION['password'];
$tpt_lahir = $_SESSION['tpt_lahir'];
$tgl_lahir = $_SESSION['tgl_lahir'];
$jns_kelamin = $_SESSION['jns_kelamin'];
$agama = $_SESSION['agama'];
$alamat = $_SESSION['alamat'];
$no_telpon = $_SESSION['no_telpon'];
$alamat_ortu = $_SESSION['alamat_ortu'];
$nm_ayah = $_SESSION['nm_ayah'];
$pekerjaan_ayah = $_SESSION['pekerjaan_ayah'];
$nm_ibu = $_SESSION['nm_ibu'];
$pekerjaan_ibu = $_SESSION['pekerjaan_ibu'];
$anak_keberapa = $_SESSION['anak_keberapa'];
$jlh_tanggungan = $_SESSION['jlh_tanggungan'];
$penghasilan_perbulan = $_SESSION['penghasilan_perbulan'];
$jenis_rumah = $_SESSION['jenis_rumah'];
$kd_jenisbeasiswa = $_SESSION['kd_jenisbeasiswa'];
$file_berkas = $_SESSION['file_berkas'];
$status_pendaftaran = $_SESSION['status_pendaftaran'];
?>
<br><br><br><br><br><div class="banner_inner_content_agile_w3l"></div>
<div class="about">
		<div class="container">
			<h3 class="heading-agileinfo">HASIL SELEKSI BERKAS<span>Akademik Manajemen Informatika Komputer Medan</span></h3>
			<div class="col-md-12 about-w3right">
            
            <?php
                $query  = mysql_query("SELECT * FROM seleksi_berkas,pendaftaran,jenis_beasiswa WHERE seleksi_berkas.npm=pendaftaran.npm and pendaftaran.kd_jenisbeasiswa=jenis_beasiswa.kd_jenisbeasiswa and pendaftaran.npm='$npm'");
				$kelulusan   = mysql_fetch_array($query);
				
				$query1  = mysql_query("SELECT * FROM pendaftaran,jenis_beasiswa WHERE pendaftaran.kd_jenisbeasiswa=pendaftaran.kd_jenisbeasiswa ");
				$lls   = mysql_fetch_array($query1);
				
				?>
                <table id="dataTables" class="display" cellspacing="0" width="100%">
                	<tr>
                    	<td align="left" width="25%">NPM PENDAFTAR</td>
                        <td width="5%">:</td>
                        <td width="30%" align="left"><?php echo"$npm" ?></td>
                        <td width="30%" rowspan="6" align="center"><b>UNTUK SELEKSI BERKAS ANDA DINYATAKAN <BR /><BR /><H2>
						
						<?php echo"$kelulusan[status_lulus_berkas]" ?></H2>
                        
                        MENGIKUTI UJIAN ATAU TAHAPAN SELANJUTNYA</b>
                        </td>
                    </tr>
                    <tr>
                    	<td align="left">NAMA MAHASISWA</td>
                        <td>:</td>
                        <td align="left"><?php echo"$nm_mahasiswa" ?></td>
                    </tr>
                    <tr>
                    	<td align="left">TPT/TGL. LAHIR</td>
                        <td>:</td>
                        <td align="left"><?php echo"$tpt_lahir" ?> / <?php echo"$tgl_lahir" ?></td>
                    </tr>
                    <tr>
                    	<td align="left">TANGGAL DAFTAR</td>
                        <td>:</td>
                        <td align="left"><?php echo"$kelulusan[tgl_registrasi]" ?></td>
                    </tr>
                    <tr>
                    	<td align="left">JENIS BEASISWA</td>
                        <td>:</td>
                        <td align="left"><?php echo"$kelulusan[nm_jenisbeasiswa]" ?></td>
                    </tr>
                </table><br /><br />
                <div align="center">
                    <?php echo"<a href=buktikelulusanberkas.php?kd_seleksiberkas=$kelulusan[kd_seleksiberkas] target=\"_blank\"><h3>DOWNLOAD BUKTI KELULUSAN BERKAS</h3></a>"; ?>
                </div>
            
			</div>
			<div class="clearfix"> </div>
		</div>
</div>