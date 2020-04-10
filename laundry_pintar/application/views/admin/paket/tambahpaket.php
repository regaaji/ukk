<!--Main layout-->
<main class="pt-5 mx-lg-5">
  <div class="container-fluid mt-5">


    <!-- Page Heading -->
    <div class="row">
      <div class='col-sm-12'>
        <h4 class='float-left page-title pt-3'>Paket Laundry </h4>
        <ol class='breadcrumb float-right black-text'>
          <li class="breadcumb-item"><a href='#' class="primary-text">Beranda</a><i class="fas fa-angle-double-right mx-2" aria-hidden="true"></i></li>
          <li class='breadcumb-item" active'>Paket Laundry</li>
        </ol>
      </div>
    </div>
    <!-- /.row -->

   <div class="row wow fadeIn">

    <!--Grid column-->
    <div class="col-md-12 mb-4">

      <!--Card-->
      <div class="card shadow">

        <div class="card-header blue-gradient white-text"><i class="fas fa-list pr-2"></i>Tambah Paket Laundry</div>

        <!--Card content-->
        <div class="card-body">


          <form action="" method="post">
            <div class="form-group">
              <label for="">Nama Outlet</label>
              <select name="outlet_id" id="" class="form-control">
               <?php $ambil = $this->db->query("SELECT * FROM tb_outlet"); ?>
               <?php foreach($ambil->result_array() as $pecah) : ?>
                 <option value="<?= $pecah['id_outlet']; ?>"><?= $pecah['nama']; ?></option>
               <?php endforeach; ?>
             </select>
             <small id="" class="form-text text-danger"><?= form_error('outlet_id'); ?></small>
           </div>

           <div class="form-group">
            <label for="">Jenis</label>
            <select name="jenis" id="" class="form-control">
              <option value="kiloan">Kiloan</option>
              <option value="selimut">Selimut</option>
              <option value="bed_cover">Bed Cover</option>
              <option value="kaos">Kaos</option>
              <option value="lain">Lain</option>
            </select>
            <small id="" class="form-text text-danger"><?= form_error('jenis'); ?></small>
          </div>

          <div class="form-group">
            <label for="">Nama Paket</label>
            <input type="text" class="form-control" name="nama_paket">
            <small id="" class="form-text text-danger"><?= form_error('nama_paket'); ?></small>
          </div>

          <div class="form-group">
            <label for="">Harga</label>
            <input type="text" class="form-control" name="harga"  onkeypress="return isNumber(event)">
              <small id="" class="form-text text-danger"><?= form_error('harga'); ?></small>
          </div>

          <button class="btn blue-gradient btn-sm" type="submit" name="tambah">Tambah</button>
          <a href="<?= base_url('admin/paket/') ?>" class="btn ripe-malinka-gradient btn-sm text-white" type="button">Batal</a>
        </form>

       


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

