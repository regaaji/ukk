<?php 
if(!$this->session->userdata('kasir'))
{
  echo "<script>alert('Anda Harus Login');</script>";
  echo "<script>location='http://localhost/laundry_pintar/login';</script>";
  exit();
}

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title><?= $title ?></title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>fontawesome-free/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="<?= base_url('assets/'); ?>css/bootstrap.min.css" rel="stylesheet">
  <!-- Datepicker -->
  <link href="<?= base_url('assets/'); ?>css/datepicker.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="<?= base_url('assets/'); ?>css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="<?= base_url('assets/'); ?>css/admin.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/'); ?>css/style.css" rel="stylesheet">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>DataTables/datatables.min.css">
  <!-- <link rel="stylesheet" href="assets/css/jquery-ui.css"> -->
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/jquery.datetimepicker.min.css">
  
</head>

<body class="grey lighten-3">