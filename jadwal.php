<br><br><br><br><br><div class="banner_inner_content_agile_w3l"></div>
<div class="about">
		<div class="container">
			<h3 class="heading-agileinfo">AMIK MBP MEDAN<span>Jenis-jenis Beasiswa</span></h3>
			<div class="col-md-12 about-w3right">
            <h3>JADWAL SELEKSI BERKAS</h3>
            <table id="dataTables" class="display" cellspacing="0" width="100%" style="font-size:13px;">
                                            <thead>
                                                <tr>
                                                    <th>NO.</th>
                                                    <th>NAMA JENIS BEASISWA</th>
                                                    <th>TANGGAL PELAKSANAAN</th>
                                                    <th>JUDUL JADWAL</th>
                                                    <th>AKSI</th>
                                                </tr>
                                            </thead>
                                            
                                            <tbody>
                                                <?php
												$counter = 1; 
												include"koneksi.php";
													$query = mysql_query("select * from jadwal,jenis_beasiswa where jadwal.kd_jenisbeasiswa=jenis_beasiswa.kd_jenisbeasiswa and kategori='Seleksi Berkas' and status_jadwal='Y' order by kd_jadwal DESC");
													while($row=mysql_fetch_array($query))
													{
													echo '
													<tr>
														<td>'.$counter.'</td>
														<td>'.$row['nm_jenisbeasiswa'].'</td>
														<td>'.$row['tgl_pelaksanaan'].'</td>
														<td>'.$row['judul_jadwal'].'</td>
														<td><a href=?page=9&kd_jadwal='.$row[kd_jadwal].'>Tampil</a></td>
														</td>
													</tr>
													';
													$counter ++;
												}
												?>
                                            </tbody>
                                        </table>
            <br /><br />
            <h3>JADWAL SELEKSI UJIAN</h3>
            <table id="dataTables" class="display" cellspacing="0" width="100%" style="font-size:13px;">
                                            <thead>
                                                <tr>
                                                    <th>NO.</th>
                                                    <th>NAMA JENIS BEASISWA</th>
                                                    <th>TANGGAL PELAKSANAAN</th>
                                                    <th>JUDUL JADWAL</th>
                                                    <th>AKSI</th>
                                                </tr>
                                            </thead>
                                            
                                            <tbody>
                                                 <?php
												$counter = 1; 
												include"koneksi.php";
													$query = mysql_query("select * from jadwal,jenis_beasiswa where jadwal.kd_jenisbeasiswa=jenis_beasiswa.kd_jenisbeasiswa and kategori='Seleksi Berkas' and status_jadwal='Y' order by kd_jadwal DESC");
													while($row=mysql_fetch_array($query))
													{
													echo '
													<tr>
														<td>'.$counter.'</td>
														<td>'.$row['nm_jenisbeasiswa'].'</td>
														<td>'.$row['tgl_pelaksanaan'].'</td>
														<td>'.$row['judul_jadwal'].'</td>
														<td><a href=?page=9&kd_jadwal='.$row[kd_jadwal].'>Tampil</a></td>
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