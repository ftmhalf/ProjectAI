<?php
include('db.php');

if(isset($_POST['send']))
{
    $diploma = $_POST['satu']; $sains = $_POST['dua'];
    $sarjana = $_POST['tiga']; $ijazah = $_POST['empat'];
    $transkrip = $_POST['lima']; $rekomendasi = $_POST['enam'];
    $dosen = $_POST['tujuh']; $biaya = $_POST['delapan'];
    $sinopsis = $_POST['sembilan']; $kelas = $_POST['sepuluh'];
    $ipk = $_POST['$ipk']; $tpa = $_POST['$tpa'];
    $doubledegree =$_POST['tigabelas']; $bahasa = $_POST['toefl'];
    $penelitian = $_POST['limabelas']; $proposal = $_POST['enambelas'];

    //rule1
    if ($diploma=='ya' && $sains=='ya')
    
    //rule2
    elseif($diploma=='tidak' && $sarjana=='ya' && $ijazah=='ya' && $transkrip=='ya' && $rekomendasi=='ya' && $dosen=='ya' && $biaya=='ya' && $sinopsis=='ya' && $kelas=='ya' && $tpa>==475 && $doubledegree=='ya' && $bahasa>550 && $penelitian=='ya' && $proposal=='ya')
    
    //rule3
    elseif($diploma=='tidak' && $sarjana=='ya' && $ijazah=='ya' && $transkrip=='ya' && $rekomendasi=='ya' && $dosen=='ya' && $biaya=='ya' && $sinopsis=='ya' && $kelas=='ya' && $tpa>==475 && $doubledegree=='ya' && $bahasa>550 && $penelitian=='ya' && $proposal=='tidak')

    //rule4
    elseif($diploma=='tidak' && $sarjana=='ya' && $ijazah=='ya' && $transkrip=='ya' && $rekomendasi=='ya' && $dosen=='ya' && $biaya=='ya' && $sinopsis=='ya' && $kelas=='ya' && $tpa>==475 && $doubledegree=='ya' && $bahasa>550 && $penelitian=='tidak')
    
    //rule5
    elseif($diploma=='tidak' && $sarjana=='ya' && $ijazah=='ya' && $transkrip=='ya' && $rekomendasi=='ya' && $dosen=='ya' && $biaya=='ya' && $sinopsis=='ya' && $kelas=='ya' && $tpa>==475 && $doubledegree=='ya' && $bahasa<==550)
    
    //rule6
    elseif($diploma=='tidak' && $sarjana=='ya' && $ijazah=='ya' && $transkrip=='ya' && $rekomendasi=='ya' && $dosen=='ya' && $biaya=='ya' && $sinopsis=='ya' && $kelas=='ya' && $tpa>==475 && $doubledegree=='tidak' && $bahasa>500 && $penelitian=='ya' && $proposal=='ya')
    
    //rule7
    elseif($diploma=='tidak' && $sarjana=='ya' && $ijazah=='ya' && $transkrip=='ya' && $rekomendasi=='ya' && $dosen=='ya' && $biaya=='ya' && $sinopsis=='ya' && $kelas=='ya' && $tpa>==475 && $doubledegree=='tidak' && $bahasa>500 && $penelitian=='ya' && $proposal=='tidak')
    
    //rule8
    elseif($diploma=='tidak' && $sarjana=='ya' && $ijazah=='ya' && $transkrip=='ya' && $rekomendasi=='ya' && $dosen=='ya' && $biaya=='ya' && $sinopsis=='ya' && $kelas=='ya' && $tpa>==475 && $doubledegree=='tidak' && $bahasa>500 && $penelitian=='tidak')
    
    //rule9
    elseif($diploma=='tidak' && $sarjana=='ya' && $ijazah=='ya' && $transkrip=='ya' && $rekomendasi=='ya' && $dosen=='ya' && $biaya=='ya' && $sinopsis=='ya' && $kelas=='ya' && $tpa>==475 && $doubledegree=='tidak' && $bahasa<==500)
    
    //rule10
    elseif($diploma=='tidak' && $sarjana=='ya' && $ijazah=='ya' && $transkrip=='ya' && $rekomendasi=='ya' && $dosen=='ya' && $biaya=='ya' && $sinopsis=='ya' && $kelas=='ya' && $tpa<475)
    
    //rule11
    elseif($diploma=='tidak' && $sarjana=='ya' && $ijazah=='ya' && $transkrip=='ya' && $rekomendasi=='ya' && $dosen=='ya' && $biaya=='ya' && $sinopsis=='ya' && $kelas=='tidak' && $ipk=='tidak' && $tpa>==475 && $doubledegree=='ya' && $bahasa>550 && $penelitian=='ya' && $proposal=='ya')
    
    //rule12
    elseif($diploma=='tidak' && $sarjana=='ya' && $ijazah=='ya' && $transkrip=='ya' && $rekomendasi=='ya' && $dosen=='ya' && $biaya=='ya' && $sinopsis=='ya' && $kelas=='tidak' && $ipk=='tidak' && $tpa>==475 && $doubledegree=='ya' && $bahasa>550 && $penelitian=='ya' && $proposal=='tidak')
    
    //rule13
    elseif($diploma=='tidak' && $sarjana=='ya' && $ijazah=='ya' && $transkrip=='ya' && $rekomendasi=='ya' && $dosen=='ya' && $biaya=='ya' && $sinopsis=='ya' && $kelas=='tidak' && $ipk=='tidak' && $tpa>==475 && $doubledegree=='ya' && $bahasa>550 && $penelitian=='tidak')
    
    //rule14
    elseif($diploma=='tidak' && $sarjana=='ya' && $ijazah=='ya' && $transkrip=='ya' && $rekomendasi=='ya' && $dosen=='ya' && $biaya=='ya' && $sinopsis=='ya' && $kelas=='tidak' && $ipk=='tidak' && $tpa>==475 && $doubledegree=='ya' && $bahasa<==550)
    
    //rule15
    elseif($diploma=='tidak' && $sarjana=='ya' && $ijazah=='ya' && $transkrip=='ya' && $rekomendasi=='ya' && $dosen=='ya' && $biaya=='ya' && $sinopsis=='ya' && $kelas=='tidak' && $ipk=='tidak' && $tpa>==475 && $doubledegree=='tidak' && $bahasa>500 && $penelitian=='ya' && $proposal=='ya')
    
    //rule16
    elseif($diploma=='tidak' && $sarjana=='ya' && $ijazah=='ya' && $transkrip=='ya' && $rekomendasi=='ya' && $dosen=='ya' && $biaya=='ya' && $sinopsis=='ya' && $kelas=='tidak' && $ipk=='tidak' && $tpa>==475 && $doubledegree=='tidak' && $bahasa>500 && $penelitian=='ya' && $proposal=='tidak')
    
    //rule17
    elseif($diploma=='tidak' && $sarjana=='ya' && $ijazah=='ya' && $transkrip=='ya' && $rekomendasi=='ya' && $dosen=='ya' && $biaya=='ya' && $sinopsis=='ya' && $kelas=='tidak' && $ipk=='tidak' && $tpa>==475 && $doubledegree=='tidak' && $bahasa>500 && $penelitian=='tidak')
    
    //rule18
    elseif($diploma=='tidak' && $sarjana=='ya' && $ijazah=='ya' && $transkrip=='ya' && $rekomendasi=='ya' && $dosen=='ya' && $biaya=='ya' && $sinopsis=='ya' && $kelas=='tidak' && $ipk=='tidak' && $tpa>==475 && $doubledegree=='tidak' && $bahasa<==500)
    
    //rule19
    elseif($diploma=='tidak' && $sarjana=='ya' && $ijazah=='ya' && $transkrip=='ya' && $rekomendasi=='ya' && $dosen=='ya' && $biaya=='ya' && $sinopsis=='ya' && $kelas=='tidak' && $ipk=='tidak' && $tpa<475)
    
    //rule20
    elseif($diploma=='tidak' && $sarjana=='ya' && $ijazah=='ya' && $transkrip=='ya' && $rekomendasi=='ya' && $dosen=='ya' && $biaya=='ya' && $sinopsis=='ya' && $kelas=='tidak' && $ipk=='ya' && $tpa>==450 && $doubledegree=='ya' && $bahasa>550 && $penelitian=='ya' && $proposal=='ya')
    
    //rule21
    elseif($diploma=='tidak' && $sarjana=='ya' && $ijazah=='ya' && $transkrip=='ya' && $rekomendasi=='ya' && $dosen=='ya' && $biaya=='ya' && $sinopsis=='ya' && $kelas=='tidak' && $ipk=='ya' && $tpa>==450 && $doubledegree=='ya' && $bahasa>550 && $penelitian=='ya' && $proposal=='tidak')
    
    //rule22
    elseif($diploma=='tidak' && $sarjana=='ya' && $ijazah=='ya' && $transkrip=='ya' && $rekomendasi=='ya' && $dosen=='ya' && $biaya=='ya' && $sinopsis=='ya' && $kelas=='tidak' && $ipk=='ya' && $tpa>==450 && $doubledegree=='ya' && $bahasa>550 && $penelitian=='tidak')
    
    //rule23
    elseif($diploma=='tidak' && $sarjana=='ya' && $ijazah=='ya' && $transkrip=='ya' && $rekomendasi=='ya' && $dosen=='ya' && $biaya=='ya' && $sinopsis=='ya' && $kelas=='tidak' && $ipk=='ya' && $tpa>==450 && $doubledegree=='ya' && $bahasa<==550)
    
    //rule24
    elseif($diploma=='tidak' && $sarjana=='ya' && $ijazah=='ya' && $transkrip=='ya' && $rekomendasi=='ya' && $dosen=='ya' && $biaya=='ya' && $sinopsis=='ya' && $kelas=='tidak' && $ipk=='ya' && $tpa>==450 && $doubledegree=='tidak' && $bahasa>500 && $penelitian=='ya' && $proposal=='ya')
    
    //rule25
    elseif($diploma=='tidak' && $sarjana=='ya' && $ijazah=='ya' && $transkrip=='ya' && $rekomendasi=='ya' && $dosen=='ya' && $biaya=='ya' && $sinopsis=='ya' && $kelas=='tidak' && $ipk=='ya' && $tpa>==450 && $doubledegree=='tidak' && $bahasa>500 && $penelitian=='ya' && $proposal=='tidak')
    
    //rule26
    elseif($diploma=='tidak' && $sarjana=='ya' && $ijazah=='ya' && $transkrip=='ya' && $rekomendasi=='ya' && $dosen=='ya' && $biaya=='ya' && $sinopsis=='ya' && $kelas=='tidak' && $ipk=='ya' && $tpa>==450 && $doubledegree=='tidak' && $bahasa>500 && $penelitian=='tidak')
    
    //rule27
    elseif($diploma=='tidak' && $sarjana=='ya' && $ijazah=='ya' && $transkrip=='ya' && $rekomendasi=='ya' && $dosen=='ya' && $biaya=='ya' && $sinopsis=='ya' && $kelas=='tidak' && $ipk=='ya' && $tpa>==450 && $doubledegree=='tidak' && $bahasa<==500)
    
    //rule28
    elseif($diploma=='tidak' && $sarjana=='ya' && $ijazah=='ya' && $transkrip=='ya' && $rekomendasi=='ya' && $dosen=='ya' && $biaya=='ya' && $sinopsis=='ya' && $kelas=='tidak' && $ipk=='ya' && $tpa<450)
    
    //rule29
    elseif($diploma=='tidak' && $sarjana=='ya' && $ijazah=='ya' && $transkrip=='ya' && $rekomendasi=='ya' && $dosen=='ya' && $biaya=='ya' && $sinopsis=='tidak')
    
    //rule30
    elseif($diploma=='tidak' && $sarjana=='ya' && $ijazah=='ya' && $transkrip=='ya' && $rekomendasi=='ya' && $dosen=='ya' && $biaya=='tidak')
    
    //rule31
    elseif($diploma=='tidak' && $sarjana=='ya' && $ijazah=='ya' && $transkrip=='ya' && $rekomendasi=='ya' && $dosen=='tidak')
    
    //rule32
    elseif($diploma=='tidak' && $sarjana=='ya' && $ijazah=='ya' && $transkrip=='ya' && $rekomendasi=='tidak')
    
    //rule33
    elseif($diploma=='tidak' && $sarjana=='ya' && $ijazah=='ya' && $transkrip=='tidak')
    
    //rule34
    elseif($diploma=='tidak' && $sarjana=='ya' && $ijazah=='tidak')





}
?>