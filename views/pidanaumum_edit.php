<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tbl_pidanaumum WHERE id ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title"> Update Data Pidana Umum</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="no_perkara" class="col-sm-3 control-label">NO PERKARA</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_perkara" value="<?=$data['no_perkara']?>"class="form-control" id="no_perkara" placeholder="Nomor Perkara">
                            </div>
                        </div>
                    
						<div class="form-group">
                            <label for="nama_terpidana" class="col-sm-3 control-label">NAMA TERPIDANA</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_terpidana" value="<?=$data['nama_terpidana']?>"class="form-control" id="nama_terpidana" placeholder="Nomor Terpidana">
                            </div>
                        </div>

                         <div class="form-group">
                            <div class="form-group">
                            <label for="kasus" class="col-sm-3 control-label">KASUS</label>
                               <div class="col-sm-2 col-xs-9">
                                 <select name="kasus" class="form-control">
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
                                <input type="text" name="keterangan" value="<?=$data['keterangan']?>"class="form-control" id="keterangan" placeholder="keterangan">
                            </div>    
                        </div>

						<div class="form-group">
                            <label for="tanggal_kejadian" class="col-sm-3 control-label">TANGGAL KEJADIAN</label>
                            <div class="col-sm-9">
                                <input type="text" name="tanggal_kejadian" value="<?=$data['tanggal_kejadian']?>"class="form-control" id="tanggal_kejadian" placeholder="Tanggal Kejadian" >
                            </div>       
                        </div>

							<div class="form-group">
                            <label for="tempat_kejdian" class="col-sm-3 control-label">TEMPAT KEJADIAN</label>
                            <div class="col-sm-9">
                                <input type="text" name="tempat_kejdian" value="<?=$data['tempat_kejdian']?>"class="form-control" id="tempat_kejdian" placeholder="Tempat Kejadian" >
                            </div>
                        </div>

                        <!--untuk tanggal lahir form tahun-bulan-tanggal 1998-10-10-->
                        <div class="form-group">


                
                        <!--end tanggal lahir-->           

                        
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Pidana Umum</button>
                            </div>
                        </div>
                    </form>
                </div>

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
    $sql="UPDATE tbl_pidanaumum SET no_perkara ='$no_perkara',nama_terpidana='$nama_terpidana',kasus='$kasus',keterangan='$keterangan',tanggal_kejadian='$tanggal_kejadian',tempat_kejdian='$tempat_kejdian' WHERE id='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit pidanaumum Error");
    if ($query){
        echo "<script>window.location.assign('?page=pidanaumum&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



