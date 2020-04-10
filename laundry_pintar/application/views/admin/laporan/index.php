

  <!--Main layout-->
  <main class="pt-5 mx-lg-5">
    <div class="container-fluid mt-5">


      <!-- Page Heading -->
      <div class="row">
        <div class='col-sm-12'>
          <h4 class='float-left page-title pt-3'>Laporan</h4>
          <ol class='breadcrumb float-right black-text'>
            <li class="breadcumb-item"><a href='#' class="primary-text">Beranda</a><i class="fas fa-angle-double-right mx-2" aria-hidden="true"></i></li>
            <li class='breadcumb-item" active'>Laporan</li>
          </ol>
        </div>
      </div>
      <!-- /.row -->

     
         <div class="row wow fadeIn">

        <!--Grid column-->
        <div class="col-md-12 mb-4">

           <!--Card-->
          <div class="card shadow">

           <div class="card-header blue-gradient white-text"><i class="fas fa-list pr-1"></i>Data Laporan</div>

           <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>">

            <!--Card content-->
            <div class="card-body">
             

              <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link blue-gradient active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Semua Data</a>
                </li>
                
                <li class="nav-item">
                  <a class="nav-link blue-gradient " id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Per Tanggal</a>
                </li>
                
              </ul>
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                  <div class="form-group">
                    <form method="post" target="_blank" action="<?= base_url('admin/laporan/laporan_pdf') ?>">
                      <div class="form-group">
                        <label for="">Semua</label>
                        <input name="semua" type="checkbox"required="" />
                      </div>
                      <button type="submit" class="btn blue-gradient btn-sm m-b-5">Tampilkan</button> 
                    </form>
                  </div>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                  <form method="post" target="_blank" action="<?= base_url('admin/laporan/laporan') ?>">
                    <label for="">Tanggal</label><br>
                    <input name="dari" type="text"  value="Dari Tanggal" id="tanggal" size="12"/>
                    <input name="ke" type="text" value="sampai Tanggal" id="tanggal1" size="12"/>
                    <button type="submit" class="btn blue-gradient btn-sm m-b-5">Tampilkan</button> 
                  </form>
                </div>
                
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

