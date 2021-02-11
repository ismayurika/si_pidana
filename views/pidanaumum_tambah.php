<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Pidana Umum</h3>
                </div>  
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="pidanaumum" class="col-sm-3 control-label">Pidana Umum</label>
                               <div class="col-sm-2 col-xs-9">
                            </div>
                        </div>

						 <div class="form-group">
                            <label for="no_perkara" class="col-sm-3 control-label">NOMOR PERKARA</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_perkara" class="form-control" id="no_perkara" placeholder="Inputkan Nomor Perkara" required>
                            </div>
                        </div>

						 <div class="form-group">
                            <label for="nama_terpidana" class="col-sm-3 control-label">NAMA TERPIDANA</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_terpidana" class="form-control" id="nama_terpidana" placeholder="Inputkan Nama Terpidana" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-group">
                            <label for="kasus" class="col-sm-3 control-label">KASUS</label>
                               <div class="col-sm-2 col-xs-9">
                                 <select name="kasus" class="form-control">
                                    <option value="">PILIH</option>
                                    <option value="penipuan">Penipuan & Penggelapan</option>
                                    <option value="pencemaran">Pencemaran Nama Baik & Fitnah</option>
                                    <option value="penganiayaan">Penganiayaan & Pengeroyokan</option>
                                    <option value="pencabulan">Pencabulan</option>
                                    <option value="perselingkuhan">Perselingkuhan & Nikah Sirih</option>
                                </select>
                            </div>
                        </div>
                    </div>

						 <div class="form-group">
                            <label for="keterangan" class="col-sm-3 control-label">KETERANGAN</label>
                            <div class="col-sm-9">
                                <input type="text" name="keterangan" class="form-control" id="keterangan" placeholder="Inputkan Keterangan" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="tanggal_kejadian" class="col-sm-3 control-label">TANGGAL KEJADIAN</label>
                            <div class="col-sm-9">
                                <input type="date" name="tanggal_kejadian" class="form-control" id="tanggal_kejadian" placeholder="Inputkan Tanggal Kejadian" required>
                            </div>       
                        </div>

                         <div class="form-group">
                            <label for="tempat_kejdian" class="col-sm-3 control-label">TEMPAT KEJADIAN</label>
                            <div class="col-sm-3">
                                <input type="text" name="tempat_kejdian"class="form-control" id="tempat_kejdian" placeholder="Inputkan Tempat Kejadian" required>
                            </div>
                        </div>



                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Data Pidana Umum</button>
                            </div>
                        </div>
                    </form>


            
                <div class="panel-footer">
                    <a href="?page=pidanaumum&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Data Pidana Umum
                    </a>
                </div>

            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
    
	$no_perkara=$_POST['no_perkara'];
	$nama_terpidana=$_POST['nama_terpidana'];
	$kasus=$_POST['kasus'];
    $keterangan=$_POST['keterangan'];
    $tanggal_kejadian=$_POST['tanggal_kejadian'];
	$tempat_kejdian=$_POST['tempat_kejdian'];

    //buat sql
    $sql="INSERT INTO tbl_pidanaumum VALUES ('','$no_perkara','$nama_terpidana','$kasus','$keterangan','$tanggal_kejadian','$tempat_kejdian')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Penganiayaan Error");
    if ($query){
        echo "<script>window.location.assign('?page=pidanaumum&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
