<br><br><br><br><br><div class="banner_inner_content_agile_w3l"></div>
<div class="about">
		<div class="container">
			<h3 class="heading-agileinfo">FORMULIR PENDAFTARAN BEASISWA <span>Akademik Manajemen Informatika Komputer Medan</span></h3>
			<div class="col-md-12 about-w3right">
            
            <script language="javascript">
                function getkey(e)
                {
                if (window.event)
                   return window.event.keyCode;
                else if (e)
                   return e.which;
                else
                   return null;
                }
                function goodchars(e, goods, field)
                {
                var key, keychar;
                key = getkey(e);
                if (key == null) return true;
                 
                keychar = String.fromCharCode(key);
                keychar = keychar.toLowerCase();
                goods = goods.toLowerCase();
                 
                // check goodkeys
                if (goods.indexOf(keychar) != -1)
                    return true;
                // control keys
                if ( key==null || key==0 || key==8 || key==9 || key==27 )
                   return true;
                    
                if (key == 13) {
                    var i;
                    for (i = 0; i < field.form.elements.length; i++)
                        if (field == field.form.elements[i])
                            break;
                    i = (i + 1) % field.form.elements.length;
                    field.form.elements[i].focus();
                    return false;
                    };
                // else return false
                return false;
                }
                </script>
                        <?php
                        include("koneksi.php");
                        $photo=$_FILES[pasphoto_siswa][name];
                        $bukti=$_FILES[berkas_ijazah][name];
						$tgl=date('Ymd');
                        $tgl2=date('Y-m-d');
                        
                        //$f_photo="cpanel/file_berkas/";
                        //$f_photo2=$f_photo.basename($_FILES[pasphoto_siswa][name]);
                       // move_uploaded_file($_FILES[pasphoto_siswa][tmp_name],$f_photo2);
                        
                        $file_berkas="cpanel/file_berkas/";
                        $file_berkas=$file_berkas.basename($_FILES[file_berkas][name]);
                        move_uploaded_file($_FILES[file_berkas][tmp_name],$file_berkas);
                        
						
						
                        if (isset($_POST[simpan]))
                            {
                            if ($_POST[npm] == "")
                            {
                            echo"<script>window.alert('Silakan Isi Data NIS Anda !'); document.location.href='javascript:history.back(0)';</script>";
                            }
                            elseif ($_POST[nm_mahasiswa] == "")
                            {
                            echo"<script>window.alert('Silakan Isi Data NISDN Anda !'); document.location.href='javascript:history.back(0)';</script>";
                            }
                            elseif ($_POST[jns_kelamin] == "")
                            {
                            echo"<script>window.alert('Silakan Isi Data jenis kelamin Anda !'); document.location.href='javascript:history.back(0)';</script>";
                            }
                            elseif ($_POST[tgl_lahir] == "")
                            {
                            echo"<script>window.alert('Silakan Isi Data Tanggal Lahir Anda !'); document.location.href='javascript:history.back(0)';</script>";
                            }
                            elseif ($_POST[tpt_lahir] == "")
                            {
                            echo"<script>window.alert('Silakan Isi Data Tempat Lahir Anda !'); document.location.href='javascript:history.back(0)';</script>";
                            }
                            elseif ($_POST[agama] == "")
                            {
                            echo"<script>window.alert('Silakan Isi Data Agama Anda !'); document.location.href='javascript:history.back(0)';</script>";
                            }
                            elseif ($_POST[password] == "")
                            {
                            echo"<script>window.alert('Silakan Isi Data password Anda !'); document.location.href='javascript:history.back(0)';</script>";
                            }
                            elseif ($_POST[no_telpon] == "")
                            {
                            echo"<script>window.alert('Silakan Isi Data nomor telpon Anda !'); document.location.href='javascript:history.back(0)';</script>";
                            }
                            elseif ($_POST[alamat_ortu] == "")
                            {
                            echo"<script>window.alert('Silakan Isi Data Alamat Orangtua Anda !'); document.location.href='javascript:history.back(0)';</script>";
                            }
                            elseif ($_POST[nm_ayah] == "")
                            {
                            echo"<script>window.alert('Silakan Isi Data Nama Ayah Anda !'); document.location.href='javascript:history.back(0)';</script>";
                            }
                            elseif ($_POST[nm_ibu] == "")
                            {
                            echo"<script>window.alert('Silakan Isi Data Nama Ibu Anda !'); document.location.href='javascript:history.back(0)';</script>";
                            }
                            elseif ($file_berkas == "")
                            {
                            echo"<script>window.alert('Silahkan Isi Data File Berkas Pendaftaran Anda !'); document.location.href='javascript:history.back(0)';</script>";
                            }
                            else
                            {
								
							$status_pendaftaran="N";
							
                            mysql_query("insert into pendaftaran values (
                            '$_POST[npm]',
							'$_POST[tgl_registrasi]',
							'$_POST[nm_mahasiswa]',
							'$_POST[password]',
							'$_POST[tpt_lahir]',
							'$_POST[tgl_lahir]',
							'$_POST[jns_kelamin]',
							'$_POST[agama]',
                            '$_POST[alamat]',
							'$_POST[no_telpon]',
							'$_POST[alamat_ortu]',
							'$_POST[nm_ayah]',
							'$_POST[pekerjaan_ayah]',
							'$_POST[nm_ibu]',
							'$_POST[pekerjaan_ibu]',
                            '$_POST[anak_keberapa]',
							'$_POST[jlh_tanggungan]',
							'$_POST[penghasilan_perbulan]',
							'$_POST[jenis_rumah]',
							'$_POST[kd_jenisbeasiswa]',
                            '$file_berkas',
							'$_POST[status_pendaftaran]')");
                            echo "<meta http-equiv='refresh' content='0; url=?page=15&npm=$_POST[npm]'>";
                            }
                            }
                        else
                            {}
                            
                        
                        ?>
                        
                        <form action="" method="post" enctype="multipart/form-data" name="frm">
