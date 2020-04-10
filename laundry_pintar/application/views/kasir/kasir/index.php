

  <!--Main layout-->
  <main class="pt-5 mx-lg-5">
    <div class="container-fluid mt-5">


      <!-- Page Heading -->
      <div class="row">
        <div class='col-sm-12'>
          <h4 class='float-left page-title pt-3'>Selamat Datang di Aplikasi Laundry </h4>
          <ol class='breadcrumb float-right black-text'>
            <li class="breadcumb-item"><a href='#' class="primary-text">Beranda</a><i class="fas fa-angle-double-right mx-2" aria-hidden="true"></i></li>
            <li class='breadcumb-item" active'>Dashboard</li>
          </ol>
        </div>
      </div>
      <!-- /.row -->

     
         <div class="row wow fadeIn">

        <!--Grid column-->
        <div class="col-md-12 mb-4">

         
     

            <!-- row card dashboard -->
            <div class="row">

               

                <!-- card dashboard -->
                  
                <div class="col-xl-4 col-sm-6 py-2">
                  <div class="card bg-success text-white h-100">
                    <div class="card-body blue-gradient">
                      <div class="rotate">
                        <i class="fa fa-user fa-2x"></i>
                      </div>
                      <p class="text-uppercase pt-2">Total Member</p>

                      <h1 class="display-6"><?= $total_member ?></h1>

                    </div>
                  </div>
                </div>

                <!-- card dashboard -->
                <div class="col-xl-4 col-sm-6 py-2">
                  <div class="card bg-success text-white h-100">
                    <div class="card-body ripe-malinka-gradient">
                      <div class="rotate">
                        <i class="fa fa-shopping-cart fa-2x"></i>
                      </div>
                      <p class="text-uppercase pt-2">Order Terbaru</p>
                      <h3 class="display-6"><?= $total_order ?></h3>
                    </div>
                  </div>
                </div>

                <!-- card dashboard -->
                <div class="col-xl-4 col-sm-6 py-2">
                  <div class="card bg-success text-white h-100">
                    <div class="card-body sunny-morning-gradient">
                      <div class="rotate">
                        <i class="fas fa-money-bill fa-2x"></i>
                      </div>
                      <p class="text-uppercase pt-2">Total Order</p>
                      <h3 class="display-6"><?= $total_transaksi ?></h3>
                    </div>
                  </div>
                </div>
      

            </div>
         <!-- tutup row card dashboard -->


<br><br>
           <!--Card-->
          <div class="card shadow">

           <div class="card-header blue-gradient white-text"><i class="fas fa-clock pr-1"></i>Order Terbaru</div>

           <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>">

            <!--Card content-->
            <div class="card-body">
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
                            <?php $ambil = $this->db->query("SELECT * FROM `tb_detail_transaksi` INNER JOIN tb_transaksi ON tb_detail_transaksi.transaksi_id = tb_transaksi.id_transaksi INNER JOIN tb_member ON tb_transaksi.member_id = tb_member.id_member INNER JOIN tb_paket ON tb_paket.id_paket = tb_detail_transaksi.paket_id WHERE status = 'baru' "); ?>
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

