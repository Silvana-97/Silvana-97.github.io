<br><br><br><br><br><div class="banner_inner_content_agile_w3l"></div>
<div class="about">
		<div class="container">
			<h3 class="heading-agileinfo">AMIK MBP MEDAN<span> Informasi Syarat-syarat Penerimaan Beasiswa</span></h3>
			<div class="col-md-12 about-w3right">
            <table id="dataTables" class="display" cellspacing="0" width="100%" style="font-size:12px;">
                                            <thead>
                                                <tr>
                                                    <th>NO.</th>
                                                    <th>NAMA JENIS BEASISWA</th>
                                                    <th>JUDUL CONTENT BEASISWA</th>
                                                    <th>AKSI</th>
                                                </tr>
                                            </thead>
                                            
                                            <tbody>
                                                <?php
												$counter = 1; 
												include"koneksi.php";
													$query = mysql_query("select * from content_beasiswa,jenis_beasiswa where content_beasiswa.kd_jenisbeasiswa=jenis_beasiswa.kd_jenisbeasiswa and kategori_cbeasiswa='Syarat' and status_cbeasiswa='Y' order by id_cbeasiswa DESC");
													while($row=mysql_fetch_array($query))
													{
													echo '
													<tr>
														<td>'.$counter.'</td>
														<td>'.$row['nm_jenisbeasiswa'].'</td>
														<td>'.$row['judul_cbeasiswa'].'</td>
														<td><a href=?page=11&id_cbeasiswa='.$row[id_cbeasiswa].'>Tampil</a></td>
														</td>
													</tr>
													';
													$counter ++;
												}
												?>
                                            </tbody>
                                        </table>
			</div>
			<div class="clearfix"> </div>
		</div>
</div>
<script src="js/jquery-1.12.0.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script>
	$(document).ready(function() {
		$('#dataTables').DataTable();
	} );
	</script>