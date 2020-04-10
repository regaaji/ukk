

  <!--Main layout-->
  <main class="pt-5 mx-lg-5">
    <div class="container-fluid mt-5">

     	
     	
		<!-- Page Heading -->
                <div class="row">
                    <div class='col-sm-12'>
                      <h4 class='float-left page-title pt-3'>Detail Transaksi </h4>
                      <ol class='breadcrumb float-right black-text'>
                        <li class="breadcumb-item"><a href='#' class="primary-text">Beranda</a><i class="fas fa-angle-double-right mx-2" aria-hidden="true"></i></li>
                        <li class='breadcumb-item" active'>Transaksi <i class="fas fa-angle-double-right mx-2" aria-hidden="true"></i></li>
                        <li class='breadcumb-item" active'>Detail Transaksi</li>
                    </div>
                </div>
                <!-- /.row -->

         <div class="row wow fadeIn">

        <!--Grid column-->
        <div class="col-md-12 mb-4">

          <!--Card-->
          <div class="card">

			<div class="card-header blue-gradient white-text"><i class="fas fa-user-plus pr-2"></i>Detail Transaksi</div>
	
            <!--Card content-->
            <div class="card-body px-5">
     

			
	<form action="" method="post">
            <div class="row">


            	<table class='table table-bordered'>
            		<tbody>
            			<tr>
            				<td class='blue-gradient font-weight-bold text-white' width='30%'>No. Order</td>
            				<td><?= $detail['kode_invoice'] ?></td>
            			</tr>
            			<tr>
            				<td class='blue-gradient font-weight-bold text-white' width='30%'>Nama Lengkap</td>
            				<td><?= $detail['nama']; ?></td>
            			</tr>
            			<tr>
            				<td class='blue-gradient font-weight-bold text-white' width='30%'>Alamat Lengkap</td>
            				<td><?= $detail['alamat']; ?></td>
            			</tr>
            			<tr>
            				<td class='blue-gradient font-weight-bold text-white' width='30%'>Telepon</td>
            				<td><?= $detail['tlp']; ?> </td>
            			</tr>

            			<tr> 
            				<td class='blue-gradient font-weight-bold text-white' width='30%'>Tipe Pembayaran</td>
            				<td>
            					<?php if( $detail['dibayar'] == "belum_dibayar") :?>
            						<select name="dibayar" id="" class="form-control">
            							<option value="belum_dibayar">Belum Dibayar</option>
            							<option value="dibayar">Dibayar</option>
            						</select>
            						<?php else : ?>
            							<p>Dibayar</p>
            						<?php endif; ?>
            				</td>
            			</tr>

            			<tr> 
            				<td class='blue-gradient font-weight-bold text-white' width='30%'>Status Order</td>
            				<td>
            					<?php if($detail['status'] == "baru") : ?>

	            				<select name="status" id="" class="form-control">
	            					<option value="baru">Baru</option>
	            					<option value="proses">Proses</option>
	            					<option value="selesai">Selesai</option>
	            					<option value="diambil">Diambil</option>
	            				</select>

            				<?php elseif($detail['status'] == "proses") : ?>

								<select name="status" id="" class="form-control">
	            					<option value="proses">Proses</option>
	            					<option value="selesai">Selesai</option>
	            					<option value="diambil">Diambil</option>
	            				</select>

	            			<?php elseif($detail['status'] == "selesai") :?>
								<select name="status" id="" class="form-control">
	            					<option value="selesai">Selesai</option>
	            					<option value="diambil">Diambil</option>
	            				</select>

	            			<?php else : ?>
								<p>Diambil</p>


            				<?php endif; ?>
            				</td>
            			</tr>

            			<tr>
            				<td class='blue-gradient font-weight-bold text-white' width='30%'>Tanggal Ambil</td>
            				<td><?= $detail['tanggal_bayar'] ?> </td>
            			</tr>

            		</tbody>
            	</table>


            
            		

            		<div class="table-responsive mt-5">
							<table class="table table-hover table-bordered">
							<thead class="bg-gray">
								<tr>
									<th>Kode Invoice</th>
									<th>Tgl. Order</th>
									<th>Paket Laundry</th>
									<th>Berat Cucian</th>
									<th>Harga</th>
									<th>Subtotal</th>
								</tr>
							</thead>
							<tbody>
									<tr>
										<td><?= $detail['kode_invoice'] ?></td>
										<td><?= $detail['tgl']; ?></td>
										<td><?= $detail['nama_paket']; ?></td>
										<td><?= $detail['qty']; ?></td>
										<td>Rp. <?= number_format($detail['harga']); ?></td>
										<td>Rp. <?= number_format($detail['harga'] * $detail['qty']); ?></td>
									</tr>
							</tbody>
							<tfoot>
								<tr>
									
									<th colspan="5" class="">Biaya Tambahan</th>
									<td>Rp. <?= number_format($detail['biaya_tambahan']); ?></td>
								</tr>
								<tr>
									
									<th colspan="5" class="">Pajak</th>
									<td>Rp. <?= number_format($detail['pajak']); ?></td>
								</tr>
								<tr>
									
									<th colspan="5" class="">Diskon</th>
									<td>Rp. <?= number_format($detail['diskon']); ?></td>
								</tr>
								<tr>

									<th colspan="5" class="blue-gradient text-white">Total Pesanan</th>
									<td>Rp. <?= number_format(($detail['harga']*$detail['qty'])+$detail['biaya_tambahan']+$detail['diskon']+$detail['pajak']); ?></td>
								</tr>
							</tfoot>
						</table>
            		 </div>

            		

            		  <?php if($detail['status'] == "diambil") : ?>

            		  <?php else : ?>
						<button class="btn blue-gradient btn-sm" type="submit" name="proses">Proses Order</button>
            		  <?php endif; ?>
            		

            		
            </div>

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

