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
			<h3 class="heading-agileinfo">LOGIN PERMOHONAN BEASISWA<span>Akademik Manajemen Informatika Komputer Medan</span></h3>
			<div class="col-md-12 about-w3right">
            <form action="proseslogin_permohonan.php" method="post">
                <table width="100%">
                <tbody>
                <tr>
                    <td height="57"><label>MASUKKAN USERNAME ANDA</label></td>
                  <td>:</td>
                    <td><input name="npm" type="text" placeholder="MASUKKAN NPM ANDA" class="form-control" size="50" /></td>
                </tr>
                <tr>
                    <td height="68"><label>MASUKKAN PASSWORD ANDA</label></td>
                  <td>:</td>
                    <td><input name="tgl_seleksi" type="password" class="form-control" size="50" placeholder="MASUKKAN PASSWORD ANDA" /></td>
                </tr>
                <tr>
                    <td colspan="3" align="right">
                    <input type="submit" value="LOGIN PENDAFTAR" class="btn btn-sm btn-danger" />
                    </td>
                </tr>
                </tbody>
                </table>
                </form>
			</div>
			<div class="clearfix"> </div>
		</div>
</div>