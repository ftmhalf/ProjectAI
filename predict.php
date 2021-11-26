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
            <li>Ini adalah prediksi apakah anda bisa melanjutkan studi ke jenjang S2 IPB University</li><br>
            <li>Kriteria pertanyaan diambil dari sumber pmbpasca.ipb.ac.id</li><br>
            <li>Pilihlah jawaban pertanyaan dengan tepat agar memaksimalkan hasil prediksi</li><br>
            <li>Pastikan seluruh pertanyaan terisi sebelum menekan tombol send</li>
          </ol>
        </div>

        <div class="contact-form">
          <span class="circle one"></span>
          <span class="circle two"></span>

          <form action="predict.php" autocomplete="off">
            <h1 class="title">Jawablah Beberapa Pertanyaan Berikut</h1>
            <ol class="text">
              <!-- D-IV?
                  S-1? -->
              <li class="li">Anda lulusan dari jenjang?</li>
                <div class="inputGroup">
                  <input id="satu2" name="satu" type="radio"/>
                  <label for="satu2">D-4</label>
                </div>
                <div class="inputGroup">
                  <input id="satu3" name="satu" type="radio"/>
                  <label for="satu3">S-1</label>
                </div>
              <br>

              <!-- Mendaftar Sains? -->
              <li class="li">Program Magister apa yang anda daftarkan?</li>
                <div class="inputGroup">
                  <input id="dua1" name="dua" type="radio"/>
                  <label for="dua1">Sains</label>
                </div>
                <div class="inputGroup">
                  <input id="dua2" name="dua" type="radio"/>
                  <label for="dua2">Doktor</label>
                </div>
                <div class="inputGroup">
                  <input id="dua3" name="dua" type="radio"/>
                  <label for="dua3">Profesional</label>
                </div>
              <br>

                <!-- Ijazah? -->
              <li class="li">Apakah anda sudah memiliki ijazah S-1?</li>
                <div class="inputGroup">
                  <input id="tiga1" name="tiga" type="radio"/>
                  <label for="tiga1">Sudah</label>
                </div>
                <div class="inputGroup">
                  <input id="tiga2" name="tiga" type="radio"/>
                  <label for="tiga2">Belum</label>
                </div>
              <br>

              <!-- Transkip? -->
              <li class="li">Apakah anda sudah memiliki transkip S-1?</li>
                <div class="inputGroup">
                  <input id="empat1" name="empat" type="radio"/>
                  <label for="empat1">Sudah</label>
                </div>
                <div class="inputGroup">
                  <input id="empat2" name="empat" type="radio"/>
                  <label for="empat2">Belum</label>
                </div>
              <br>

                <!-- Surat rekmendasi? -->
              <li class="li">Apakah anda sudah memiliki surat rekomendasi dari dosen?</li>
                <div class="inputGroup">
                  <input id="lima1" name="lima" type="radio"/>
                  <label for="lima1">Sudah</label>
                </div>
                <div class="inputGroup">
                  <input id="lima2" name="lima" type="radio"/>
                  <label for="lima2">Belum</label>
                </div>
              <br>

                <!-- Pemberi rekomendasi merupakan 3 dosen s2 -->
              <li class="li">Apakah pemberi surat rekomendais meupakan 3 orang dosen dengan minimal studi S2?</li>
                <div class="inputGroup">
                  <input id="enam1" name="enam" type="radio"/>
                  <label for="enam1">Ya</label>
                </div>
                <div class="inputGroup">
                  <input id="enam2" name="enam" type="radio"/>
                  <label for="enam2">Bukan</label>
                </div>
              <br>

              <!-- Surat biaya? -->
              <li class="li">Apakah anda sudah mengisi surat jaminan biaya?</li>
                <div class="inputGroup">
                  <input id="tujuh1" name="tujuh" type="radio"/>
                  <label for="tujuh1">Sudah</label>
                </div>
                <div class="inputGroup">
                  <input id="tujuh2" name="tujuh" type="radio"/>
                  <label for="tujuh2">Belum</label>
                </div>
              <br>
            
                <!-- Sinopsis rencana penelitian? -->
              <li class="li">Apakah anda sudah membuat sinopsis rencana penelitian?</li>
                <div class="inputGroup">
                  <input id="delapan1" name="delapan" type="radio"/>
                  <label for="delapan1">Sudah</label>
                </div>
                <div class="inputGroup">
                  <input id="delapan2" name="delapan" type="radio"/>
                  <label for="delapan2">Belum</label>
                </div>
              <br>

                <!-- Jalur khusus? -->
              <li class="li">Apakah anda memilih jalur khusus?</li>
                <div class="inputGroup">
                  <input id="sembilan1" name="sembilan" type="radio"/>
                  <label for="sembilan1">Ya</label>
                </div>
                <div class="inputGroup">
                  <input id="sembilan2" name="sembilan" type="radio"/>
                  <label for="sembilan2">Tidak</label>
                </div>
              <br>

              <!-- TPA? -->
              <li class="li">Berapa nilai TPA anda?</li>
                <div class="inputGroup">
                  <input id="sepuluh1" name="sepuluh" type="radio"/>
                  <label for="sepuluh1">>= 475</label>
                </div>
                <div class="inputGroup">
                  <input id="sepuluh2" name="sepuluh" type="radio"/>
                  <label for="sepuluh2">>= 450</label>
                </div>
                <div class="inputGroup">
                  <input id="sepuluh3" name="sepuluh" type="radio"/>
                  <label for="sepuluh3">< 450</label>
                </div>
              <br>

              <!-- IPK? -->
              <li class="li">Berapa nilai IPK anda?</li>
                <div class="inputGroup">
                  <input id="sebelas1" name="sebelas" type="radio"/>
                  <label for="sebelas1"> > 2.5</label>
                </div>
                <div class="inputGroup">
                  <input id="sebelas2" name="sebelas" type="radio"/>
                  <label for="sebelas2"> 2.0 - 2.5</label>
                </div>
                <div class="inputGroup">
                  <input id="sebelas3" name="sebelas" type="radio"/>
                  <label for="sebelas3"> < 2.0</label>
                </div>
              <br>


                <!-- TOEFL? -->
              <li class="li">Berapa nilai TOEFL anda?</li>
                <div class="inputGroup">
                  <input id="duabelas1" name="duabelas" type="radio"/>
                  <label for="duabelas1">> 550</label>
                </div>
                <div class="inputGroup">
                  <input id="duabelas2" name="duabelas" type="radio"/>
                  <label for="duabelas2">> 500</label>
                </div>
                <div class="inputGroup">
                  <input id="duabelas3" name="duabelas" type="radio"/>
                  <label for="duabelas3">< 500</label>
                </div>
              <br>


                <!-- Double Degree? -->
              <li class="li">Apakah anda mendaftar ke program double degree?</li>
                <div class="inputGroup">
                  <input id="tigabelas1" name="tigabelas" type="radio"/>
                  <label for="tigabelas1">Ya</label>
                </div>
                <div class="inputGroup">
                  <input id="tigabelas2" name="tigabelas" type="radio"/>
                  <label for="tigabelas2">Tidak</label>
                </div>
              <br>

                <!-- jalur penelitian? -->
              <li class="li">Apakah anda mendaftar ke jalur penelitian?</li>
                <div class="inputGroup">
                  <input id="empatbelas1" name="empatbelas" type="radio"/>
                  <label for="empatbelas1">Ya</label>
                </div>
                <div class="inputGroup">
                  <input id="empatbelas2" name="empatbelas" type="radio"/>
                  <label for="empatbelas2">Tidak</label>
                </div>
              <br>


              <!-- proposal penelitian? -->
              <li class="li">Apakah anda sudah memiliki proposal penelitian?</li>
                <div class="inputGroup">
                  <input id="limabelas1" name="limabelas" type="radio"/>
                  <label for="limabelas1">Sudah</label>
                </div>
                <div class="inputGroup">
                  <input id="limabelas2" name="limabelas" type="radio"/>
                  <label for="limabelas2">Belum</label>
                </div>
              <br>
            </ol>

            <button type="submit" value="Back" class="btn"><a href="dashboard.html" style="text-decoration: none">Back</a></button>
            <button type="submit" value="Send" class="btn" id="myBtn">Send</button>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>