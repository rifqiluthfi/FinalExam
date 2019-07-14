<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <title>PROJECT</title>
  </head>
  <body id="page-top">

    <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
      <div class="container">
      <a class="navbar-brand" href="#"> <button type="button" class="btn btn-info" style="border-radius: 20px"> KING BURJO RESTAURANT </button> </a>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="home.html"> <button type="button" class="btn btn-info" style="border-radius: 20px"> HOME  </button> <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item active">
              <a class="nav-link" href="profil.html"> <button type="button" class="btn btn-info" style="border-radius: 20px"> PROFIL  </button> </a>
            </li>

            <li class="nav-item active">
              <a class="nav-link" href="menu.php"> <button type="button" class="btn btn-info" style="border-radius: 20px"> MENU </button> </a>
            </li>



          </ul>
          </div>
        </div>
      </nav>

<div class="container">
  <body>

  <table class="table-container">
    <tr>
      <td class="teh">
        <br><br><br> <center><hr>
        <h1 class="title" style="font-family: Century Schoolbook;"> Ice Tea </h1>
        <div style="i">
          <img src="teh.jpg" style=" width: 50% " >
          <p style="font-family: Century Schoolbook;"> Harga : Rp.3.000 </p>
           <h3>CODE "1"</h3>
        </div>
      </center>
      </td>

      <td class="jeruk">
        <br><br><br><br><br>
        <hr> <center>
        <h1 class="title" style="font-family: Century Schoolbook;"> Ice Orange </h1>
        <div>
          <img src="jeruk.jpg" style="width: 50%" >
          <p style="font-family: Century Schoolbook;"> Harga : Rp.3.000 </p>
           <h3>CODE "2"</h3>
        </div>
      </center>
      </td>
    </tr>

    <tr>
      <td>
        <hr> <br><br><center>
        <h1 class="title" style="font-family: Century Schoolbook;"> Ice Milo</h1>
        <div>
          <img src="milo.jpg" style="width: 50%">
          <p style="font-family: Century Schoolbook;"> Harga : Rp.5.000</p>
           <h3>CODE "3"</h3>
        </div>
      </center>
      </td>

      <td>
        <hr><center>
        <h1 class="title" style="font-family: Century Schoolbook;"> Ice Good day </h1>
        <div>
          <img src="day.jpg" style="width: 50%">
          <p style="font-family: Century Schoolbook;"> Harga : Rp.5.000</p>
           <h3>CODE "4"</h3>
        </div>
      </center>
      </td>
    </tr>


    <tr>
      <td class="mie">
        <hr><br> <center>
        <h1 class="title" style="font-family: Century Schoolbook;"> Mie Dok-dok </h1>
        <div>
          <img src="mie.jpg" style=" width: 50% " style="border-radius: 10px" >
          <p style="font-family: Century Schoolbook;"> Harga : Rp.10.000 </p>
          <h3>CODE "5"</h3>
        </div>
      </center>
      </td>

      <td class="mgl">

        <hr> <center>
        <h1 class="title" style="font-family: Century Schoolbook;"> Magelangan </h1>
        <div>
          <img src="mgl.jpg" style="width: 50%" >
          <p style="font-family: Century Schoolbook;"> Harga : Rp.9.000 </p>
           <h3>CODE "6"</h3>
        </div>
      </center>
      </td>
    </tr>

    <tr>
      <td>
        <hr><center>
        <h1 class="title" style="font-family: Century Schoolbook;"> Nasi Telur </h1>
        <div>
          <img src="telur.jpg" style="width: 50%">
          <p style="font-family: Century Schoolbook;"> Harga : Rp.7.000</p>
           <h3>CODE "7"</h3>
        </div>
      </center>
      </td>

      <td>
        <hr><center>
        <h1 class="title" style="font-family: Century Schoolbook;"> Nasi Sarden </h1>
        <div>
          <img src="sarden.jpg" style="width: 50%">
          <p style="font-family: Century Schoolbook;"> Harga : Rp. 8.000</p>
           <h3>CODE "8"</h3>
        </div>
      </center>
      </td>
    </tr>
    <td>
    <h1 align="center">Reservation</h1>
    <div class="res_form_container" align="center">
      <form action="" method="POST" id="res_form" class="res_form" align="center">
        <div class="d-flex flex-sm-row flex-column align-items-center justify-content-start" align="center">
          <input type="date" id="datepicker" class="res_input" required="required"name="Date" value="Date">
          <input type="timepicker" class="res_input timepicker" required="required"name="Time" placeholder="Time">
          <input type="text" class="res_input" name="Person" placeholder="Person..."></input>
        </div>
        <br>
        <div class="res_name">
          <input type="username" name="Name" placeholder="Name...">
        </div><br>
        <input type="submit" name="sbt" value="Submit">
      </form>
      <?php
      require 'reservation.php';
        if(isset($_POST["sbt"])){
          queryData($_POST);
        }
       ?>
    </div>
    </td>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script src="https://cdn.rawgit.com/bungfrangki/efeksalju/2a7805c7/efek-salju-2.js" type="text/javascript"></script>
  </body>
</html>
