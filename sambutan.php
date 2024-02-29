<?php
include("koneksi.php");
$cr_status=mysql_query("select * from content where menu_link='Sambutan'");
$baris=mysql_fetch_array($cr_status);
if ($baris['status_content']=="Y")
{
?>
<br><br><br><br><br><div class="banner_inner_content_agile_w3l"></div>
<div class="about">
		<div class="container">
			<h3 class="heading-agileinfo">AMIK MBP MEDAN<span><?php echo"$baris[judul_content]" ?></span></h3>
			<div class="col-md-12 about-w3right">
            <?php echo"$baris[isi_content]" ?>
			</div>
			<div class="clearfix"> </div>
		</div>
</div>
<?php
}
else
{
?>

<br><br><br><br><br><div class="banner_inner_content_agile_w3l"></div>
<div class="about">
		<div class="container">
			<h3 class="heading-agileinfo">AMIK MBP MEDAN<span>Akademik Manajemen Informatika Komputer Medan</span></h3>
			<div class="col-md-12 about-w3right">
            <h1>MAAF INFORMASI YANG ANDA CARI TIDAK TERSEDIA</h1>
			</div>
			<div class="clearfix"> </div>
		</div>
</div>

<?php
}
?>