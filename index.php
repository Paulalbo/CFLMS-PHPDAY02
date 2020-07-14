<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>CarRental</title>
  <base href="/">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <link rel="stylesheet" href="./day02/style/styles.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;700&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>

  


  <nav class="sticky-top navbar navbar-expand-lg navbar-light flex-grow-1">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
      aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse text-left" id="navbarTogglerDemo02">
      <ul class="navbar-nav mr-auto flex-nowrap">
        <li class="nav-item"><a class="nav-link">HOME</a></li>
        <li class="nav-item"><a class="nav-link">BLOG</a></li>
        <li class="nav-item"><a class="nav-link">ABOUT</a></li>
      </ul>
    </div>
  </nav>

  <div class="jumbotron jumbotron-fluid d-flex justify-content-center align-items-center">
    <h1><b>F</b>IND – <wbr><b>R</b>ENT – <wbr><b>R</b>ETURN</h1>
  </div>
  <div id="cars" class="container-fluid">
    <h1>FIND THE RIGHT <b>CAR</b></h1>
    <h5>CLICK ON YOUR VEHICLE OF CHOICE TO SEE MORE DETAILS!</h5>
    



    <div class="row">
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "carrental";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    
    $sql = "SELECT * FROM cardetails WHERE 1";
    $result = mysqli_query($conn, $sql);

    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }


    while($row = mysqli_fetch_assoc($result)) {
      echo("<div class=\"col-xl-3 p-0 col-md-4 col-sm-12\"><div class=\"innderdiv\"><img src=\"" . $row["img"] ."\"><h5><strong>" . $row["brand"] . "</strong><br>" . $row["model"] . "<br>" . $row["price"] . " €/ hour<br>parked at:<br>" . $row["location"] . "<br>");


      if ($row["available"] == 1) {
      echo("<span class=\"green\">available</span></h5></div></div>");
    } else {
      echo("<span class=\"red\">not available</span></h5></div></div>");
    }
  }

    // Free result set
    mysqli_free_result($result);
    // Close connection
    mysqli_close($conn);
    ?>
    </div>



  </div>

  <div id="SUV" class="container-fluid">
    <h1>FIND THE RIGHT <b>SPORT UTILITY VEHICLE (SUV)</b></h1>
    <h5>CLICK ON YOUR VEHICLE OF CHOICE TO SEE MORE DETAILS!</h5>
    <div class="row">
      <div class="col-xl-3 p-0 col-md-4 col-sm-12">
        <div class="innderdiv"><img
            src="https://www.sixt.com/fileadmin/files/global/user_upload/fleet/png/350x200/maserati-levante-5d-schwarz-2018.png">
        </div>
      </div>
      <div class="col-xl-3 p-0 col-md-4 col-sm-12">
        <div class="innderdiv"><img
            src="https://www.sixt.com/fileadmin/files/global/user_upload/fleet/png/350x200/jaguar-f-pace-5d-weiss-2016.png">
        </div>
      </div>
      <div class="col-xl-3 p-0 col-md-4 col-sm-12">
        <div class="innderdiv"><img
            src="https://www.sixt.com/fileadmin/files/global/user_upload/fleet/png/350x200/alfa-romeo-stelvio-5d-rot-2019.png">
        </div>
      </div>
      <div class="col-xl-3 p-0 col-md-4 col-sm-12">
        <div class="innderdiv"><img
            src="https://www.sixt.com/fileadmin/files/global/user_upload/fleet/png/350x200/vw-tiguan-5d-grau-2019.png">
        </div>
      </div>
      <div class="col-xl-3 p-0 col-md-4 col-sm-12">
        <div class="innderdiv"><img
            src="https://www.sixt.com/fileadmin/files/global/user_upload/fleet/png/350x200/jeep-grand-cherokee-srt-5d-rot-2014.png">
        </div>
      </div>
      <div class="col-xl-3 p-0 col-md-4 col-sm-12">
        <div class="innderdiv"><img
            src="https://www.sixt.com/fileadmin/files/global/user_upload/fleet/png/350x200/bmw-x4-m40i-5d-schwarz-2019.png">
        </div>
      </div>
      <div class="col-xl-3 p-0 col-md-4 col-sm-12">
        <div class="innderdiv"><img
            src="https://www.sixt.com/fileadmin/files/global/user_upload/fleet/png/350x200/mb-g-klasse-5d-grau-2018.png">
        </div>
      </div>
      <div class="col-xl-3 p-0 col-md-4 col-sm-12">
        <div class="innderdiv"><img
            src="https://www.sixt.com/fileadmin/files/global/user_upload/fleet/png/350x200/land-rover-range-rover-velar-5d-silber-2018.png">
        </div>
      </div>
    </div>

  </div>

  <div id="bikes" class="container-fluid">
    <h1>FIND THE RIGHT <b>BIKE</b></h1>
    <h5>CLICK ON YOUR VEHICLE OF CHOICE TO SEE MORE DETAILS!</h5>
    <div class="row">
      <div class="col-xl-3 p-0 col-md-4 col-sm-12">
        <div class="innderdiv"><img
            src="https://www.ktm.com/ktmgroup-storage/PHO_BIKE_90_RE_KTM-SX-450F-Grad-WEB_%23SALL_%23AEPI_%23V1.png">
        </div>
      </div>
      <div class="col-xl-3 p-0 col-md-4 col-sm-12">
        <div class="innderdiv"><img
            src="https://www.ktm.com/ktmgroup-storage/PHO_BIKE_90_RE_450-EXC-F-SIXDAYS-MY21_%23SALL_%23AEPI_%23V1.png">
        </div>
      </div>
      <div class="col-xl-3 p-0 col-md-4 col-sm-12">
        <div class="innderdiv"><img
            src="https://www.ktm.com/ktmgroup-storage/PHO_BIKE_90_RE_1290-advs-2019-orange-90-re_%23SALL_%23AEPI_%23V1.png">
        </div>
      </div>
      <div class="col-xl-3 p-0 col-md-4 col-sm-12">
        <div class="innderdiv"><img
            src="https://www.ktm.com/ktmgroup-storage/PHO_BIKE_90_RE_790ADVRR-MY20-PHO-BIKE-90-RE_%23SALL_%23AEPI_%23V1.png">
        </div>
      </div>
      <div class="col-xl-3 p-0 col-md-4 col-sm-12">
        <div class="innderdiv"><img
            src="https://www.ktm.com/ktmgroup-storage/PHO_BIKE_90_RE_RC125-MY20-PHO-BIKE-90-RE_%23SALL_%23AEPI_%23V1.png">
        </div>
      </div>
      <div class="col-xl-3 p-0 col-md-4 col-sm-12">
        <div class="innderdiv"><img
            src="https://www.ktm.com/ktmgroup-storage/PHO_BIKE_90_RE_690-smcr-2019-90-re_%23SALL_%23AEPI_%23V1.png">
        </div>
      </div>
      <div class="col-xl-3 p-0 col-md-4 col-sm-12">
        <div class="innderdiv"><img
            src="https://www.ktm.com/ktmgroup-storage/PHO_BIKE_90_RE_1290SUPERDUKER-MY20-Orange-PHO-BIKE-90-RE_%23SALL_%23AEPI_%23V1.png">
        </div>
      </div>
      <div class="col-xl-3 p-0 col-md-4 col-sm-12">
        <div class="innderdiv"><img
            src="https://www.ktm.com/ktmgroup-storage/PHO_BIKE_90_RE_890DUKE-MY20-PHO-BIKE-90-RE_%23SALL_%23AEPI_%23V2.png">
        </div>
      </div>
    </div>

  </div>


  <div id="contact" class="container-fluid">
    <div class="row">
      <div class="contactimg col-xl-6 p-0 col-md-6 col-sm-12">
        <h1><b>F</b>IND<br><b>R</b>ENT<br><b>R</b>ETURN</h1>
      </div>

      <div class="col-xl-6 p-0 col-md-6 col-sm-12">
        <form [formGroup]="info" (ngSubmit)="onSubmit()">
          <h1>GET IN TOUCH WITH US!</h1>
          <h5>INSERT YOUR DATA</h5>

          <label>
            First Name:<br>
            <input type="text" formControlName="firstName">
          </label>
          <label>
            Last Name:<br>
            <input type="text" formControlName="lastName">
          </label>
          <br>
          <label>
            Email:<br>
            <input type="text" formControlName="email">
          </label>
          <br>
          <label>
            Comment:<br>
            <textarea formControlName="comment" placeholder="I'm interested in other infomations ... "></textarea>
          </label>
          <br>
          <input type="submit" class="btn" value="Submit">

        </form>
      </div>
    </div>
  </div>

</body>

</html>