<br><br><br><br><br><div class="banner_inner_content_agile_w3l"></div>
<div class="about">
		<div class="container">
			<h3 class="heading-agileinfo">AMIK MBP MEDAN<span>Jenis-jenis Beasiswa</span></h3>
			<div class="col-md-12 about-w3right">
            <table id="dataTables" class="display" cellspacing="0" width="100%" style="font-size:13px;">
                                            <thead>
                                                <tr>
                                                    <th>NO.</th>
                                                    <th>NAMA JENIS BEASISWA</th>
                                                    <th>KUOTA</th>
                                                    <th>BESAR BEASISWA</th>
                                                    <th>AKSI</th>
                                                </tr>
                                            </thead>
                                            
                                            <tbody>
                                                <?php
												$counter = 1; 
												include"koneksi.php";
													$query = mysql_query("select * from jenis_beasiswa where status_jenisbeasiswa='Y' order by kd_jenisbeasiswa DESC");
													while($row=mysql_fetch_array($query))
													{
													echo '
													<tr>
														<td>'.$counter.'</td>
														<td>'.$row['nm_jenisbeasiswa'].'</td>
														<td>'.$row['kuota'].' ORANG</td>
														<td><b>Rp. '.number_format($row[jlh_beasiswa],0,',','.').'</b></td>
														<td><a href=?page=7&kd_jenisbeasiswa='.$row[kd_jenisbeasiswa].'>Tampil</a></td>
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