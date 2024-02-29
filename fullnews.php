<?php include"koneksi.php";
$no=$_GET[no];
$query=mysql_query("select * from berita where no='$_GET[no]'");
while($baris=mysql_fetch_array($query))
{
?>
<br><br><br><br><br><div class="banner_inner_content_agile_w3l"></div>
<div class="about">
		<div class="container">
			<h3 class="heading-agileinfo">AMIK MBP MEDAN<span><?php echo"$baris[judul]" ?></span></h3>
			<div class="col-md-12 about-w3right">
            <p align="justify">
            <?php echo"<img src=\"admin/img/berita/$baris[photo]\" border=\"0\" width=\"100%\">"?><br /><br />
            <?php $isi=nl2br(stripslashes($baris['isi']));  echo"$isi"; ?><br /><br />
            Sumber Berita : <?php echo"$baris[pengirim]" ?>
            </p>
			</div>
			<div class="clearfix"> </div>
		</div>
</div>
<?php
}
?>