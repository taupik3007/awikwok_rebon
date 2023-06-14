<?php
// //echo berguna untuk menampilkan data 
//     echo "awikwok university <br>";
//     echo "universitas kabanggan kyta awikwok pride <br>";
// //print berguna untuk menampilkan data sama seperti echo
//     print("sdf");

// // variable 
    
//     $x = "<br>istriku adalah ayahku ayahku ternyata paman ku aku pun terkejut awikwok<br>";
//     echo $x;

//     echo $x;
// oprator aritmatika /+-*%
//     echo 1;


//if adalah percabangan ygy
// $angka1 = 1;
// $angka2 = 1;
//     if($angka1 == 1){
//       if($angka2 == 1){
//         echo "angka singkron";
//       }else{
//         echo "angka tidak singkron";
//       }
//     }else if($angka1 == 2) {
//         echo "dua itu genap";
//     }else{
//     echo "ini bukan satu, jadi saha maneh?";
//     }
$angka = $_POST['angka'];

if($angka == 1){
    echo "angka ganjil";    
}elseif($angka == 2){
    echo "angka genap";
}else{
    echo "kamana euy";
}





?>
