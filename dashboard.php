<?php
    session_start();
    if( !isset($_SESSION["id_akun"]) ) {
        header("Location: index.php");
        exit;
    }

    $db = mysqli_connect("localhost", "root", "", "ai_project");


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1">
    <title>Graduate Admission System</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <input type="checkbox" name="" id="menu-toggle">
    <div class="sidebar">
        <div class="sidebar-container">
            <div class="brand">
                <h2>
                    <span class="lab la-staylinked"></span> GAES
                </h2>
            </div>

            <div class="sidebar-avartar">
                <div>
                    <img src="img/1.png" alt="">
                </div>
                <div class="avartar-info">
                    <div class="avartar-text">
                        <h4>Ralph Anderson</h4>
                        <small>NIM</small>
                    </div>
                    <span class="las la-angle-double-down"></span>
                </div>
            </div>
            <div class="sidebar-menu">
                <ul>
                    <li>
                        <a href="" class="active">
                            <span class="las la-adjust"></span>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="logout.php" tabindex="-1" aria-disabled="true" onclick="return confirm('Apakah Anda yakin ingin keluar?');" type="submit" class="active">
                            <span class="las la-adjust"></span>
                            <span>Logout</span>
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
                    <h1>Analytics</h1>
                    <p>Display analytic about your study <span class="las la-chart-line"></span></p>
                </div>
            </div>
            <div class="header-action">
                <button class="btn btn-main" id="myBtn">
                        <span class="las la-edit"></span>
                        Update
                    </button>

                <div id="myModal" class="modal">
                    <div class="start_btn">
                        <button>Start</button>
                    </div>

                    <div class="info_box">
                        <div class="info-title"><span>Disclaimer</span></div>
                        <div class="info-list">
                            <div class="info">Prediction for your graduation admission status</div>
                            <div class="info">Please answer all the question correctly for the better result</div>
                        </div>
                        <div class="buttons">
                            <button class="quit">Exit</button>
                            <button class="restart">Ok</button>
                        </div>
                    </div>

                    <div class="quiz_box">
                        <header>
                            <div class="title">Graduate Admission Expert System</div>
                            <span class="close">&times;</span>
                        </header>
                        <section>
                            <div class="que_text">
                            </div>
                            <div class="option_list">
                            </div>
                        </section>

                        <footer>
                            <div class="total_que">
                            </div>
                            <button class="next_btn">Next Question</button>
                        </footer>
                    </div>

                    <div class="result_box">
                        <div class="icon">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <div class="complete_text">Here is your graduate admission result!</div>
                        <div class="score_text">
                        </div>
                        <div class="buttons">
                            <button class="restart">Try again</button>
                            <button class="quit">Quit</button>
                        </div>
                    </div>
                </div>
            </div>
            
        </header>

        <main>
            <section>
                <h3 class="section-head">Overview</h3>
                <div class="analytics">
                    <div class="analytic">
                        <div class="analytic-icon">
                            <span class="las la-university"></span>
                        </div>
                        <div class="analytic-info">
                            <h4>Fakultas</h4>
                            <h1>...</h1>
                        </div>
                    </div>

                    <div class="analytic">
                        <div class="analytic-icon">
                            <span class="las la-building"></span>
                        </div>
                        <div class="analytic-info">
                            <h4>Departemen</h4>
                            <h1>...</h1>
                        </div>
                    </div>

                    <div class="analytic">
                        <div class="analytic-icon">
                            <span class="las la-folder"></span>
                        </div>
                        <div class="analytic-info">
                            <h4>Semester</h4>
                            <h1>...</h1>
                        </div>
                    </div>

                    <div class="analytic">
                        <div class="analytic-icon">
                            <span class="las la-certificate"></span>
                        </div>
                        <div class="analytic-info">
                            <h4>IP</h4>
                            <h1>...</h1>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="block-grid">
                    <div class="revenue-card">
                        <h3 class="section-head">Profile</h3>
                        <div class="rev-content">
                            <img src="img/1.png" alt="" />
                            <div class="rev-info">
                                <h3>Ralph Anderson</h3>
                                <h1>NIM</h1>
                            </div>
                            <div class="rev-sum">
                                <h4>IPK</h4>
                                <h2>...</h2>
                            </div>
                        </div>
                    </div>
                    <div class="graph-card">
                        <h3 class="section-head">Graph</h3>
                        <div class="graph-content">
                            <div class="graph-head">
                                <div class="icons-wrapper">
                                    <div class="icon">
                                        <span class="las la-certificate text-success"></span>
                                    </div>
                                </div>
                                <div class="graph-select">
                                    <select name="" id="">
                                            <option value="">Semester</option>
                                        </select>
                                </div>
                            </div>
                            <div class="graph-board">
                                <canvas id="revenueChart" width="100%"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>

    <script src="js/main_dashboard.js"></script>

    <!-- Inside this JavaScript file I 've inserted Questions and Options only -->
    <script src="js/questions.js"></script>

    <!-- Inside this JavaScript file I've coded all Quiz Codes -->
    <script src="js/script.js"></script>

    <script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on the button, open the modal
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.bundle.js">
    </script>
    <script>
        let ctx = document.querySelector("#revenueChart");
        ctx.height = 43;
        let revChart = new Chart(ctx, {
            type: "line",
            data: {
                Labels: ["Semester 1", "Semester 2", "Semester 3", "Semester 4", "Semester 5", "Semester 6", "Semester 7", "Semester 8"],
                datasets: [{
                    label: "IP",
                    borderColor: "green",
                    borderwidth: "3",
                    backgroundColor: "rgba(235, 247, 245, 0.5)",
                    data: [3.0, 3.3, 3.0, 3.8, 3.7, 3.7, 2.9, 3.8]
                }]

            },
            options: {
                responsive: true,
                tooltips: {
                    intersect: false,
                    node: "index",
                }
            }
        });
    </script>
</body>

</html>