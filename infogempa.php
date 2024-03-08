<?php
$url="https://data.bmkg.go.id/DataMKG/TEWS/gempadirasakan.xml";
$gempa = new SimpleXMLElement(file_get_contents($url));


echo "<b><tr>  NAMA              : DIMAS AGUNG PRABOWO </tr></b><br/>";
echo "<b><tr>  NIM               : 12211834 </tr></b><br/>";
echo "<b><tr>  PRODI             : INFORMATIKA</tr></b><br/>";
echo "<b><tr>  PERGURUAN TINGGI  : STMIK ELRAHMA YK</tr></b><br/>";


echo "<h2>INFORMASI GEMPA</h2>";
echo "<table border='1'>";
echo "<tr><th> NO. </th><th>TANGGAL</th><th>JAM</th><th>DATE TIME</th><th>KOORDINATE</th><th>LINTANG</th>
<th>BUJUR</th><th>MAGNITUDE</th><th>KEDALAMAN</th><th>WILAYAH</th><th>DIRASAKAN</th></tr>";
$counter = 1 ;
foreach($gempa->gempa as $gmp){
    
    $Tanggal = $gmp->Tanggal;
    $Jam = $gmp->Jam;
    $DateTime = $gmp->DateTime;
    $coordinates = $gmp->point->coordinates;
    $Lintang = $gmp->Lintang;
    $Bujur = $gmp->Bujur;
    $Magnitude = $gmp->Magnitude;
    $Kedalaman = $gmp->Kedalaman;
    $Wilayah = $gmp->Wilayah;
    $Dirasakan = $gmp->Dirasakan;

    echo "<tr>";
    echo "<td>$counter</td><td>$Tanggal</td><td>$Jam</td><td>$DateTime</td><td>$coordinates</td><td>$Lintang</td><td>$Bujur</td><td>$Magnitude</td><td>$Kedalaman</td><td>$Wilayah</td><td>$Dirasakan</td>";
    echo "</tr>";
  $counter++;
}

echo "</table>";
?>