<table width="100%">
                                      <tr>
                                        <td width="48%"><span><label>NOMOR POKOK MAHASISWA</label></span></td>
                                        <td width="4%">&nbsp;</td>
                                        <td width="48%"><span><label>TANGGAL REGISTRASI</label></span></td>
                                      </tr>
                                      <tr>
                                        <td><input type="text"  name="npm" size="10" class="form-control" placeholder="" maxlength="10" required="required" onKeyPress="return goodchars(event,'0123456789',this)">
                                        <input type="hidden" name="status_pendaftaran" value="N">
                                        </td>
                                        <td>&nbsp;</td>
                                        <td><input type="hidden" name="tgl_registrasi" value="<?php echo"$tgl2"; ?>">
                                        <?php
                                        $tgl3=date('d - M - Y');
                                        echo"$tgl3";
                                        ?></td>
                                      </tr>
                                      <tr>
                                        <td height="49"><div><span><label>NAMA MAHASISWA</label></span></div></td>
                                        <td>&nbsp;</td>
                                        <td><div><span><label>PASSWORD</label></span></div></td>
                                      </tr>
                                      <tr>
                                        <td><input type="text" name="nm_mahasiswa" size="40" placeholder="POPO SILVANA"  required="required" onKeyPress="return goodchars(event,'abcdefghijklmnopqrstuvwxyz ABCDEFGHIJKLMNOPQRSTUVWXYZ',this)" class="form-control" onKeyUp="this.value = this.value.toUpperCase()"></td>
                                        <td>&nbsp;</td>
                                        <td>
                                            <span><input name="password" type="text" class="form-control" placeholder="Password" required=""></span>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td height="49"><div><span><label>TEMPAT LAHIR</label></span></div></td>
                                        <td>&nbsp;</td>
                                        <td><div><span><label>TANGGGAL LAHIR</label></span></div></td>
                                      </tr>
                                      <tr>
                                        <td><input type="text" name="tpt_lahir" size="40" class="form-control" placeholder="Medan"  required="required"></td>
                                        <td>&nbsp;</td>
                                        <td><input type="text" name="tgl_lahir" id="tgl"  placeholder="6/11/1997" class="form-control" required=""></td>
                                      </tr>
                                      <tr>
                                        <td height="49"><div><span><label>JENIS KELAMIN</label></span></div></td>
                                        <td>&nbsp;</td>
                                        <td><div><span><label>AGAMA</label></span></div></td>
                                      </tr>
                                      <tr>
                                        <td>
                                        	<input type="radio" checked="checked" name="jns_kelamin" value="Laki-laki"> <label>Laki-laki</label>
                                            <input type="radio" checked="checked" name="jns_kelamin" value="Perempuan"> <label>Perempuan</label>
                                        </td>
                                        <td>&nbsp;</td>
                                        <td>
                                        <select name="agama" class="form-control" required="required">
                                            <option selected="selected">- Pilih salah satu -</option>
                                            <option value="Islam">Islam</option>
                                            <option value="Kristen">Kristen</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Budha">Budha</option>
                                            <option value="Kong Hu Chu">Kong Hu Chu</option>
                                        </select>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td height="49"><div><span><label>ALAMAT</label></span></div></td>
                                        <td>&nbsp;</td>
                                        <td><div><span><label>NOMOR TELPON</label></span></div></td>
                                      </tr>
                                      <tr>
                                        <td><input type="text" name="alamat" size="40" class="form-control" placeholder=""  required="required"></td>
                                        <td>&nbsp;</td>
                                        <td><input type="text" name="no_telpon"  class="form-control" required="" placeholder=""></td>
                                      </tr>
                                      <tr>
                                        <td height="49"><div><span><label>ALAMAT RUMAH ORANG TUA</label></span></div></td>
                                        <td>&nbsp;</td>
                                        <td></td>
                                      </tr>
                                      <tr>
                                        <td width="100%" colspan="3"><input type="text" name="alamat_ortu" size="40" class="form-control" placeholder="Jln. Simalingkar"  required="required"></td>
                                      </tr>
                                      <tr>
                                        <td height="57"><label>NAMA AYAH</label></td>
                                        <td>&nbsp;</td>
                                        <td height="49"><div><span><label>NAMA IBU</label></span></div></td>
                                      </tr>
                                      <tr>
                                        <td><input type="text" name="nm_ayah" size="40" class="form-control" placeholder=""  required="required"></td>
                                        <td>&nbsp;</td>
                                        <td><input type="text" name="nm_ibu" size="40" class="form-control" placeholder=""  required="required"></td>
                                      </tr>
                                      
                                      <tr>
                                        <td height="49"><div><span><label>PEKERJAAN AYAH</label></span></div></td>
                                        <td>&nbsp;</td>
                                        <td><div><span><label>PEKERJAAN IBU</label></span></div></td>
                                      </tr>
                                      <tr>
                                        <td>
                                        		<select name="pekerjaan_ayah" required="required" class="form-control select2" style="width: 100%;">
                                                        <option disabled="disabled" selected="selected">[ Pilih Pekerjaan Ayah ]</option>
                                                        <option value="Belum / Tidak Bekerja">Belum / Tidak Bekerja</option>
                                                        <option value="Mengurus Rumah Tangga">Mengurus Rumah Tangga</option>
                                                        <option value="Pensiunan">Pensiunan</option>
                                                        <option value="Pegawai Negeri Sipil">Pegawai Negeri Sipil</option>
                                                        <option value="Tentara Nasional Indonesia">Tentara Nasional Indonesia</option>
                                                        <option value="Kepolisian R.I">Kepolisian R.I</option>
                                                        <option value="Perdagangan">Perdagangan</option>
                                                        <option value="Petani / Pekebun">Petani / Pekebun</option>
                                                        <option value="Peternak">Peternak</option>
                                                        <option value="Nelayan / Perikanan">Nelayan / Perikanan</option>
                                                        <option value="Karyawan Swasta">Karyawan Swasta</option>
                                                        <option value="Karyawan BUMN">Karyawan BUMN</option>
                                                        <option value="Karyawan BUMD">Karyawan BUMD</option>
                                                        <option value="Karyawan Honorer">Karyawan Honorer</option>
                                                        <option value="Buruh Harian Lepas">Buruh Harian Lepas</option>
                                                        <option value="Pembantu Rumah Tangga">Pembantu Rumah Tangga</option>
                                                        <option value="Wiraswasta">Wiraswasta</option>
                                                        <option value="Supir">Supir</option>
                                                   </select>
                                        </td>
                                        <td>&nbsp;</td>
                                        <td>
                                        		<select name="pekerjaan_ibu" required="required" class="form-control select2" style="width: 100%;">
                                                        <option disabled="disabled" selected="selected">[ Pilih Pekerjaan Ibu ]</option>
                                                        <option value="Belum / Tidak Bekerja">Belum / Tidak Bekerja</option>
                                                        <option value="Mengurus Rumah Tangga">Mengurus Rumah Tangga</option>
                                                        <option value="Pensiunan">Pensiunan</option>
                                                        <option value="Pegawai Negeri Sipil">Pegawai Negeri Sipil</option>
                                                        <option value="Tentara Nasional Indonesia">Tentara Nasional Indonesia</option>
                                                        <option value="Kepolisian R.I">Kepolisian R.I</option>
                                                        <option value="Perdagangan">Perdagangan</option>
                                                        <option value="Petani / Pekebun">Petani / Pekebun</option>
                                                        <option value="Peternak">Peternak</option>
                                                        <option value="Nelayan / Perikanan">Nelayan / Perikanan</option>
                                                        <option value="Karyawan Swasta">Karyawan Swasta</option>
                                                        <option value="Karyawan BUMN">Karyawan BUMN</option>
                                                        <option value="Karyawan BUMD">Karyawan BUMD</option>
                                                        <option value="Karyawan Honorer">Karyawan Honorer</option>
                                                        <option value="Buruh Harian Lepas">Buruh Harian Lepas</option>
                                                        <option value="Pembantu Rumah Tangga">Pembantu Rumah Tangga</option>
                                                        <option value="Wiraswasta">Wiraswasta</option>
                                                        <option value="Supir">Supir</option>
                                                   </select>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td height="49"><div><span><label>ANAK KEBERAPA</label></span></div></td>
                                        <td>&nbsp;</td>
                                        <td><div><span><label>JUMLAH TANGGUNGAN</label></span></div></td>
                                      </tr>
                                      <tr>
                                        <td><input type="text" name="anak_keberapa" size="40" class="form-control" placeholder=""  required="required"></td>
                                        <td>&nbsp;</td>
                                        <td><input type="text" name="jlh_tanggungan"  class="form-control" required=""></td>
                                      </tr>
                                      <tr>
                                        <td height="49"><div><span><label>PENGHASILAN PER BULAN</label></span></div></td>
                                        <td>&nbsp;</td>
                                        <td><div><span><label>JENIS KEADAAN RUMAH ORANG TUA</label></span></div></td>
                                      </tr>
                                      <tr>
                                        <td><input type="text" name="penghasilan_perbulan" size="40" class="form-control" placeholder=""  required="required"></td>
                                        <td>&nbsp;</td>
                                        <td>
                                        	<select name="jenis_rumah" class="form-control">
                                            	<option value="Pondok">Pondok</option>
                                                <option value="Papan Dengan Atap Rumbia">Papan Dengan Atap Rumbia</option>
                                                <option value="Papan Dengan Atap Seng">Papan Dengan Atap Seng</option>
                                                <option value="Semi Permanen">Semi Permanen</option>
                                                <option value="Rumah Sewa">Rumah Sewa</option>
                                            </select>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td height="49"><div><span><label>JENIS BEASISWA YANG DIMOHON</label></span></div></td>
                                        <td>&nbsp;</td>
                                        <td><div><span><label>UPLOAD FILE BERKAS SYARAT-SYARAT PERMOHONAN BEASISWA</label></span></div></td>
                                      </tr>
                                      <tr>
                                        <td>
                                        	<select name="kd_jenisbeasiswa" required="required" class="form-control select2" style="width: 100%;">
                                                            <option disabled="disabled" selected="selected">[ PILIH JENIS BEASISWA ]</option>
                                                            <?php
                                                            $bes=mysql_query("select * from jenis_beasiswa order by kd_jenisbeasiswa DESC");
                                                            while($t_bes=mysql_fetch_array($bes))
                                                            {	
                                                            ?>
                                                            <option value="<?php echo"$t_bes[kd_jenisbeasiswa]"; ?>"><?php echo"$t_bes[nm_jenisbeasiswa]"; ?></option>
                                                            <?php
                                                            }
                                                            ?>   
                                                		</select>
                                        </td>
                                        <td>&nbsp;</td>
                                        <td>
                                        	<input type="file" name="file_berkas" required="required" accept="application/pdf">
                                        </td>
                                      </tr>
                                      
                                      <tr>
                                    <td>
                                    	<td>&nbsp;</td>
                                        <td align="right">
                                        <input type="submit" name="simpan" class="myButton" value="Kirim Pendaftaran" />
                                    </td>
                                </tr>
                                </table>
                        </form>
            
			</div>
			<div class="clearfix"> </div>
		</div>
</div>
<script type="text/javascript" src="jquery-1.9.1.js"></script>
						<script type="text/javascript" src="jquery-ui.js"></script>
                        <link rel="stylesheet" href="style.css">
                        <script>
                        $(function() {
                        $( "#tgl" ).datepicker();
                        });
                        </script>