<?php
/// Cara membaca/memparshing data json //
$url="https://data.bmkg.go.id/DataMKG/TEWS/gempadirasakan.json";
$data=file_get_contents($url);
$result=json_decode($data);
//echo "<pre/>";print_r($result);
echo "<h2> Info Gempa TERKINI </h2>";
$tmp="<table border='1'>";
$tmp.="<tr><td><b>Tanggal</b></td><td><b>Keterangan</b></td></tr>";
//contoh lain inisialisasi $datagempa->Infogempa->gempa;
//echo  $datagempa[$i]->Tanggal."</br>";
for($i=0;$i<count($result->Infogempa->gempa);$i++) {
    //$no=$i+1
    $tmp.="<tr><td>{$result->Infogempa->gempa[$i]->Tanggal}</td>
        <td><b>Waktu : {$result->Infogempa->gempa[$i]->Jam}</b><br>
         <i><b>Tanggal : </b>{$result->Infogempa->gempa[$i]->DateTime}</i><br>
        <i><b>Koordinat : </b>{$result->Infogempa->gempa[$i]->Coordinates}</i><br>
        <i><b>Lintang : </b>{$result->Infogempa->gempa[$i]->Lintang}</i><br>
        <i><b>Bujur : </b>{$result->Infogempa->gempa[$i]->Bujur}</i><br>
        <i><b>Magnitude : </b>{$result->Infogempa->gempa[$i]->Magnitude}</i><br>
        <i><b>Kedalam : </b>{$result->Infogempa->gempa[$i]->Kedalaman}</i><br>
        <i><b>Wilayah : </b>{$result->Infogempa->gempa[$i]->Wilayah}</i><br>
     Dirasakan : {$result->Infogempa->gempa[$i]->Dirasakan}</td>";   
}
$tmp.="</table>";
echo $tmp;
?>