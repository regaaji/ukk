

  <!--Main layout-->
  <main class="pt-5 mx-lg-5">
    <div class="container-fluid mt-5">


      <!-- Page Heading -->
      <div class="row">
        <div class='col-sm-12'>
          <h4 class='float-left page-title pt-3'>Ganti Password</h4>
          <ol class='breadcrumb float-right black-text'>
            <li class="breadcumb-item"><a href='#' class="primary-text">Beranda</a><i class="fas fa-angle-double-right mx-2" aria-hidden="true"></i></li>
            <li class='breadcumb-item" active'>Ganti Password</li>
          </ol>
        </div>
      </div>
      <!-- /.row -->

     
         <div class="row wow fadeIn">

        <!--Grid column-->
        <div class="col-md-12 mb-4">

           <!--Card-->
          <div class="card shadow">

           <div class="card-header blue-gradient white-text"><i class="fas fa-lock pr-1"></i>Ganti Password</div>

           <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>">

            <!--Card content-->
            <div class="card-body">
            
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>">

               <!--Body-->
                <form action="" method="post" style="margin-top: -10px;">
                    <div class="modal-body">
                      <div class="text-center">
                        <i class="fas fa-user-lock fa-2x mb-3 animated rotateIn"></i>
                          <div class="md-form">
                            <input type="password" name="password" class="form-control" placeholder="Masukkan Password">
                          <small id="" class="form-text text-danger"><?= form_error('password'); ?></small>
                          </div>
                        
                      </div>
                    </div>

                      <button type="submit" name="simpan" class="btn blue-gradient btn-sm">Simpan
                      </button>
                      <a href="<?= base_url('admin/profil/index') ?>" class="btn ripe-malinka-gradient btn-sm text-white waves-effect">Batal</a>

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

