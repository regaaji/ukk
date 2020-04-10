<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cetak Blog</title>
  <style>
      h1{
        margin-top: 40px;
        text-align: center;
        font-family: arial;
      }
      h2{
        text-align: center;
        font-family: verdana;
      }
      table{
        font-size: 17px;
      }
      table thead{
        text-align: center;
      }
      p{
        float: right;
        margin-top: -1px;
        font-size: 25px;
        z-index: 999;
      }
      strong{
        float: right;
        font-size: 30px;
        margin-top: 32%;
        margin-right: -18%;
      }
  </style>
</head>
<body>
	<h1>Laundry Pintar</h1>
  <h3>JL. Raya Karangan - Tugu <br>
  Hp.  085694871343 Email : Laundry@gmail.com
  </h3>
  <hr>
  <h2>Data Transaksi </h2>
  <br>
	     <table class="table" border="1">
  			<thead>
  				<tr>
	             	<th>Kode Invice</th>
	                <th>Tgl Transaksi</th>
	                <th>Pengguna</th>
	                <th>Paket</th>
	                <th>Berat</th>
	                <th>Harga</th>
	                <th>Status Order</th>
	                <th>Total</th>
  				</tr>
  			</thead>
  			<tbody>
  				<?php
  					$no = 1; 
  					foreach( $record->result() as $row ) : 
  				?>
  				<tr>
  					<th scope="row" align="center"><?= $row->kode_invoice ?></th>
  					<td align="center"><?= $row->tgl?></td>
  					<td align="left"><?= $row->nama ?></td>
  					<td align="center"><?= $row->jenis ?><</td>
  					<td align="center"><?= $row->qty ?></td>
           			 <td align="center"><?= $row->harga ?></td>
            		<td align="center"><?= $row->status ?></td>
            		<td align="center">Rp. <?= number_format(($row->harga*$row->qty)+$row->biaya_tambahan+$row->diskon+$row->pajak) ?></td>
  				</tr>
				<?php endforeach; ?>
  			</tbody>
  		</table>
</body>
</html>