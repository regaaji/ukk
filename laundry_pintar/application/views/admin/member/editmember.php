
  <!--Main layout-->
  <main class="pt-5 mx-lg-5">
    <div class="container-fluid mt-5">


         <!-- Page Heading -->
      <div class="row">
        <div class='col-sm-12'>
          <h4 class='float-left page-title pt-3'>Member Laundry </h4>
          <ol class='breadcrumb float-right black-text'>
            <li class="breadcumb-item"><a href='#' class="primary-text">Beranda</a><i class="fas fa-angle-double-right mx-2" aria-hidden="true"></i></li>
            <li class='breadcumb-item" active'>Member Laundry</li>
          </ol>
        </div>
      </div>
      <!-- /.row -->
     
         <div class="row wow fadeIn">

        <!--Grid column-->
        <div class="col-md-12 mb-4">

          <!--Card-->
          <div class="card shadow">

          <div class="card-header blue-gradient white-text"><i class="fas fa-list pr-1"></i>Edit Member Laundry</div>

            <!--Card content-->
            <div class="card-body">

              

             <form action="" method="post" style="margin-top: -20px;">
              <div class="md-form">
                <label for="">Nama</label>
                <input type="text" class="form-control" name="nama" value="<?= $edit['nama'] ?>">
                <small id="" class="form-text text-danger"><?= form_error('nama'); ?></small>
              </div>
              <div class="form-group">
                <label for="">Alamat</label>
                <textarea name="alamat" id="" class="form-control"><?= $edit['alamat'] ?></textarea>
                <small id="" class="form-text text-danger"><?= form_error('alamat'); ?></small>
              </div>
              <div class="from-group">
                <label for="">Jenis Kelamin</label>
                <select name="jenis_kelamin" id="" class="form-control">
                  <option value="L" <?php if($edit['jenis_kelamin'] == 'L'){ echo 'selected'; } ?>>Laki-laki</option>
                  <option value="P" <?php if($edit['jenis_kelamin'] == 'P'){ echo 'selected'; } ?>>Perempuan</option>
                </select>
                <small id="" class="form-text text-danger"><?= form_error('jenis_kelamin'); ?></small>
              </div>
              <div class="md-form">
                <label for="">Telepon</label>
                <input type="text" class="form-control" value="<?= $edit['tlp'] ?>" name="tlp" onkeypress="return isNumber(event)">
                <small id="" class="form-text text-danger"><?= form_error('tlp'); ?></small>
              </div>


              <button class="btn blue-gradient btn-sm" type="submit" name="edit">Edit</button>
              <a href="<?= base_url('admin/member/') ?>" class="btn ripe-malinka-gradient btn-sm text-white">Batal</a>



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

