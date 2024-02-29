<?php
session_start();
ob_start();
include_once("koneksi.php"); //buat koneksi ke database
$id_permohonan   = $_GET['id_permohonan']; //kode berita yang akan dikonvert
$query  = mysql_query("SELECT * FROM permohonan,pendaftaran,jenis_beasiswa where permohonan.npm=pendaftaran.npm and pendaftaran.kd_jenisbeasiswa=jenis_beasiswa.kd_jenisbeasiswa and id_permohonan='".$id_permohonan."'");
$data   = mysql_fetch_array($query);

//Untuk menampilkan data kepala sekolah
//$kepsek  = mysql_query("SELECT * FROM tb_guru WHERE jabatan='Kepala Sekolah'");
//$kepsek_1   = mysql_fetch_array($kepsek);

?>
<html xmlns="http://www.w3.org/1999/xhtml"> <!-- Bagian halaman HTML yang akan konvert -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo $data['npm']; ?></title>
</head>
<body>
<?php
echo '<table border="0" width="100%">
  <tr>
    <td width="9%" rowspan="5" align="center"><img src="images/logo.png" width="100" height="105"></td>
    <td width="82%">&nbsp;</td>
    <td width="9%" rowspan="5" align="center"><!--<img src="images/tutwuri.png" width="100" height="105">--></td>
  </tr>
  <tr>
    <td align="center"><b>BUKTI PENGAJUAN PERMOHONAN PENERIMAAN BEASISWA</b></td>
  </tr>
  <tr>
    <td align="center">YAYASAN MANDIIRI BINA PRESTASI</td>
  </tr>
  <tr>
    <td align="center">AKADEMIK MANAJEMEN INFORMATIKA KOMPUTER MEDAN</td>
  </tr>
  <tr>
  	<td align="center" style="font-size:8px">Jl. Djamin Ginting No. 285-287 Kota Medan., Telp. (061) 821 7222</td>
  </tr>
  <tr>
  	<td colspan="3"><hr></td>
  </tr>
</table>';
?>
<?php
echo '<table border="0">
  <tr>
    <td width="200">NOMOR PERMOHONAN</td>
    <td width="10">:</td>
    <td width="250">'.$data['id_permohonan'].'</td>
  </tr>
  <tr>
    <td width="200">TANGGAL PENGAJUAN PERMOHONAN</td>
    <td width="10">:</td>
    <td width="250">'.$data['tgl_permohonan'].'</td>
  </tr>
  <tr>
    <td >NOMOR POKOK MAHASISWA</td>
    <td >:</td>
    <td >'.$data['npm'].'</td>
  </tr>
  <tr>
    <td>NAMA MAHASISWA</td>
    <td>:</td>
    <td>'.$data['nm_mahasiswa'].'</td>
  </tr>
  <tr>
    <td>TEMPAT & TANGGAL LAHIR</td>
    <td>:</td>
    <td>'.$data['tpt_lahir'].' & '.$data['tgl_lahir'].'</td>
  </tr>
   <tr>
    <td>JENIS KELAMIN</td>
    <td>:</td>
    <td>'.$data['jns_kelamin'].'</td>
  </tr>
  <tr>
    <td>JENIS BEASISWA YANG DIMOHON</td>
    <td>:</td>
    <td>'.$data['nm_jenisbeasiswa'].'</td>
  </tr>
</table>';

echo "<div align='justify'><p><p>SILAHKAN DIBAWA BUKTI PERMOHONAN INI PADA SAAT MENGIKUTI UJIAN SELEKSI</p></p></div><p><br></p>";
?>
</body>
</html><!-- Akhir halaman HTML yang akan di konvert -->
<?php
$filename="BEASISWA-".$kode.".pdf"; //ubah untuk menentukan nama file pdf yang dihasilkan nantinya
//==========================================================================================================
//Copy dan paste langsung script dibawah ini,untuk mengetahui lebih jelas tentang fungsinya silahkan baca-baca tutorial tentang HTML2PDF
//==========================================================================================================
$content = ob_get_clean();
$content = '<page style="font-family: freeserif">'.nl2br($content).'</page>';
 require_once(dirname(__FILE__).'/html2pdf/html2pdf.class.php');
 try
 {
  $html2pdf = new HTML2PDF('P','A4','en', false, 'ISO-8859-15',array(30, 0, 20, 0));
  $html2pdf->setDefaultFont('Arial');
  $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
  $html2pdf->Output($filename);
 }
 catch(HTML2PDF_exception $e) { echo $e; }
?>