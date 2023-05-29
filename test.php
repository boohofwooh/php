<?php
// Latihan 1
$nama = "salma";
$panjangNama = strlen($nama);
if($panjangNama == (date('d')-2)){
    echo "Berhasil<br>";
} elseif ($panjangNama < (date('d')-2)){
    echo "Sedikit Lagi<br>";
} else {
    echo "Coba Lagi<br>";
}

//Latihan 2
$member = array("Salma" => "494348", "Jamal" => "899320", "Milah" => "712189");
foreach($member as $name => $nim) {
    if($nim % 2 == 0){
        echo "Nama : " . $name . "<br>";
        echo "NIM : " . $nim . "<br>";
        echo "Bagian : Back-End Developer" . "<br><br>";
    } else {
        echo "Nama : " . $name . "<br>";
        echo "NIM : " . $nim . "<br>";
        echo "Bagian : Front-End Developer" . "<br><br>";}
}

//Latihan 3
$name = "Zalfa";
$city = array("Lampung", "Riau", "Jambi", "Bengkulu", "Makassar", "Kendari", "Gorontalo", "Samarinda", "Papua", "Nusa Tenggara Barat");
$array = array();
for ($i = 0; $i < strlen($name); $i++){
    $searchcity = strtolower($name[$i]);
    for($j = 0; $j < count($city); $j++){
        $addcity = strtolower($city[$j]);
        if ($searchcity == $addcity[0]){
            array_push($array, $city[$j]);
        }
    }
}
if(count($array)==0){
    print_r("Anda akan ditempatkan di Jawa Timur");
} else {
    print_r("Anda akan ditempatkan di ".$array[0]);
}