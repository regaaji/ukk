

  <!--Main layout-->
  <main class="pt-5 mx-lg-5">
    <div class="container-fluid mt-5">


      <!-- Page Heading -->
      <div class="row">
        <div class='col-sm-12'>
          <h4 class='float-left page-title pt-3'>Edit Profil</h4>
          <ol class='breadcrumb float-right black-text'>
            <li class="breadcumb-item"><a href='#' class="primary-text">Beranda</a><i class="fas fa-angle-double-right mx-2" aria-hidden="true"></i></li>
            <li class='breadcumb-item" active'>Edit Profil</li>
          </ol>
        </div>
      </div>
      <!-- /.row -->

     
         <div class="row wow fadeIn">

        <!--Grid column-->
        <div class="col-md-12 mb-4">

           <!--Card-->
          <div class="card shadow">

           <div class="card-header blue-gradient white-text"><i class="fas fa-edit pr-1"></i>Edit Profil</div>

           <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>">

            <!--Card content-->
            <div class="card-body">
            
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>">

              <form action="" method="post">
                
                <div class="form-group">
                  <label for="">Nama</label>
                  <input type="text" class="form-control" name="nama" value="<?= $edit['nama'] ?>">
                  <small id="" class="form-text text-danger"><?= form_error('nama'); ?></small>
                </div>


                <div class="form-group">
                  <label for="">Username</label>
                  <input type="text" class="form-control" name="username" value="<?= $edit['username'] ?>">
                  <small id="" class="form-text text-danger"><?= form_error('username'); ?></small>
                </div>
                


                <div class="form-group">
                  <label for="">Nama Outlet</label>
                  <select name="outlet_id" id="" class="form-control">
                    <?php $ambil = $this->db->query("SELECT * FROM tb_outlet"); ?>
                    <?php foreach( $ambil->result_array() as $pecah) : ?>
                     <option value="<?= $pecah['id_outlet']; ?>"><?= $pecah['nama']; ?></option>
                   <?php endforeach; ?>
                 
                 </select>
                 <small id="" class="form-text text-danger"><?= form_error('outlet_id'); ?></small>
               </div>

               

              <button class="btn blue-gradient btn-sm" type="submit" name="edit">Edit</button>


                <a class="btn purple-gradient btn-sm" href="<?= base_url('kasir/profil/gantipassword/') ?>">Ganti Password</a>


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

