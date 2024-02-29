<?php
$npm=$_POST['npm'];
$tgl_seleksi=$_POST['tgl_seleksi'];

if ($npm == "" || $tgl_seleksi == "")
{
   echo"<script>alert('Maaf, npm atau tgl_seleksi anda masih kosong',document.location.href='javascript:history.back(0)')</script>";
}
else
{
include("koneksi.php");
$sql="select * from seleksi_berkas where (status_lulus_berkas = 'LULUS') and (npm = '".$_POST['npm']. "') and (tgl_seleksi = '".($_POST['tgl_seleksi']). "')";
$query=mysql_query($sql);
$row=mysql_fetch_array($query);
if($row[npm]==$npm and $row[tgl_seleksi]==$tgl_seleksi)
{
session_start();
session_register("npm");
session_register("tgl_registrasi");
session_register("nm_mahasiswa");
session_register("password");
session_register("tpt_lahir");
session_register("tgl_lahir");
session_register("jns_kelamin");
session_register("agama");
session_register("alamat");
session_register("no_telpon");
session_register("alamat_ortu");
session_register("nm_ayah");
session_register("pekerjaan_ayah");
session_register("nm_ibu");
session_register("pekerjaan_ibu");
session_register("anak_keberapa");
session_register("jlh_tanggungan");
session_register("penghasilan_perbulan");
session_register("jenis_rumah");
session_register("kd_jenisbeasiswa");
session_register("file_berkas");
session_register("status_pendaftaran");


$npm=$row[npm];
$nm_mahasiswa=$row[nm_mahasiswa];
$nm_siswa=$row[nm_siswa];
$password=$row[password];
$tpt_lahir=$row[tpt_lahir];
$tgl_lahir=$row[tgl_lahir];
$jns_kelamin=$row[jns_kelamin];
$agama=$row[agama];
$alamat=$row[alamat];
$no_telpon=$row[no_telpon];
$alamat_ortu=$row[alamat_ortu];
$nm_ayah=$row[nm_ayah];
$pekerjaan_ayah=$row[pekerjaan_ibu];
$anak_keberapa=$row[anak_keberapa];
$jlh_tanggungan=$row[jlh_tanggungan];
$penghasilan_perbulan=$row[penghasilan_perbulan];
$jenis_rumah=$row[jenis_rumah];
$kd_jenisbeasiswa=$row[kd_jenisbeasiswa];
$file_berkas=$row[file_berkas];
$status_pendaftaran=$row[status_pendaftaran];

{header("location:index.php?page=21");
}}
else
{
 echo"<script>alert('Maaf, npm dan password anda salah silahkan login kembali dengan benar',document.location.href='?page=19')</script>";
}}
?>