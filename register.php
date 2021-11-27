<?php
include('db.php');
if(isset($_POST['register']))
{
    $nim = $_POST['nim'];
    $pass = $_POST['password'];

    mysqli_query($db, "INSERT INTO akun(nim, password) VALUES ('$nim', '$pass')");
    header('location:index.php');
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Prediksi Penerimaan Program Magister</title>
    <link rel="stylesheet" type="text/css" href="css/style_register.css">
    <link rel="shortcut icon" href="img/analytics.png"/>
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
            <form method="POST" action="register.php">
                <img src="img/undraw_profile_pic_ic-5-t.svg">
                <h2 class="title" style="font-size:larger;">Daftarkan Akun Anda</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>NIM</h5>
                        <input type="text" name="nim" class="input">
                    </div>
                </div>
                
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Sandi</h5>
                        <input type="password" name="password" class="input">
                    </div>
                </div>

                <input type="submit" class="btn" name="register" value="Register">

            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main_login.js"></script>
</body>

</html>