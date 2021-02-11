<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tbl_pidanakhusus WHERE id ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title"> Update Data Pidana Khusus</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="nomor_pidana" class="col-sm-3 control-label">NO PERKARA</label>
                            <div class="col-sm-9">
                            <input type="text" name="nomor_pidana" value="<?=$data['nomor_pidana']?>"class="form-control" id="nomor_pidana" placeholder="Inputkan Nomor">
                            </div>
                        </div>
                    
                        <div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">NAMA TERPIDANA</label>
                            <div class="col-sm-9">
                            <input type="text" name="nama" value="<?=$data['nama']?>"class="form-control" id="nama" placeholder="Inputkan Nama">
                            </div>
                        </div>

                         <div class="form-group">
                            <div class="form-group">
                            <label for="kasuss" class="col-sm-3 control-label">KASUS</label>
                               <div class="col-sm-2 col-xs-9">
                                 <select name="kasuss" class="form-control">
                                    <option value="narkotika">Pidana Narkotika & Psikotropika</option>
                                    <option value="kdrt">Pidana KDRT (Kekerasan Dalam Rumah Tangga)</option>
                                    <option value="pornografi">Pidana Pornografi</option>
                                    <option value="korupsi">Pidana  Korupsi & Grafitasi</option>
                                    <option value="kependudukan">Pidana Kependudukan</option>
                                </select>
                            </div>
                        </div>
                    </div>

                        <div class="form-group">
                            <label for="ket" class="col-sm-3 control-label">KETERANGAN</label>
                            <div class="col-sm-9">
                                <input type="text" name="ket" value="<?=$data['ket']?>"class="form-control" id="ket" placeholder="Inputkan Keterangan">
                            </div>    
                        </div>

                        <div class="form-group">
                            <label for="tgl_kejadian" class="col-sm-3 control-label">TANGGAL KEJADIAN</label>
                            <div class="col-sm-9">
                                <input type="text" name="tgl_kejadian" value="<?=$data['tgl_kejadian']?>"class="form-control" id="tgl_kejadian" placeholder="Tanggal Kejadian" >
                            </div>       
                        </div>

                            <div class="form-group">
                            <label for="tmpt_kejadian" class="col-sm-3 control-label">TEMPAT KEJADIAN</label>
                            <div class="col-sm-9">
                                <input type="text" name="tmpt_kejadian" value="<?=$data['tmpt_kejadian']?>"class="form-control" id="tmpt_kejadian" placeholder="Tempat Kejadian" >
                            </div>
                        </div>

                        <!--untuk tanggal lahir form tahun-bulan-tanggal 1998-10-10-->
                        <div class="form-group">


                
                        <!--end tanggal lahir-->           

                        
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Pidana Khusus</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="panel-footer">
                    <a href="?page=pidanakhusus&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Data Pidana Khusus
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if($_POST){
    //Ambil data dari form
    $nomor_pidana=$_POST['nomor_pidana'];
    $nama=$_POST['nama'];
    $kasuss=$_POST['kasuss'];
    $ket=$_POST['ket'];
    $tgl_kejadian=$_POST['tgl_kejadian'];
    $tmpt_kejadian=$_POST['tmpt_kejadian'];
    //buat sql
    $sql="UPDATE tbl_pidanakhusus SET nomor_pidana ='$nomor_pidana',nama='$nama',kasuss='$kasuss',ket='$ket',tgl_kejadian='$tgl_kejadian',tmpt_kejadian='$tmpt_kejadian' WHERE id='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit pidanakhusus Error");
    if ($query){
        echo "<script>window.location.assign('?page=pidanakhusus&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



