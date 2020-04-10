

  <!--Main layout-->
  <main class="pt-5 mx-lg-5">
    <div class="container-fluid mt-5">


      <!-- Page Heading -->
      <div class="row">
        <div class='col-sm-12'>
          <h4 class='float-left page-title pt-3'>Transaksi</h4>
          <ol class='breadcrumb float-right black-text'>
            <li class="breadcumb-item"><a href='#' class="primary-text">Beranda</a><i class="fas fa-angle-double-right mx-2" aria-hidden="true"></i></li>
            <li class='breadcumb-item" active'>Transaksi</li>
          </ol>
        </div>
      </div>
      <!-- /.row -->

     
         <div class="row wow fadeIn">

        <!--Grid column-->
        <div class="col-md-12 mb-4">

           <!--Card-->
          <div class="card shadow">

           <div class="card-header blue-gradient white-text"><i class="fas fa-list pr-1"></i>Data Transaksi</div>

           <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>">

            <!--Card content-->
            <div class="card-body">
              <a href="<?= base_url('kasir/kasir/') ?>tambahtransaksi" class="btn blue-gradient btn-sm">Tambah Transaksi</a>
              <br><br>
            <div class="table-responsive">

                  <table class="table table-hover table-bordered" id="tabel1">
                    <thead class="">
                      <th>No</th>
                      <th>Tgl Transaksi</th>
                      <th>Pembayaran</th>
                      <th>Customer</th>
                      <th>Paket</th>
                      <th>Status Order</th>
                      <th>Total</th>
                      <th>Aksi</th>
                    </thead>
                    <tbody>
                      
                        <?php $nomer = 1; ?>
                            <?php $ambil = $this->db->query("SELECT * FROM `tb_detail_transaksi` INNER JOIN tb_transaksi ON tb_detail_transaksi.transaksi_id = tb_transaksi.id_transaksi INNER JOIN tb_member ON tb_transaksi.member_id = tb_member.id_member INNER JOIN tb_paket ON tb_paket.id_paket = tb_detail_transaksi.paket_id "); ?>
                    <?php foreach($ambil->result_array() as $pecah) : ?>
                            <tr>
                              <td><?= $nomer ?></td>
                              <td><?= $pecah['tgl']?></td>
                              <td><a href="#" class="badge badge-success"><?= $pecah['dibayar'] ?></a></td>
                              <td><?= $pecah['nama']?></td>
                              <td><?= $pecah['nama_paket']?></td>
                              <td><span class="badge badge-primary"><?= $pecah['status']?></span></td>
                              <td>Rp. <?= number_format(($pecah['harga']*$pecah['qty'])+$pecah['biaya_tambahan']+$pecah['diskon']+$pecah['pajak']); ?></td>
                              <td>
                                 <a href="<?= base_url('kasir/kasir/') ?>detailtransaksi/<?= $pecah['transaksi_id']; ?>" class="btn sunny-morning-gradient btn-sm"><i class="fas fa-info-circle text-white"></i></a>
                                 <br><br>
                                <a href="<?= base_url('kasir/transaksi/') ?>hapustransaksi/<?= $pecah['transaksi_id']; ?>" class="btn ripe-malinka-gradient btn-sm tombol-hapus"><i class="fas fa-trash text-white"></i></a>
                              </td>
                            </tr>
                          <?php $nomer++ ?>
                          <?php endforeach; ?>
                        
                    </tbody>
                  </table>
                 </div>


            
            
             

           </div>
  
    </div>
<!--/.Card-->

  </div>
<!--Grid column-->



</div>
      <!--Grid row-->

      

      

     

    </div>
  </main>
  <!--Main layout-->

