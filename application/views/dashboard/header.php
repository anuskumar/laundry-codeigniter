<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style type="text/css">
  
  .affix
  {
    top: 0;
    width: 100%;
    z-index: 9999 !important;
  }

</style>

</head>
<body>


  <div class="jumbotron text-center" style="margin-bottom: 0">
    <h1>Website Laundry!</h1>
    <p>Resize this responsive page to see the effect!</p>
  </div>

<nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="200">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

    <a class="navbar-brand" href="<?php echo base_url().'admin_dashboard/index'; ?>">LaundryBrand</a>
    </div> 
    <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav">
      <li><a href="<?php echo base_url().'admin_dashboard/index' ?>"><span class="glyphicon glyphicon-home"></span> Dashboard</a></li>
      <li><a href="<?php echo base_url().'admin_dashboard/pelanggan' ?>"><span class="glyphicon glyphicon-user"></span> Data Pelanggan</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-transfer"></span> Transaksi</a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo base_url().'admin_dashboard/transaksi' ?>"><span class="glyphicon glyphicon-arrow-right"></span> Data Transaksi</a></li>
          <li><a href="<?php echo base_url().'admin_dashboard/pakaian' ?>"><span class="glyphicon glyphicon-arrow-right"></span> Data Pakaian</a></li>
        </ul>
      </li>


      <li><a href="<?php echo base_url().'laporanpdf/index' ?>"><span class="glyphicon glyphicon-print"></span> Cetak Laporan</a></li>
     
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="<?php echo base_url().'welcome/logout'; ?>"><span class="glyphicon glyphicon-log-out"> Logout</span></a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="caret"></span> User Laundry!</a>
        <ul class="dropdown-menu">
          <li><a href="#"><span class="glyphicon glyphicon-user"></span> Ganti Password</a></li>
        </ul>
      </li>
    </ul>
  </div>
  </div>
</nav>

