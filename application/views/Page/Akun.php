
<br>
<div class="container">
<div class="col-md-12">  
    <div class="col-md-4">      
        <div class="portlet light profile-sidebar-portlet bordered">
            <div class="profile-userpic">
                <img src="<?php echo base_url() ?>/assets/img/user/chulis.png" class="img-responsive" alt=""> </div>
            <div class="profile-usertitle">
                <div class="profile-usertitle-name">    <?php  foreach ($hasil8 as $tampil){ ?>  
<?php echo $tampil->nama_user ?>
<?php } ?></div>
            </div>
            <div class="profile-userbuttons">
            </div>
            <div class="profile-usermenu">
                <ul class="nav">
                    <li class="active">
                        <a href="#">
                            <i class="icon-home"></i> Riwayat Belanja </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="icon-settings"></i> Barang Yang disukai </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="icon-info"></i> Data Diri </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-8"> 
        <div class="portlet light bordered">
            <div class="portlet-title tabbable-line">
                <div class="caption caption-md">
                    <i class="icon-globe theme-font hide"></i>
                    <span class="caption-subject font-blue-madison bold uppercase">Riwayat Belanja</span>
                </div>
            </div>
            <div class="portlet-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>Nama Barang</th>
                            <th>Tgl Pembelian</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                         <?php 
                         $no = 1;  
                         foreach ($riwayat as $tampil){ ?>  

<tr class="<?php if($tampil->status_transaksi == 0){
    echo "danger";
}else{
    echo "success";
} ?>">
                            <th scope="row"><?php echo $no++; ?></th>
                            <td><?php echo $tampil->nama_barang ?></td>
                            <td><?php echo $tampil->tgl_transaksi; ?></td>
                            <td><?php if($tampil->status_transaksi == 0){
                                echo "Belum Dibayar";
                            } else {
                                echo "Lunas";
                            } ?></td>
                        </tr>
<?php } ?>
                        
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>