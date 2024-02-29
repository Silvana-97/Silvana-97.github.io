<br><br><br><br><br><div class="banner_inner_content_agile_w3l"></div>
<div class="about">
		<div class="container">
			<h3 class="heading-agileinfo">AMIK MBP MEDAN<span>Informasi Mahasiswa Yang Telah Mendaftarkan Diri</span></h3>
			<div class="col-md-12 about-w3right">
            
            <table id="dataTables" class="display" cellspacing="0" width="100%" style="font-size:12px">
                    <thead>
                        <tr>
                            <th>NO.</th>
                            <th>TGL. DAFTAR</th>
                            <th>NAMA</th>
                            <th>TPT/TGL. LAHIR</th>
                            <th>KELAMIN</th>
                            <th>JENIS BEASISWA</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <?php
											$counter = 1; 
											include"koneksi.php";
											$kd_tahunajaran="$_GET[kd_tahunajaran]";
												$query = mysql_query("select * from pendaftaran,jenis_beasiswa where pendaftaran.kd_jenisbeasiswa=jenis_beasiswa.kd_jenisbeasiswa order by npm DESC");
												while($row=mysql_fetch_array($query))
												{
                                                echo '
                                                <tr>
                                                    <td>'.$counter.'</td>
													<td>'.$row['tgl_registrasi'].'</td>
                                                    <td align="justify">'.$row['nm_mahasiswa'].'</td>
                                                    <td>'.$row['tpt_lahir'].' / '.$row['tgl_lahir'].'</td>
                                                    <td align="justify">'.$row['jns_kelamin'].'</td>
                                                    <td>'.$row['nm_jenisbeasiswa'].'</td>
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