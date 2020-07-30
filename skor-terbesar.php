<?php
function skor_terbesar($data){
//kode di sini
  $result =[];
  $kelasReactNative=[];
  $kelasReactjs=[];
  $kelaslaravel=[];
  foreach ($data as $key => $row) {
    # code...
    $nilai[$key] = $row ['nilai'];
    $kelas[$key] = $row ['kelas'];
  }
  array_multisort($kelas, SORT_DESC,$nilai,SORT_DESC,$data);
  for ($i=0; $i <count($data) ; $i++) { 
    # code...
    if ($data[$i]['kelas']=='React Native') {
      $kelasReactNative[]=$data[$i];
      # code...
    }elseif ($data[$i]['kelas']=='React JS') {
      # code...
       $kelasReactjs[]=$data[$i];
    }elseif ($data[$i]['kelas']=='Laravel') {
      # code...
       $kelaslaravel[]=$data[$i];
    }
  }
  
print_r($kelasReactNative);
print_r($kelasReactjs);
print_r($kelaslaravel);

$result[]=$kelasReactNative[0];
$result[]=$kelasReactjs[0];
$result[]=$kelaslaravel[0];
foreach ($result as $key => $hasil) {
  echo "Skor Terbesar"." ".$hasil['kelas']." "."diperoleh oleh"." "." ".$hasil['nilai']."<br>";
  # code...
}

}
//print_r($nilai);

// TEST CASES
$skor = [
  [
    "nama" => "Bobby",
    "kelas" => "Laravel",
    "nilai" => 78
  ],
  [
    "nama" => "Regi",
    "kelas" => "React Native",
    "nilai" => 86
  ],
  [
    "nama" => "Aghnat",
    "kelas" => "Laravel",
    "nilai" => 90
  ],
  [
    "nama" => "Indra",
    "kelas" => "React JS",
    "nilai" => 85
  ],
  [
    "nama" => "Yoga",
    "kelas" => "React Native",
    "nilai" => 77
  ],
];

print_r(skor_terbesar($skor));
/* OUTPUT
  Array (
    [Laravel] => Array
              (
                [nama] => Aghnat
                [kelas] => Laravel
                [nilai] => 90
              )
    [React Native] => Array
                  (
                    [nama] => Regi
                    [kelas] => React Native
                    [nilai] => 86
                  )
    [React JS] => Array
                (
                  [nama] => Indra
                  [kelas] => React JS
                  [nilai] => 85
                )
  )
*/
?>