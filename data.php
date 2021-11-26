<?php
  include('db.php');
  session_start();
  if( !isset($_SESSION["id_akun"]) ) 
  {
    header("Location: index.php");
    exit;
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Prediksi Penerimaan Program Magister</title>
    <link rel="stylesheet" href="css/style_predict.css" />
    <link rel="shortcut icon" href="img/analytics.png"/>
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>

    <div class="container">
      <span class="big-circle"></span>
      <img src="img/shape.png" class="square" alt="" />
      <div class="form">
        <div class="contact-info">
          <h3 class="title">Perhatikan!</h3>
          
          <ol class="text">
            <li>Isi data dirimu dengan lengkap</li><br>
            <li>Setelah seluruh data diri telah terisi, klik send</li>
          </ol>
        </div>

        <div class="contact-form">
          <span class="circle one"></span>
          <span class="circle two"></span>

          <form action="predict.php" autocomplete="off">
            <h1 class="title">Data Diri</h1>
            <ol class="text">
            <p class="li">Nama</p>
              <div class="input-container">  
                <input type="text" name="nama" class="input" />
              </div>
            <br>

            <p class="li">Fakultas</p>
              <div class="input-container">  
                <input type="text" name="fakultas" class="input" />
              </div>
            <br>

            <p class="li">Departemen</p>
              <div class="input-container">  
                <input type="text" name="departemen" class="input" />
              </div>
            <br>

            <p class="li">Semester</p>
              <div class="input-container">  
                <input type="text" name="semester" class="input" />
              </div>
            <br>

            <p class="li">IPK</p>
              <div class="input-container">  
                <input type="text" name="ipk" class="input" />
              </div>
            <br>

            <p class="li">IP Semester 1</p>
              <div class="input-container">  
                <input type="text" name="ip1" class="input" />
              </div>
            <br>

            <p class="li">IP Semester 2</p>
              <div class="input-container">  
                <input type="text" name="ip2" class="input" />
              </div>
            <br>

            <p class="li">IP Semester 3</p>
              <div class="input-container">  
                <input type="text" name="ip3" class="input" />
              </div>
            <br>

            <p class="li">IP Semester 4</p>
              <div class="input-container">  
                <input type="text" name="ip4" class="input" />
              </div>
            <br>

            <p class="li">IP Semester 5</p>
              <div class="input-container">  
                <input type="text" name="ip5" class="input" />
              </div>
            <br>

            <p class="li">IP Semester 6</p>
              <div class="input-container">  
                <input type="text" name="ip6" class="input" />
              </div>
            <br>

            <p class="li">IP Semester 7</p>
              <div class="input-container">  
                <input type="text" name="ip7" class="input" />
              </div>
            <br>

            <p class="li">IP Semester 8</p>
              <div class="input-container">  
                <input type="text" name="ip8" class="input" />
              </div>
            <br>
            </ol>


            <button type="submit" value="Back" class="btn"><a href="dashboard.php" style="text-decoration: none">Back</a></button>
            <button type="submit" value="Send" class="btn" id="myBtn">Send</button>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>