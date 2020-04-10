

  <!--Main layout-->
  <main class="pt-5 mx-lg-5">
    <div class="container-fluid mt-5">


          <!-- Page Heading -->
                <div class="row">
                    <div class='col-sm-12'>
                      <h4 class='float-left page-title pt-3'>Order Transaksi</h4>
                      <ol class='breadcrumb float-right black-text'>
                        <li class="breadcumb-item"><a href='#' class="primary-text">Beranda</a><i class="fas fa-angle-double-right mx-2" aria-hidden="true"></i></li>
                        <li class='breadcumb-item" active'>Order Transaksi</li>
                      </ol>
                    </div>
                </div>
                <!-- /.row -->
     
         <div class="row wow fadeIn">

        <!--Grid column-->
        <div class="col-md-12 mb-4">

          <!--Card-->
          <div class="card shadow">

          <div class="card-header blue-gradient white-text"><i class="fas fa-plus pr-1"></i>Order Transaksi</div>
            <!--Card content-->
            <div class="card-body">

             


           <form action="" class="form" method="post">

                <input type="hidden" value="<?= date('Y-m-d H:i:s'); ?>" name="tgl">
                <input type="hidden" value="<?= $this->session->userdata('id_user') ?>" name="user_id">


              <div class="md-form">
                <?php 
                    function acak($panjang)
                    {
                      $karakter = '123456789';
                      $string = '';
                      for ($i=0; $i < $panjang; $i++) { 
                        $pos = rand(0, strlen($karakter)-1);
                        $string .= $karakter{$pos};
                      }

                      return $string;
                    }

                    $hasil = acak(4);
                 ?>
                <label for="">Kode Invoice</label>
                <input type="text" name="kode_invoice" class="form-control" readonly value="KD<?= $hasil ?>">
                 <small id="" class="form-text text-danger"><?= form_error('kode_invoice'); ?></small>
              </div>

              <div class="form-group">
                <label for="">Nama Customer</label>
                <?php $ambil=$this->db->query("SELECT * FROM tb_member"); ?>
                      <select name="member_id" id="" class="form-control">
                      <?php foreach($ambil->result_array() as $pecah) : ?>
                        <option value="<?= $pecah['id_member'] ?>"><?= $pecah['nama'] ?></option>
                      <?php endforeach; ?>
                      </select>
                    <small id="" class="form-text text-danger"><?= form_error('member_id'); ?></small>
              </div>

              <div class="form-group">
                <label for="">Alamat Lengkap</label>
                <textarea name="keterangan" id="" rows="5" class="form-control">
                  
                </textarea>
                <small id="" class="form-text text-danger"><?= form_error('keterangan'); ?></small>
              </div>

              <div class="form-group">
                <label for="">Tanggal Ambil</label>
                <input id="datetimepicker" type="text" class="form-control" name="tanggal_ambil">
              </div>

              <div class="form-group">
                <label for="">Nama Outlet</label>
                <?php $ambil=$this->db->query("SELECT * FROM tb_outlet"); ?>
                      <select name="outlet_id" id="" class="form-control">
                      <?php foreach($ambil->result_array() as $pecah) : ?>
                        <option value="<?= $pecah['id_outlet'] ?>"><?= $pecah['nama'] ?></option>
                      <?php endforeach; ?>
                      </select>
              </div>

               <div class="alert alert-success">
                <p>
                  1. Pajak akan dikenakan sebesar 5% <br>
                  2. Diskon akan diberikan saat berat(kg) lebih dari 10 <br>
                  3. Biaya Tambahan akan diberikan jika anda memilih dibawah ini:
                </p>
                <div class="form-group" style="margin-top: -10px; margin-left: 15px;">
                <!-- Default unchecked -->
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="tes" name="language" value="2000" onclick="totalIt()">
                    <label class="custom-control-label" for="tes">Cuci Setrika</label>
                </div> 
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="check" name="language" value="1000" onclick="totalIt()">
                    <label class="custom-control-label" for="check">Cuci Kering</label>
                </div>
                <input type="hidden" id="total" value="0" readonly="readonly" name="biaya">
              </div>

                    </div>

              <div class="form-group">
                <label for="">Paket Laundry</label>
                <?php $ambil=$this->db->query("SELECT * FROM tb_paket"); ?>
                <select name="paket_id" id="" class="form-control">
                 <?php foreach($ambil->result_array() as $pecah) : ?>
                      <option value="<?= $pecah['id_paket'] ?>"><?= $pecah['jenis'] ?></option>
                   <?php endforeach; ?> 
                </select>
              </div>

              


              <div class="form-group">
                <label for="">Berat (Kg)</label>
                <div class="price-row">
                 <span class="minus-plus-input">
                  <input type='button' value='-' class='qtyminus btn-primary btn-lg px-3' field='quantity' />
                  <input name='quantity' value='0' class='qty' size="10" />
                  <input type='button' value='+' class='qtyplus btn-primary btn-lg px-3' field='quantity' />


                </span>
                <br><br>
                <span class="error text-danger float-right" style="display: none;">Harus Angka</span>
                <br>
              </div> 
            </div> 


              <div class="form-group">
                <label for="">Status Order</label>
                <select name="status" id="" class="form-control">
                      <option value="baru">Baru</option>
                      <option value="proses">Proses</option>
                      <option value="selesai">Selesai</option>
                      <option value="diambil">Diambil</option>
                </select>
              </div>

              <div class="form-group">
                <label for="">Status Pembayaran</label>
                <select name="dibayar" id="" class="form-control">
                      <option value="dibayar">Dibayar</option>
                      <option value="belum_dibayar">Belum Dibayar</option>
                </select>
              </div>



              

             


            <button class="btn btn-primary" type="submit" name="simpan">Simpan</button>

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

