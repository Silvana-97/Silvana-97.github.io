<?php
require 'koneksi.php';
session_start();
$kd_seleksiberkas = $_SESSION['kd_seleksiberkas'];
$tgl_selekesi = $_SESSION['tgl_seleksi'];
$npm = $_SESSION['npm'];
$status_lulus_berkas  = $_SESSION['status_lulus_berkas '];
{
	?>
<br><br><br><br><br><div class="banner_inner_content_agile_w3l"></div>
<div class="about">
		<div class="container">
			<h3 class="heading-agileinfo">FORMULIR PERMOHONAN BEASISWA<span>Akademik Manajemen Informatika Komputer Medan</span></h3>
			<div class="col-md-12 about-w3right">
            
            <?php
                        include("koneksi.php");
                        $daftar=mysql_query("select count(id_permohonan) as urut from permohonan");
                        $h_daftar=mysql_fetch_array($daftar);
                        $jlh=$h_daftar[urut]+1;
                        $tgl=date('Ymd');
                        $tgl2=date('Y-m-d');
                        $akhir="MHN-$tgl-$jlh";
                        
                        if (isset($_POST[simpan]))
                            {
                            if ($_POST[id_permohonan] == "")
                            {
                            echo"<script>window.alert('Silakan Isi Data Nomor ID Permohonan Anda !'); document.location.href='javascript:history.back(0)';</script>";
                            }
                            elseif ($_POST[tgl_permohonan] == "")
                            {
                            echo"<script>window.alert('Silakan Isi Data Tanggal Permohonan Anda !'); document.location.href='javascript:history.back(0)';</script>";
                            }
                            elseif ($_POST[npm] == "")
                            {
                            echo"<script>window.alert('Silakan Isi Data Nomor Pokok Mahasiswa Anda !'); document.location.href='javascript:history.back(0)';</script>";
                            }
                            elseif ($_POST[alasan_permohonan] == "")
                            {
                            echo"<script>window.alert('Silakan Isi Data Alasan Permohonan Anda !'); document.location.href='javascript:history.back(0)';</script>";
                            }
                            else
                            {
                            mysql_query("insert into permohonan values (
                            '$_POST[id_permohonan]','$_POST[tgl_permohonan]','$_POST[npm]','$_POST[alasan_permohonan]','$_POST[status_permohonan]')");
                            echo "<meta http-equiv='refresh' content='0; url=?page=22&id_permohonan=$_POST[id_permohonan]'>";
                            }
                            }
                        else
                            {}
                            
                        
                        ?>
                        <script type="text/javascript" src="jscripts/tiny_mce/tiny_mce.js"></script>
						<script type="text/javascript" src="jscripts/standart.js"></script>
                        
                        <form action="" method="post" enctype="multipart/form-data" name="frm">
                        <table width="100%" bgcolor="#FFFFFF">
                            <tr>
                                <td colspan="7">
                                <table width="100%">
                                    <tr>
                                        <td height="41"><label>NOMOR PERMOHONAN</label></td>
                                      <td><label>:</label></td>
                                        <td>
                                        <input type="hidden" name="id_permohonan" value="<?php echo"$akhir"; ?>">
                                        <label><?php echo"$akhir"; ?></label>
                                        <input type="hidden" name="status_permohonan" value="N"></td>
                                  </tr>
                                    <tr>
                                        <td height="42"><label>TGL. PENGAJUAN PERMOHONAN</label></td>
                                    <td><label>:</label></td>
                                        <td><input type="hidden" name="tgl_permohonan" value="<?php echo"$tgl2"; ?>">
                                        <label><?php
                                        $tgl3=date('d - M - Y');
                                        echo"$tgl3";
                                        ?></label>
                                        </td>
                                  </tr>
                                    <tr>
                                        <td height="40"><label>NPM MAHASISWA</label></td>
                                    <td><label>:</label></td>
                                        <td>
                                        <input type="hidden" name="npm" value="<?php echo"$npm"; ?>"><label><?php echo"$npm"; ?></label></td>
                                    </tr>
                                    <tr>
                                        <td><label>ALASAN PERMOHONAN</label></td>
                                        <td><label>:</label></td>
                                        <td>
                                        <textarea class="textarea" name="alasan_permohonan" placeholder="Place some text here" style="width: 100%; height: 300px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                        </td>
                                  </tr>
                                  <tr>
                                    <td colspan="3" align="right">
                                        <input type="submit" name="simpan" value="Kirim Permohonan" />
                                    </td>
                                </tr>
                        </table>
                        </table>
                        </form>
            
			</div>
			<div class="clearfix"> </div>
		</div>
</div>
<?php
}
?>