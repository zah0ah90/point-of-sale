 <?php $__env->startSection('content-title', 'Tambah Penjualan'); ?> <?php $__env->startSection('breadcrumb'); ?>
<ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="<?php echo e(route('datapenjualan')); ?>">Data Transaksi Penjualan</a></li>
  <li class="breadcrumb-item active">Tambah Transaksi Penjualan</li>
</ol>
<?php $__env->stopSection(); ?> <?php $__env->startSection('content'); ?>
<div class="row">
  <div class="col-md-12">
  <div class="uk-alert uk-alert-success" data-uk-alert>
      <a href="" class="uk-alert-close uk-close"></a>
      <p><?php echo e(isset($successMessage) ? $successMessage : ''); ?></p>
       <?php if(count($errors) > 0): ?>
          <div class="alert alert-danger" align="center">
              <strong>Maaf !</strong> Sebaiknya Anda Harus :
              <ul>
                  <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <li><?php echo e($error); ?></li>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </ul>
          </div>
      <?php endif; ?>
  </div>
    <div class="card">
      <div class="header">
        <h4 class="title">Tambah Transaksi Penjualan<span class="pull-right"><a href="<?php echo e(route('datapenjualan')); ?>" class="btn btn-xs btn-fill btn-info">Data Penjualan &nbsp; <i class="fa fa-shopping-cart"></i></a></span></h4>
        <p class="category">Silahkan masukkan data penjualan dengan benar..</p>
      </div>
      <div class="content">
        <form class="" action="<?php echo e(route('simpanpenjualan')); ?>" method="post">
        <!-- <input type="hidden" name="tanggal" value="$tglPenjualan" >                      -->
        <input type="hidden" name="tipe_pembayaran" value="Penjualan Tunai" >
        <input type="hidden" name="status" value="OK" >        
        <input type="hidden" id="harga_jual_akhir" name="harga_jual_akhir">           
        <input type="hidden" id="sub_total_harga" name="sub_total_harga"> 
        <input type="hidden" id="id_barang" name="id_barang"> 
        <!-- <input type="hidden" id="pelanggan" name="pelanggan" value="Pelanggan Umum">  -->
        
        <div class="col-md-12" style="text-align: left;">   
            <div class="pull-left col-md-5" style="margin-left:-3%;" >
            <div class="col-md-11"> 
              <div class="form-group">
                    <label>Barcode *</label>                    
                    <select class="form-control" id="id_barang_search" name="id_barang_search" style="width: 100%;" ></select>
              </div>                             
                <div class="btn-group-horizontal">                            
                <button type="submit" name="tambah_barang" id="tambah_barang" style="width: 90px; text-align: left;" class="btn btn-danger btn-fill">Tambah  <span class="fa fa-plus-square"></button> 
                
                <button type="submit" name="simpanpenjualan" class="btn btn-primary btn-fill" onclick="return confirm('Apakah anda yakin untuk melakukan Pembayaran ?')">Bayar dan Cetak <span class="fa fa-shopping-cart"></span></button>                               
                
                </div>  
            </div>
            <div class="col-md-1">
              <label>Jumlah</label>
                <input type="number" name="jumlah_jual" id="jumlah_jual" class="form-control" placeholder="qty" style="width: 80px;" >
            </div>
            </div>

            <div class="pull-right col-md-7" style="margin-right: -2%;">
              <div class="col-md-6"> 
                <!-- general left form elements  --> 
                 <div class="form-group">
                    <label>No. Penjualan</label>
                    <input type="text" id="kode_penjualan" name="kode_penjualan" value="<?php echo e($kodePenjualan); ?>" readonly class="form-control" placeholder="" required>
                  </div>

                  <div class="form-group">
                    <label for="">Total Harga</label>
                    <input type="text" name="total_harga_jual" id="total_harga_jual" class="form-control" placeholder="" value="<?php echo e($total_harga_jual); ?>" readonly >
                  </div> 
                  <!-- <div class="form-group">
                    <label for="tgl">Nama Pelanggan</label>
                  <select class="form-control" id="pelanggan" name="pelanggan" style="width: 100%;" required>
                      <option value="" >Pilih Nama Pelanggan</option>
                      <option value="Pelanggan Umum" selected="selected"> Pelanggan Umum </option>
                      <option value="Pelanggan Lama" >Pelanggan Lama</option>
                    </select>
                  </div> -->
                                    
                <!-- general left form elements  -->
              </div>
              <div class="col-md-6"> 
                <!-- general right form elements -->
                  <div class="form-group">
                    <label>Pegawai</label>
                    <input type="text" name="createdby" id="createdby" class="form-control" value="<?php echo e($user->name); ?>" readonly >
                  </div>                                    
                  
                                            
                <!-- general right form elements -->
              </div>              
            </div>
            <h4><strong><font><u>Tanggal Pembayaran Penjualan</u></font></strong> <span class="pull-right">              
              <input type="date" name="tanggal" class="form-control input-sm" id="tanggal" style="height: 33px" readonly>
            </span></h4> 
            <div class="row">
              <div class="col-md-6" >                            
                <div class="form-group">
                  <label><strong><font color="black">Jumlah Bayar</font></strong></label>
                  <input type="text" name="total_bayar" id="total_bayar" class="form-control" placeholder="Jumlah Uang Pembayaran" >
                </div>  
              </div>
              <div class="col-md-6" >                            
                <div class="form-group" style="text-align: left; font-color : black;">
                  <label><strong><font color="black">Kembalian</font></strong></label>
                  <input type="text" name="total_kembalian" id="total_kembalian" class="form-control" placeholder="0" readonly>
                </div>  
              </div>
              </div>            
            <div class="content table-responsive table-full-width" style="margin-left: -1%;">              
              <table class="table table-striped table-hover">
                <thead >
                <th style="text-align: center;" width="5%">Nomor</th>
                <th style="text-align: center;" width="25%">Nama</th>                
                <th style="text-align: center;" width="10%">Harga Jual </th>
                <th style="text-align: center;" width="5%">Diskon</th>
                <th style="text-align: center;" width="15%">Harga Jual Akhir</th>
                <th style="text-align: center;" width="10%">Jumlah</th>
                <th style="text-align: center;" width="15%">Sub total</th>
                <th style="text-align: center;" width="15%">Aksi</th>
              </thead>
              <tbody>    
              <?php $i=1; foreach ($detailPenjualan as $detailBarang):  ?>
                <tr>
                  <td style="text-align: center;"><?php echo e($i); ?></td>
                  <td style="text-align: center;"><?php echo e($detailBarang->nama_barang); ?></td>
                  <td style="text-align: center;">Rp. <?php echo e($detailBarang->harga_jual); ?></td>                  
                  <td style="text-align: center;"><?php echo e($detailBarang->diskon); ?> %</td>
                  <td style="text-align: center;">Rp. <?php echo e($detailBarang->harga_jual_akhir); ?></td>
                  <td style="text-align: center;"><?php echo e($detailBarang->jumlah_jual); ?></td>
                  <td style="text-align: center;">Rp. <?php echo e($detailBarang->sub_total_harga); ?></td>
                  <td style="text-align: center;">                                
                      <div class="btn-group-horizontal">
                        <!-- <a href="<?php echo e(URL::to('penjaga/penjualan/tambah/'.$detailBarang->id.'/edit')); ?>" class="btn btn-fill btn-warning btn-xs">
                          <span class="glyphicon glyphicon-edit" ></span> Edit 
                      </a> -->                    
                      <a href="<?php echo e(URL::to('penjaga/penjualan/tambah/'.$detailBarang->id.'/hapus')); ?>" title="hapus"   onclick="return confirm('Apakah anda yakin akan menghapus data <?php echo e(($i).' - '.($detailBarang->nama_barang)); ?>?')" class="btn btn-danger btn-fill btn-xs">
                          <span class="glyphicon glyphicon-trash"></span> Delete
                      </a>
                      </div>
                  </td>                              
                </tr>                
              <?php $i++; endforeach  ?>                            
              </tbody>
              </table>              
            </div>
          </div>                      
          <div class="clearfix"></div>
          <?php echo e(csrf_field()); ?>

        </form>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script type="text/javascript">
    // $('#pelanggan').select2({
    //   placeholder: 'Pilih Nama Pelanggan..',
    //     width: 'resolve',      
    //   });         

    $('#id_barang_search').select2({
          placeholder: 'Barcode / Kode atau Nama barang..',
          minimumInputLength: 3,
          ajax: {
            url: '<?php echo e(route('searchbarang')); ?>',
            dataType: 'json',
            delay: 250,
            processResults: function (data) {
              return {
                results:  $.map(data, function (item) {
                      return {
                          text: item.nama_barang+' | Stok : '+item.stok,
                          id:item.id+','+item.nama_barang+','+item.harga_jual_akhir                                                  
                      }                                                                
                  })
              };
            },
            cache: true
          }
        });
        $('#id_barang_search').change(function() {
          var harga_jual_akhir = this.value.split(",").pop();
          $('#harga_jual_akhir').val(harga_jual_akhir);
          var id_barang = this.value.split(",").shift();
          $('#id_barang').val(id_barang);          
        });

    $(document).ready(function(){
        $("#jumlah_jual").keyup(function(){
            var jumlah_barang = document.getElementById('jumlah_jual').value;
            var harga_jual_akhir = document.getElementById('harga_jual_akhir').value;
            var subtotal = jumlah_barang * harga_jual_akhir;
            document.getElementById('sub_total_harga').value = subtotal;
        });
    });
    $(document).ready(function(){
        $("#total_bayar").keyup(function(){
            var total_harga_jual = document.getElementById('total_harga_jual').value;
            var jumlah_uang = document.getElementById('total_bayar').value;
            var total_kembalian = jumlah_uang - total_harga_jual;
            document.getElementById('total_kembalian').value = total_kembalian;            
        });
    });
</script>
<script type="text/javascript">
var today = new Date();
document.getElementById('tanggal').value =  today.toISOString().substr(0, 10);
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>