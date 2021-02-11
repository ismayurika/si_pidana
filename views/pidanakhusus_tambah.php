<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Pidana Khusus</h3>
                </div>  
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="pidana" class="col-sm-3 control-label">Pidana Khusus</label>
                               <div class="col-sm-2 col-xs-9">
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="nomor_pidana" class="col-sm-3 control-label">NOMOR PERKARA</label>
                            <div class="col-sm-9">
                                <input type="text" name="nomor_pidana" class="form-control" id="nomor_pidana" placeholder="Inputkan Nomor Perkara" required>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">NAMA TERPIDANA</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" class="form-control" id="nama" placeholder="Inputkan Nama Terpidana" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-group">
                            <label for="kasuss" class="col-sm-3 control-label">KASUS</label>
                               <div class="col-sm-2 col-xs-9">
                                 <select name="kasuss" class="form-control">
                                    <option value="">PILIH</option>
                                    <option value="kdrt">KDRT (Kekerasan Dalam Rumah Tangga)</option>
                                    <option value="narkotika">Narkotika & Psikotropika</option>
                                    <option value="korupsi">Korupsi</option>
                                    <option value="pornografi">Pornoragrafi</option>
                                    <option value="penduduk">Pidana Kependudukan</option>
                                </select>
                            </div>
                        </div>
                    </div>

                         <div class="form-group">
                            <label for="ket" class="col-sm-3 control-label">KETERANGAN</label>
                            <div class="col-sm-9">
                                <input type="text" name="ket" class="form-control" id="ket" placeholder="Inputkan Keterangan" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="tgl_kejadian" class="col-sm-3 control-label">TANGGAL KEJADIAN</label>
                            <div class="col-sm-9">
                                <input type="date" name="tgl_kejadian" class="form-control" id="tgl_kejadian" placeholder="Inputkan Tanggal Kejadian" required>
                            </div>       
                        </div>

                         <div class="form-group">
                            <label for="tmpt_kejadian" class="col-sm-3 control-label">TEMPAT KEJADIAN</label>
                            <div class="col-sm-3">
                                <input type="text" name="tmpt_kejadian"class="form-control" id="tmpt_kejadian" placeholder="Inputkan Tempat Kejadian" required>
                            </div>
                        </div>



                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Data Pidana </button>
                            </div>
                        </div>
                    </form>


            
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
    $sql="INSERT INTO tbl_pidanakhusus VALUES ('','$nomor_pidana','$nama','$kasuss','$ket','$tgl_kejadian','$tmpt_kejadian')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Penganiayaan Error");
    if ($query){
        echo "<script>window.location.assign('?page=pidanakhusus&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
