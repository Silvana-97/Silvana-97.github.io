<br><br><br><br><br><div class="banner_inner_content_agile_w3l"></div>
<div class="about">
		<div class="container">
			<h3 class="heading-agileinfo">AMIK MBP MEDAN<span>Informasi Mahasiswa Yang Berhak Menerima Beasiswa</span></h3>
			<div class="col-md-12 about-w3right">
            
            <table id="dataTables" class="display" cellspacing="0" width="100%" style="font-size:12px">
                    <thead>
                        <tr>
                            <th width="5%">No</th>
                            <th>NPM</th>
                            <th>NAMA SISWA</th>
                            <th>TPT/TGL. LAHIR</th>
                            <th>TGL. DAFTAR</th>
                            <th>TGL. MOHON</th>
                            <th>TGL. SAH</th>
                            <th>JENIS BEASISWA</th>
                            <th>KUOTA</th>
                            <th>JLH. BEASISWA</th>
                            <th>T.A</th>
                         </tr>
                    </thead>
                    
                    <tbody>
                        <?php
											$counter = 1; 
											include"koneksi.php";
											$query = mysql_query("select * from penerima,seleksi_ujian,permohonan,pendaftaran,jenis_beasiswa,tahunakademik where penerima.kd_seleksiujian=seleksi_ujian.kd_seleksiujian and seleksi_ujian.id_permohonan=permohonan.id_permohonan and permohonan.npm=pendaftaran.npm and pendaftaran.kd_jenisbeasiswa=jenis_beasiswa.kd_jenisbeasiswa and penerima.kd_tahunakademik=tahunakademik.kd_tahunakademik order by kd_penerima DESC");
												while($row=mysql_fetch_array($query))
												{
                                                echo '
                                                <tr>
                                                    <td>'.$counter.'</td>
													<td>'.$row['npm'].'</td>
                                                    <td>'.$row['nm_mahasiswa'].'</td>
                                                    <td>'.$row['tpt_lahir'].' / '.$row['tgl_lahir'].'</td>
                                                    <td>'.$row['tgl_registrasi'].'</td>
                                                    <td>'.$row['tgl_permohonan'].'</td>
													<td>'.$row['tgl_pengesahan'].'</td>
													<td>'.$row['nm_jenisbeasiswa'].'</td>
													<td>'.$row['kuota'].' ORANG</td>
													<td><b>Rp. '.number_format($row[jlh_beasiswa],0,',','.').'</b></td>
													<td>'.$row['tahunakademik'].'</td>
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