

  <!--Main layout-->
  <main class="pt-5 mx-lg-5">
    <div class="container-fluid mt-5">


      <!-- Page Heading -->
      <div class="row">
        <div class='col-sm-12'>
          <h4 class='float-left page-title pt-3'>Paket</h4>
          <ol class='breadcrumb float-right black-text'>
            <li class="breadcumb-item"><a href='#' class="primary-text">Beranda</a><i class="fas fa-angle-double-right mx-2" aria-hidden="true"></i></li>
            <li class='breadcumb-item" active'>Paket</li>
          </ol>
        </div>
      </div>
      <!-- /.row -->

     
         <div class="row wow fadeIn">

        <!--Grid column-->
        <div class="col-md-12 mb-4">

           <!--Card-->
          <div class="card shadow">

           <div class="card-header blue-gradient white-text"><i class="fas fa-list pr-1"></i>Data Paket</div>

           <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>">

            <!--Card content-->
            <div class="card-body">
              <a href="<?= base_url('admin/paket/') ?>tambahpaket" class="btn blue-gradient btn-sm">Tambah paket</a>
              <br><br>
            <div class="table-responsive">

                  <table class="table table-hover table-bordered" id="tabel1">
                     <thead>
                      <th>No</th>
                      <th>Nama Outlet</th>
                      <th>Jenis</th>
                      <th>Nama Paket</th>
                      <th>Harga</th>
                      <th>Aksi</th>
                    </thead>
                    <tbody>
                      
                        <?php $nomer = 1; ?>
                            <?php $ambil = $this->db->query("SELECT * FROM tb_paket INNER JOIN tb_outlet ON tb_paket.outlet_id = tb_outlet.id_outlet "); ?>
                    <?php foreach($ambil->result_array() as $pecah) : ?>
                            <tr>
                              <td><?= $nomer ?></td>
                             <td><?= $pecah['nama']; ?></td>
                              <td><?= $pecah['jenis']; ?></td>
                              <td><?= $pecah['nama_paket']; ?></td>
                              <td>Rp. <?= number_format($pecah['harga']); ?></td>
                              <td>
                                <a href="<?= base_url('admin/paket/') ?>hapuspaket/<?= $pecah['id_paket']; ?>" class="btn ripe-malinka-gradient btn-sm tombol-hapus"><i class="fas fa-trash text-white"></i></a>
                                <a href="<?= base_url('admin/paket/') ?>editpaket/<?= $pecah['id_paket']; ?>" class="btn blue-gradient btn-sm"><i class="fas fa-edit"></i></a>
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

