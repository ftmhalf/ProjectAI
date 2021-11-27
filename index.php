<?php
include('db.php');
session_start();
if( isset($_SESSION["id_akun"]) ) {
    header("Location: dashboard.php");
    exit;
}

if(isset($_POST['login'])){

    // ambil data dari formulir
    $nim = $_POST['nim'];
    $password = $_POST['password'];  

    // buat query
    global $db;
    $cekemail = mysqli_query($db, "SELECT * FROM akun WHERE nim = '$nim'");

    // apakah query simpan berhasil?
    if( mysqli_num_rows($cekemail) === 1 ) {
        global $password;
       $row = mysqli_fetch_assoc($cekemail);
       $id_akun = $row["id_akun"];
       $psw = $row["password"];
       if( $password === $psw ){
        global $id_akun;
           $_SESSION["id_akun"] = $id_akun;
           $_SESSION['uname'] = $row['nim'];
           header("Location: dashboard.php");
           exit;
       }
    }
    $error = true;
}   

if(isset($_POST['signup']))
{
    $nim = $_POST['nim'];
    $pass = $_POST['password'];

    mysqli_query($db, "INSERT INTO akun(nim, password) VALUES ('$nim', '$pass')");
    header('location:index.php');

    $daftar = true;
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Prediksi Penerimaan Program Magister</title>
    <link rel="shortcut icon" href="img/analytics.png"/>
    <link rel="stylesheet" type="text/css" href="css/registlogin.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <img class="wave" src="img/imageedit_11_5340730254.png">
    <div class="container">
        <div class="img">
            <img src="img/undraw_personal_notebook_re_d7dc.svg">
        </div>
        <div class="login-content">
            <div class="wrapper">
                <div class="title-text">
                   <div class="title login">
                      Welcome!
                   </div>
                   <div class="title signup">
                      Welcome!
                   </div>
                </div>
                <div class="form-container">
                   <div class="slide-controls">
                      <input type="radio" name="slide" id="login" checked>
                      <input type="radio" name="slide" id="signup">
                      <label for="login" class="slide login">Login</label>
                      <label for="signup" class="slide signup">Signup</label>
                      <div class="slider-tab"></div>
                   </div>
                   
                   <?php if(isset($error)) : ?>
                                <p style="font-style: italic;"> NIM atau Password Salah!</p>
                            <?php endif ?>
                            <?php if(isset($daftar)) : ?>
                                <p style="font-style: italic;"> Anda Berhasil Daftar!</p>
                            <?php endif ?>
                   <div class="form-inner">
                      <form action="index.php" method="POST" class="login">
                         <div class="field">
                            <input type="text" name="nim" id="nim" class="input" placeholder="NIM" required>
                         </div>
                         <div class="field">
                            <input type="password" name="password" id="password" class="input" placeholder="Password" required>
                         </div>
                         
                         <div class="field btn">
                            <div class="btn-layer"></div>
                            <input type="submit" name="login" value="Login">
                         </div>
                         <!-- <div class="signup-link">
                            Not a member? <a href="">Signup now</a>
                         </div> -->
                      </form>
                      <form action="index.php" method="POST" class="signup">
                         <div class="field">
                            <input type="text" name="nim" id="nim" class="input" placeholder="NIM" required>
                         </div>
                         <div class="field">
                            <input type="password" name="password" id="password" class="input" placeholder="Password" required>
                         </div>
                        
                         <div class="field btn">
                            <div class="btn-layer"></div>
                            <input type="submit" name="signup" value="Signup">
                         </div>
                      </form>
                   </div>
                </div>
             </div>
        </div>
    </div>
    <script type="text/javascript" src="js/registlogin.js"></script>
</body>

</html>