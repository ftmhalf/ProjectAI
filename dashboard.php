<?php
    include('db.php');
    session_start();
    if( !isset($_SESSION["id_akun"]) ) {
        header("Location: index.php");
        exit;
    }
    $check=1;
    $key = $_SESSION["uname"];
    $temp = mysqli_query($db, "SELECT * FROM data_mhs WHERE nim='$key'");
    if(mysqli_num_rows($temp)!=0) {
        $data = mysqli_fetch_array($temp);
        
        $result = mysqli_query($db, "SELECT * FROM data_survey WHERE nim='$key'");
        if(mysqli_num_rows($result)!=0) {
            
        $result = mysqli_fetch_assoc($result);
        $kesimpulan = $result["kesimpulan"];
        }
        else $kesimpulan = "Belum Melakukan Tes Prediksi";
    }
    else 
    {
        $check = 0;
        $data=array('No Data', 'No Data', 'No Data', 'No Data', 'No Data', 'No Data');
        $kesimpulan = "Belum Melakukan Tes Prediksi";
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1">
    <title>Prediksi Penerimaan Program Magister</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/analytics.png"/>
</head>

<body>
    <input type="checkbox" name="" id="menu-toggle">
    <div class="sidebar">
        <div class="sidebar-container">
            <div class="brand">
                <h2>
                    <span class="lab la-staylinked"></span>GAES
                </h2>
            </div>

            <div class="sidebar-avartar">
                <div>
                    <img src="img/1.png" alt="">
                </div>
                <div class="avartar-info">
                    <div class="avartar-text">
                        <h4><?php echo $data[1];?></h4>
                        <small style="padding-left: 10px;"> <?php echo strtoupper($data[0]);?></small>
                    </div>
                    <span class="las la-angle-double-down"></span>
                </div>
            </div>
            <div class="sidebar-menu">
                <ul>
                    <li>
                        <a href="" class="active">
                            <span class="las la-adjust"></span>
                            <span>Beranda</span>
                        </a>
                    </li>
                    <li>
                        <a href="logout.php" tabindex="-1" aria-disabled="true" onclick="return confirm('Apakah Anda yakin ingin keluar?');" type="submit" class="active">
                            <span class="las la-adjust"></span>
                            <span>Keluar</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="main-content">
        <header>
            <div class="header-title-wrapper">
                <label for="menu-toggle">
                        <span class="las la-bars"></span>
                    </label>
                <div class="header-title">
                    <h1>Analisis</h1>
                    <p>Prediksi penerimaan mahasiswa program magister<span class="las la-chart-line"></span></p>
                </div>
            </div>
            <div class="header-action">
                <button class="btn btn-main" id="myBtn">
                        <span class="las la-edit"></span>
                        <a href="data.php" style="color: white;">Update Data Personal</a>
                </button>

                <button class="btn btn-main" id="myBtn">
                        <span class="las la-edit"></span>
                        <?php 
                        if($check==0)
                        {
                        ?>
                            <a href="#" style="color: white;">Prediksi</a>
                        <?php
                            echo '<script type="text/javascript">alert("Lengkapi dahulu data anda!");</script>';
                        }
                        else 
                        {
                        ?>
                            <a href="predict.php" style="color: white;">Prediksi</a>
                        <?php
                        }
                        ?>
                </button>
            </div>
            
        </header>

        <main>
            <section>
                <h3 class="section-head">Rangkuman</h3>
                <div class="analytics">
                    <div class="analytic">
                        <div class="analytic-icon">
                            <span class="las la-university"></span>
                        </div>
                        <div class="analytic-info">
                            <h4>Fakultas</h4>
                            <p><?php echo $data[2];?></p>
                        </div>
                    </div>

                    <div class="analytic">
                        <div class="analytic-icon">
                            <span class="las la-building"></span>
                        </div>
                        <div class="analytic-info">
                            <h4>Departemen</h4>
                            <p><?php echo $data[3];?></p>
                        </div>
                    </div>

                    <div class="analytic">
                        <div class="analytic-icon">
                            <span class="las la-folder"></span>
                        </div>
                        <div class="analytic-info">
                            <h4>Semester</h4>
                            <?php
                                if($data[4]==1) $sem = "1 (Satu)"; elseif ($data[4]==2)  $sem = "2 (Dua)"; elseif ($data[4]==3)  $sem = "3 (Tiga)" ; elseif ($data[4]==4)  $sem = "4 (Empat)";
                                elseif ($data[4]==5)  $sem = "5 (Lima)"; elseif ($data[4]==6)  $sem = "6 (Enam)" ; elseif ($data[4]==7)  $sem = "7 (Tujuh)"; elseif ($data[4]==8)  $sem = "8 (Delapan)";
                                else $sem = "No Data" ;
                            ?>
                            <p><?php echo $sem;?></p>
                        </div>
                    </div>

                    <div class="analytic">
                        <div class="analytic-icon">
                            <span class="las la-certificate"></span>
                        </div>
                        <div class="analytic-info">
                            <h4>IPK</h4>
                            <p><?php echo $data[5];?></p>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="block-grid">
                    <div class="revenue-card">
                        <h3 class="section-head">Profil</h3>
                        <div class="rev-content">
                            <img src="img/1.png" alt="" />
                            <div class="rev-info">
                                <h3><?php echo $data[1];?></h3>
                                <h1><?php echo strtoupper($data[0]);?></h1>
                            </div>
                            <div class="rev-sum">
                                <h4>Kesimpulan</h4>
                                <p><?= $kesimpulan; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="graph-card">
                        <h3 class="section-head">Grafik</h3>
                        <div class="graph-content">
                            <div class="graph-head">
                                <div class="icons-wrapper">
                                    <div class="icon">
                                        <span class="las la-certificate text-success"></span>
                                    </div>
                                    <h2 style="color: #4b5876;">Trend Indeks Prestasi</h2>
                                </div>
                            </div>
                            <div class="graph-board">
                                <div id="revenueChart"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
    
    <?php
    $data_ip = mysqli_query($db, "SELECT ip1, ip2, ip3, ip4, ip5, ip6, ip7, ip8 FROM data_mhs WHERE nim='$key'");
    if(mysqli_num_rows($data_ip)==0) $ip=array(0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00);
    else 
    {
        $ip=array();
        $data_ip=mysqli_fetch_array($data_ip);
        for($i=0; $i<8; $i++)
        {
            $val=floatval($data_ip[$i]);
            array_push($ip, number_format($val, 2));
        }
    }
    ?>
    <script src="js/main_dashboard.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        var data_ip_siswa=<?php echo json_encode($ip);?> 
        let data_chart = 
        {
            series : 
            [
                {
                    name: "IP",
                    data: data_ip_siswa, 
                }
            ], 
            colors: ['#6ab04c'],
            chart:
            {
                height: 370,
                type: 'line',
            },
            dataLabels: 
            {
                enabled: false
            },
            stroke: 
            {
                curve: 'smooth'
            },
            xaxis: 
            {
                categories: ['Semester 1', 'Semester 2', 'Semester 3', 'Semester 4', 'Semester 5', 'Semester 6', 'Semester 7', 'Semester 8'],
            },
            legend:
            {
                position: 'top'
            }
        }

        let show_chart = new ApexCharts(document.querySelector("#revenueChart"), data_chart)
        show_chart.render()
    </script>
</body>

</html>