<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Pidana Khusus Arsip</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM tbl_pidanakhusus WHERE id='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td width="200">No Perkara</td> <td><?= $data['nomor_pidana'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama Terpidana</td> <td><?= $data['nama'] ?></td>
                        </tr>
                        <tr>
                            <td>Kasus</td> <td><?= $data['kasuss'] ?></td>
                        </tr>
                        <tr>
                            <td>Keterangan</td> <td><?= $data['ket'] ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Kejadian</td> <td><?= $data['tgl_kejadian'] ?></td>
                        </tr>
                        <tr>
                            <td>Tempat Kejadian</td> <td><?= $data['tmpt_kejdian'] ?></td>
                        </tr>
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=pidanakhusus&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Pidana Khusus </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

