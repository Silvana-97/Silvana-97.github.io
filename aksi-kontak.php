<?php
include ('koneksi.php');
$id=$_POST['id'];
$tanggal=$_POST['tanggal'];
$nama=$_POST['nama'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$tgl=date('Ymd');
$tanggal=date('Y-m-d');
$status="N";
$query="INSERT INTO kontakkami (id,nama,email,phone,subject,message,tanggal) values ('','$nama','$email','$phone','$subject','$message','$tanggal')" or die(mysql_error());
$tambah=mysql_query($query);			
	if($query)
	{
			?>
			<script language="JavaScript">
			alert('Terimakasih Anda Telah Mengirimkan Pesan Untuk Kami...!');
			document.location='index.php?page=24';
		</script>
<?php		
}
?>