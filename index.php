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
               header("Location: index.php");
               exit;
           }
        }
        $error = true;
    }   

?>

<!DOCTYPE html>
<html>

<head>
    <title>Prediksi Penerimaan Program Magister</title>
    <link rel="stylesheet" type="text/css" href="css/style_login.css">
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
            <form action="index.php" method="POST">
                <img src="img/undraw_profile_pic_ic-5-t.svg">
                <h2 class="title">Selamat Datang</h2>
                <div class="text">
                            <?php if(isset($error)) : ?>
                                <p style="font-style: italic;"> NIM atau Password Salah!</p>
                            <?php endif ?>
                </div>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>NIM</h5>
                        <input type="text" name="nim" id="nim" class="input" required>
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Sandi</h5>
                        <input type="password" name="password" id="password" class="input" required>
                    </div>
                </div>
                 <a href="#">Belum Punya Akun?</a>
                <input type="submit" class="btn" name="login" value="Login">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main_login.js"></script>
</body>

</html>