<?php
  include('db.php');
  session_start();
  if( !isset($_SESSION["id_akun"]) ) 
  {
    header("Location: index.php");
    exit;
  }
  $nim = $_SESSION['uname'];
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
            <li>Ini adalah prediksi apakah anda bisa melanjutkan studi ke jenjang S2 IPB University</li><br>
            <li>Kriteria pertanyaan diambil dari sumber pmbpasca.ipb.ac.id</li><br>
            <li>Pilihlah jawaban pertanyaan dengan tepat agar memaksimalkan hasil prediksi</li><br>
            <li>Pastikan seluruh pertanyaan terisi sebelum menekan tombol send</li>
          </ol>
        </div>

        <div class="contact-form">
          <span class="circle one"></span>
          <span class="circle two"></span>

          <form method="POST" action="backend.php" autocomplete="off">
          <input type="hidden" for="nim" name="nim" value="<?= $nim; ?>">
            <h1 class="title">Jawablah Beberapa Pertanyaan Berikut</h1>
            <ol class="text">
              <!-- D-IV? -->
              <li class="li">Apakah alumni program D-IV?</li>
                <div class="inputGroup">
                  <input class="inp" id="satu1" name="satu" value="ya" type="radio"/>
                  <label for="satu1">Ya</label>
                </div>
                <div class="inputGroup">
                  <input class="inp" id="satu2" name="satu" value="tidak" type="radio"/>
                  <label for="satu2">Tidak</label>
                </div>
              <br>

              <!-- Mendaftar Sains? -->
              <li class="li">Apakah mendaftar program studi pada bidang sains?</li>
                <div class="inputGroup">
                  <input class="inp" id="dua1" name="dua" value="ya" type="radio"/>
                  <label for="dua1">Ya</label>
                </div>
                <div class="inputGroup">
                  <input class="inp" id="dua2" name="dua" value="tidak" type="radio"/>
                  <label for="dua2">Tidak</label>
                </div>
              <br>

                <!-- S1? -->
              <li class="li">Apakah alumni program S1?</li>
                <div class="inputGroup">
                  <input class="inp" id="tiga1" name="tiga" value="ya" type="radio"/>
                  <label for="tiga1">Ya</label>
                </div>
                <div class="inputGroup">
                  <input class="inp" id="tiga2" name="tiga" value="tidak" type="radio"/>
                  <label for="tiga2">Tidak</label>
                </div>
              <br>

              <!-- ijaah? -->
              <li class="li">Apakah memiliki ijazah?</li>
                <div class="inputGroup">
                  <input class="inp" id="empat1" name="empat" value="ya" type="radio"/>
                  <label for="empat1">Ya</label>
                </div>
                <div class="inputGroup">
                  <input class="inp" id="empat2" name="empat" value="tidak" type="radio"/>
                  <label for="empat2">Tidak</label>
                </div>
              <br>

                <!-- transkrip? -->
              <li class="li">Apakah memiliki transkrip?</li>
                <div class="inputGroup">
                  <input class="inp" id="lima1" name="lima" value="ya" type="radio"/>
                  <label for="lima1">Ya</label>
                </div>
                <div class="inputGroup">
                  <input class="inp" id="lima2" name="lima" value="tidak" type="radio"/>
                  <label for="lima2">Tidak</label>
                </div>
              <br>

                <!-- surat rekomendasi? -->
              <li class="li">Apakah memiliki surat rekomendasi?</li>
                <div class="inputGroup">
                  <input class="inp" id="enam1" name="enam" value="ya" type="radio"/>
                  <label for="enam1">Ya</label>
                </div>
                <div class="inputGroup">
                  <input class="inp" id="enam2" name="enam" value="tidak" type="radio"/>
                  <label for="enam2">Bukan</label>
                </div>
              <br>

              <!-- pemberi rekomendasi? -->
              <li class="li">Apakah pemberi rekomendasi merupakan tiga orang dosen IPB dengan gelar minimal S2?</li>
                <div class="inputGroup">
                  <input class="inp" id="tujuh1" name="tujuh" value="ya" type="radio"/>
                  <label for="tujuh1">Ya</label>
                </div>
                <div class="inputGroup">
                  <input class="inp" id="tujuh2" name="tujuh" value="tidak" type="radio"/>
                  <label for="tujuh2">Tidak</label>
                </div>
              <br>
            
                <!-- Surat biaya? -->
              <li class="li">Apakah memiliki surat jaminan biaya?</li>
                <div class="inputGroup">
                  <input class="inp" id="delapan1" name="delapan" value="ya" type="radio"/>
                  <label for="delapan1">Ya</label>
                </div>
                <div class="inputGroup">
                  <input class="inp" id="delapan2" name="delapan" value="tidak" type="radio"/>
                  <label for="delapan2">Tidak</label>
                </div>
              <br>

                <!-- sinopsis? -->
              <li class="li">Apakah memiliki sinopsis rencana penelitian?</li>
                <div class="inputGroup">
                  <input class="inp" id="sembilan1" name="sembilan" value="ya" type="radio"/>
                  <label for="sembilan1">Ya</label>
                </div>
                <div class="inputGroup">
                  <input class="inp" id="sembilan2" name="sembilan" value="tidak" type="radio"/>
                  <label for="sembilan2">Tidak</label>
                </div>
              <br>

              <!-- jalur khusus? -->
              <li class="li">Apakah mendaftar dengan jalur kelas khusus?</li>
                <div class="inputGroup">
                  <input class="inp" id="sepuluh1" name="sepuluh" value="ya" type="radio"/>
                  <label for="sepuluh1">Ya</label>
                </div>
                <div class="inputGroup">
                  <input class="inp" id="sepuluh2" name="sepuluh" value="tidak" type="radio"/>
                  <label for="sepuluh2">Tidak</label>
                </div>
              <br>

              <!-- IPK? -->
              <li class="li">Apakah IPK pada pendidikan sebelumnya berada pada rentang 2.00-2.50?</li>
              <div class="inputGroup">
                  <input class="inp" id="ipk1" name="ipk" value="ya" type="radio"/>
                  <label for="ipk1">Ya</label>
                </div>
                <div class="inputGroup">
                  <input class="inp" id="ipk2" name="ipk" value="tidak" type="radio"/>
                  <label for="ipk2">Tidak</label>
                </div>
              <br>


                <!-- TPA? -->
              <li class="li">Berapa nilai TPA pada program pendidikan sebelumnya?</li>
              <div class="input-container">  
                <input type="text" name="tpa" class="input" />
              </div>
              <br>


                <!-- Double Degree? -->
              <li class="li">Apakah mendaftar untuk program double degree?</li>
                <div class="inputGroup">
                  <input class="inp" id="tigabelas1" name="tigabelas" value="ya" type="radio"/>
                  <label for="tigabelas1">Ya</label>
                </div>
                <div class="inputGroup">
                  <input class="inp" id="tigabelas2" name="tigabelas" value="tidak" type="radio"/>
                  <label for="tigabelas2">Tidak</label>
                </div>
              <br>

                <!-- TOEFL? -->
              <li class="li">Berapa nilai TOEFL ataupun sertifikat bahasa yang dimiliki?</li>
              <div class="input-container">  
                <input type="text" name="toefl" class="input" />
              </div>
              <br>


              <!-- jalur penelitian? -->
              <li class="li">Apakah mendaftar untuk jalur penelitian?</li>
                <div class="inputGroup">
                  <input class="inp" id="limabelas1" name="limabelas" value="ya" type="radio"/>
                  <label for="limabelas1">Ya</label>
                </div>
                <div class="inputGroup">
                  <input class="inp" id="limabelas2" name="limabelas" value="tidak" type="radio"/>
                  <label for="limabelas2">Tidak</label>
                </div>
              <br>

              <!-- proposal penelitian? -->
              <li class="li">Apakah memiliki proposal penelitian?</li>
                <div class="inputGroup">
                  <input class="inp" id="enambelas1" name="enambelas" value="ya" type="radio"/>
                  <label for="enambelas1">Ya</label>
                </div>
                <div class="inputGroup">
                  <input class="inp" id="enambelas2" name="enambelas" value="tidak" type="radio"/>
                  <label for="enambelas2">Tidak</label>
                </div>
            </ol>

            <button type="submit" value="Back" class="btn"><a href="dashboard.php" style="text-decoration: none">Back</a></button>
            <button type="submit" value="Send" class="btn" name="send" id="myBtn">Send</button>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>