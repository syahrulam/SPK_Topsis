<?php
//koneksi
session_start();
include "koneksi.php";

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>UAS DataWereHouse</title>
  <!--bootstrap-->
  <link href="tampilan/css/bootstrap.min.css" rel="stylesheet">

  <!--icon-->
  <link href="tampilan/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <style>
    body {
      background-color: #98FB98;
    }
  </style>


</head>

<body>

  <!--menu-->
  <nav class="navbar navbar-default navbar-custom navbar-dark bg-dark" style='background-color:#ff0;'>
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">SPK Metode Topsis</a>
      </div>

      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="kriteria.php">Kriteria</a>
          </li>
          <li>
            <a href="alternatif.php">Alternatif</a>
          </li>
          <li>
            <a href="poin.php">Poin</a>
          </li>
          <li>
            <a href="nilmat.php">Nilai Matriks</a>
          </li>
          <li>
            <a href="hastop.php">Hasil Topsis</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <!--plugin-->
  <script src="tampilan/js/bootstrap.min.js"></script>

</body>

</html>