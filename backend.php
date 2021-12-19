<?php
include('db.php');

if(isset($_POST['send']))
{
    $nim = $_POST['nim'];
    $diploma = $_POST['satu']; $sains = $_POST['dua'];
    $sarjana = $_POST['tiga']; $ijazah = $_POST['empat'];
    $transkrip = $_POST['lima']; $rekomendasi = $_POST['enam'];
    $dosen = $_POST['tujuh']; $biaya = $_POST['delapan'];
    $sinopsis = $_POST['sembilan']; $kelas = $_POST['sepuluh'];
    $ipk = $_POST['ipk']; $tpav = $_POST['tpa'];
    $doubledegree =$_POST['tigabelas']; $bahasav = $_POST['toefl'];
    $penelitian = $_POST['limabelas']; $proposal = $_POST['enambelas'];
    $tpa = intval($tpav);
    $bahasa = intval($bahasav);

    //rule1
    if ($diploma=='ya' && $sains=='ya')
    $kesimpulan = "Permohonan Magister Tidak Diterima";
    
    //rule2
    elseif($diploma=='tidak' && $sarjana=='ya' && $ijazah=='ya' && $transkrip=='ya' && $rekomendasi=='ya' && $dosen=='ya' && $biaya=='ya' && $sinopsis=='ya' && $kelas=='ya' && $tpa>=475 && $doubledegree=='ya' && $bahasa>550 && $penelitian=='ya' && $proposal=='ya')
    $kesimpulan = "Permohonan Magister Diterima";
    
    //rule3
    elseif($diploma=='tidak' && $sarjana=='ya' && $ijazah=='ya' && $transkrip=='ya' && $rekomendasi=='ya' && $dosen=='ya' && $biaya=='ya' && $sinopsis=='ya' && $kelas=='ya' && $tpa>=475 && $doubledegree=='ya' && $bahasa>550 && $penelitian=='ya' && $proposal=='tidak')
    $kesimpulan = "Permohonan Magister Tidak Diterima";

    //rule4
    elseif($diploma=='tidak' && $sarjana=='ya' && $ijazah=='ya' && $transkrip=='ya' && $rekomendasi=='ya' && $dosen=='ya' && $biaya=='ya' && $sinopsis=='ya' && $kelas=='ya' && $tpa>=475 && $doubledegree=='ya' && $bahasa>550 && $penelitian=='tidak')
    $kesimpulan = "Permohonan Magister Diterima";
    
    //rule5
    elseif($diploma=='tidak' && $sarjana=='ya' && $ijazah=='ya' && $transkrip=='ya' && $rekomendasi=='ya' && $dosen=='ya' && $biaya=='ya' && $sinopsis=='ya' && $kelas=='ya' && $tpa>=475 && $doubledegree=='ya' && $bahasa<=550)
    $kesimpulan = "Permohonan Magister Tidak Diterima";
    
    //rule6
    elseif($diploma=='tidak' && $sarjana=='ya' && $ijazah=='ya' && $transkrip=='ya' && $rekomendasi=='ya' && $dosen=='ya' && $biaya=='ya' && $sinopsis=='ya' && $kelas=='ya' && $tpa>=475 && $doubledegree=='tidak' && $bahasa>500 && $penelitian=='ya' && $proposal=='ya')
    $kesimpulan = "Permohonan Magister Diterima";
    
    //rule7
    elseif($diploma=='tidak' && $sarjana=='ya' && $ijazah=='ya' && $transkrip=='ya' && $rekomendasi=='ya' && $dosen=='ya' && $biaya=='ya' && $sinopsis=='ya' && $kelas=='ya' && $tpa>=475 && $doubledegree=='tidak' && $bahasa>500 && $penelitian=='ya' && $proposal=='tidak')
    $kesimpulan = "Permohonan Magister Tidak Diterima";
    
    //rule8
    elseif($diploma=='tidak' && $sarjana=='ya' && $ijazah=='ya' && $transkrip=='ya' && $rekomendasi=='ya' && $dosen=='ya' && $biaya=='ya' && $sinopsis=='ya' && $kelas=='ya' && $tpa>=475 && $doubledegree=='tidak' && $bahasa>500 && $penelitian=='tidak')
    $kesimpulan = "Permohonan Magister Diterima";
    
    //rule9
    elseif($diploma=='tidak' && $sarjana=='ya' && $ijazah=='ya' && $transkrip=='ya' && $rekomendasi=='ya' && $dosen=='ya' && $biaya=='ya' && $sinopsis=='ya' && $kelas=='ya' && $tpa>=475 && $doubledegree=='tidak' && $bahasa<=500)
    $kesimpulan = "Permohonan Magister Tidak Diterima";
    
    //rule10
    elseif($diploma=='tidak' && $sarjana=='ya' && $ijazah=='ya' && $transkrip=='ya' && $rekomendasi=='ya' && $dosen=='ya' && $biaya=='ya' && $sinopsis=='ya' && $kelas=='ya' && $tpa<475)
    $kesimpulan = "Permohonan Magister Tidak Diterima";
    
    //rule11
    elseif($diploma=='tidak' && $sarjana=='ya' && $ijazah=='ya' && $transkrip=='ya' && $rekomendasi=='ya' && $dosen=='ya' && $biaya=='ya' && $sinopsis=='ya' && $kelas=='tidak' && $ipk=='tidak' && $tpa>=475 && $doubledegree=='ya' && $bahasa>550 && $penelitian=='ya' && $proposal=='ya')
    $kesimpulan = "Permohonan Magister Diterima";
    
    //rule12
    elseif($diploma=='tidak' && $sarjana=='ya' && $ijazah=='ya' && $transkrip=='ya' && $rekomendasi=='ya' && $dosen=='ya' && $biaya=='ya' && $sinopsis=='ya' && $kelas=='tidak' && $ipk=='tidak' && $tpa>=475 && $doubledegree=='ya' && $bahasa>550 && $penelitian=='ya' && $proposal=='tidak')
    $kesimpulan = "Permohonan Magister Tidak Diterima";
    
    //rule13
    elseif($diploma=='tidak' && $sarjana=='ya' && $ijazah=='ya' && $transkrip=='ya' && $rekomendasi=='ya' && $dosen=='ya' && $biaya=='ya' && $sinopsis=='ya' && $kelas=='tidak' && $ipk=='tidak' && $tpa>=475 && $doubledegree=='ya' && $bahasa>550 && $penelitian=='tidak')
    $kesimpulan = "Permohonan Magister Diterima";
    
    //rule14
    elseif($diploma=='tidak' && $sarjana=='ya' && $ijazah=='ya' && $transkrip=='ya' && $rekomendasi=='ya' && $dosen=='ya' && $biaya=='ya' && $sinopsis=='ya' && $kelas=='tidak' && $ipk=='tidak' && $tpa>=475 && $doubledegree=='ya' && $bahasa<=550)
    $kesimpulan = "Permohonan Magister Tidak Diterima";
    
    //rule15
    elseif($diploma=='tidak' && $sarjana=='ya' && $ijazah=='ya' && $transkrip=='ya' && $rekomendasi=='ya' && $dosen=='ya' && $biaya=='ya' && $sinopsis=='ya' && $kelas=='tidak' && $ipk=='tidak' && $tpa>=475 && $doubledegree=='tidak' && $bahasa>500 && $penelitian=='ya' && $proposal=='ya')
    $kesimpulan = "Permohonan Magister Diterima";
    
    //rule16
    elseif($diploma=='tidak' && $sarjana=='ya' && $ijazah=='ya' && $transkrip=='ya' && $rekomendasi=='ya' && $dosen=='ya' && $biaya=='ya' && $sinopsis=='ya' && $kelas=='tidak' && $ipk=='tidak' && $tpa>=475 && $doubledegree=='tidak' && $bahasa>500 && $penelitian=='ya' && $proposal=='tidak')
    $kesimpulan = "Permohonan Magister Tidak Diterima";
    
    //rule17
    elseif($diploma=='tidak' && $sarjana=='ya' && $ijazah=='ya' && $transkrip=='ya' && $rekomendasi=='ya' && $dosen=='ya' && $biaya=='ya' && $sinopsis=='ya' && $kelas=='tidak' && $ipk=='tidak' && $tpa>=475 && $doubledegree=='tidak' && $bahasa>500 && $penelitian=='tidak')
    $kesimpulan = "Permohonan Magister Diterima";
    
    //rule18
    elseif($diploma=='tidak' && $sarjana=='ya' && $ijazah=='ya' && $transkrip=='ya' && $rekomendasi=='ya' && $dosen=='ya' && $biaya=='ya' && $sinopsis=='ya' && $kelas=='tidak' && $ipk=='tidak' && $tpa>=475 && $doubledegree=='tidak' && $bahasa<=500)
    $kesimpulan = "Permohonan Magister Tidak Diterima";
    
    //rule19
    elseif($diploma=='tidak' && $sarjana=='ya' && $ijazah=='ya' && $transkrip=='ya' && $rekomendasi=='ya' && $dosen=='ya' && $biaya=='ya' && $sinopsis=='ya' && $kelas=='tidak' && $ipk=='tidak' && $tpa<475)
    $kesimpulan = "Permohonan Magister Tidak Diterima";
    
    //rule20
    elseif($diploma=='tidak' && $sarjana=='ya' && $ijazah=='ya' && $transkrip=='ya' && $rekomendasi=='ya' && $dosen=='ya' && $biaya=='ya' && $sinopsis=='ya' && $kelas=='tidak' && $ipk=='ya' && $tpa>=450 && $doubledegree=='ya' && $bahasa>550 && $penelitian=='ya' && $proposal=='ya')
    $kesimpulan = "Permohonan Magister Diterima";
    
    //rule21
    elseif($diploma=='tidak' && $sarjana=='ya' && $ijazah=='ya' && $transkrip=='ya' && $rekomendasi=='ya' && $dosen=='ya' && $biaya=='ya' && $sinopsis=='ya' && $kelas=='tidak' && $ipk=='ya' && $tpa>=450 && $doubledegree=='ya' && $bahasa>550 && $penelitian=='ya' && $proposal=='tidak')
    $kesimpulan = "Permohonan Magister Tidak Diterima";
    
    //rule22
    elseif($diploma=='tidak' && $sarjana=='ya' && $ijazah=='ya' && $transkrip=='ya' && $rekomendasi=='ya' && $dosen=='ya' && $biaya=='ya' && $sinopsis=='ya' && $kelas=='tidak' && $ipk=='ya' && $tpa>=450 && $doubledegree=='ya' && $bahasa>550 && $penelitian=='tidak')
    $kesimpulan = "Permohonan Magister Diterima";
    
    //rule23
    elseif($diploma=='tidak' && $sarjana=='ya' && $ijazah=='ya' && $transkrip=='ya' && $rekomendasi=='ya' && $dosen=='ya' && $biaya=='ya' && $sinopsis=='ya' && $kelas=='tidak' && $ipk=='ya' && $tpa>=450 && $doubledegree=='ya' && $bahasa<=550)
    $kesimpulan = "Permohonan Magister Tidak Diterima";
    
    //rule24
    elseif($diploma=='tidak' && $sarjana=='ya' && $ijazah=='ya' && $transkrip=='ya' && $rekomendasi=='ya' && $dosen=='ya' && $biaya=='ya' && $sinopsis=='ya' && $kelas=='tidak' && $ipk=='ya' && $tpa>=450 && $doubledegree=='tidak' && $bahasa>500 && $penelitian=='ya' && $proposal=='ya')
    $kesimpulan = "Permohonan Magister Diterima";
    
    //rule25
    elseif($diploma=='tidak' && $sarjana=='ya' && $ijazah=='ya' && $transkrip=='ya' && $rekomendasi=='ya' && $dosen=='ya' && $biaya=='ya' && $sinopsis=='ya' && $kelas=='tidak' && $ipk=='ya' && $tpa>=450 && $doubledegree=='tidak' && $bahasa>500 && $penelitian=='ya' && $proposal=='tidak')
    $kesimpulan = "Permohonan Magister Tidak Diterima";
    
    //rule26
    elseif($diploma=='tidak' && $sarjana=='ya' && $ijazah=='ya' && $transkrip=='ya' && $rekomendasi=='ya' && $dosen=='ya' && $biaya=='ya' && $sinopsis=='ya' && $kelas=='tidak' && $ipk=='ya' && $tpa>=450 && $doubledegree=='tidak' && $bahasa>500 && $penelitian=='tidak')
    $kesimpulan = "Permohonan Magister Diterima";
    
    //rule27
    elseif($diploma=='tidak' && $sarjana=='ya' && $ijazah=='ya' && $transkrip=='ya' && $rekomendasi=='ya' && $dosen=='ya' && $biaya=='ya' && $sinopsis=='ya' && $kelas=='tidak' && $ipk=='ya' && $tpa>=450 && $doubledegree=='tidak' && $bahasa<=500)
    $kesimpulan = "Permohonan Magister Tidak Diterima";
    
    //rule28
    elseif($diploma=='tidak' && $sarjana=='ya' && $ijazah=='ya' && $transkrip=='ya' && $rekomendasi=='ya' && $dosen=='ya' && $biaya=='ya' && $sinopsis=='ya' && $kelas=='tidak' && $ipk=='ya' && $tpa<450)
    $kesimpulan = "Permohonan Magister Tidak Diterima";
    
    //rule29
    elseif($diploma=='tidak' && $sarjana=='ya' && $ijazah=='ya' && $transkrip=='ya' && $rekomendasi=='ya' && $dosen=='ya' && $biaya=='ya' && $sinopsis=='tidak')
    $kesimpulan = "Permohonan Magister Tidak Diterima";
    
    //rule30
    elseif($diploma=='tidak' && $sarjana=='ya' && $ijazah=='ya' && $transkrip=='ya' && $rekomendasi=='ya' && $dosen=='ya' && $biaya=='tidak')
    $kesimpulan = "Permohonan Magister Tidak Diterima";
    
    //rule31
    elseif($diploma=='tidak' && $sarjana=='ya' && $ijazah=='ya' && $transkrip=='ya' && $rekomendasi=='ya' && $dosen=='tidak')
    $kesimpulan = "Permohonan Magister Tidak Diterima";
    
    //rule32
    elseif($diploma=='tidak' && $sarjana =='ya' && $ijazah=='ya' && $transkrip=='ya' && $rekomendasi=='tidak')
    $kesimpulan = "Permohonan Magister Tidak Diterima";
    
    //rule33
    elseif($diploma=='tidak' && $sarjana =='ya' && $ijazah=='ya' && $transkrip=='tidak')
    $kesimpulan = "Permohonan Magister Tidak Diterima";
    
    //rule34
    elseif($diploma =='tidak' && $sarjana =='ya' && $ijazah=='tidak')
    $kesimpulan = "Permohonan Magister Tidak Diterima";

    else $kesimpulan = "Permohonan Magister Tidak Diterima";

    $result = mysqli_query($db, "SELECT * FROM data_survey WHERE nim = '$nim'");
    if( mysqli_num_rows($result) == 0 ) {
        
        mysqli_query($db, "INSERT INTO data_survey(nim, diploma, sains, sarjana, ijazah, transkrip, rekomendasi, dosen, biaya, sinopsis, kelas, ipk, tpa, doubledegree, bahasa, penelitian, proposal, kesimpulan) VALUES ('$nim', '$diploma', '$sains', '$sarjana', '$ijazah', '$transkrip', '$rekomendasi', '$dosen', '$biaya', '$sinopsis', '$kelas', '$ipk', '$tpa', '$doubledegree', '$bahasa', '$penelitian', '$proposal', '$kesimpulan')");
    }

    else {
        
        $query="UPDATE data_survey SET 
        diploma='$diploma',
        sains='$sains', 
        sarjana='$sarjana', ijazah='$ijazah',
        transkrip='$transkrip', rekomendasi='$rekomendasi',
        dosen='$dosen', biaya='$biaya',
        sinopsis='$sinopsis', kelas='$kelas',
        ipk='$ipk', tpa='$tpa', 
        doubledegree='$doubledegree', bahasa='$bahasa',
        penelitian='$penelitian', proposal='$proposal', kesimpulan='$kesimpulan'
        WHERE nim='$nim'
    ";

        mysqli_query($db, $query);   
    }


    header("Location: dashboard.php");
    exit;

}
?>