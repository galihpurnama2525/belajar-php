<?php

$nama = "Galpur";
/*
echo $nama;
echo "<br/>";
echo $nama;
echo "<br/>";
echo $nama;
echo "<br/>";
echo $nama;
echo "<br/>";
echo $nama;
*/

$no = 10;
/*
for ($i=0; $i<$no; $i++) {
    $n = $i + 1;
    echo $n."".$nama."<br/>";
}
*/

/*
$no = 10;
$i = 0;

while ($i < $no)  {
    $n = $i + 1;
    echo $n."".$nama."<br/>";
    $i++;
}
*/

// hallo ini adalah komentar 1 baris jadi kalau saya enter

/*
$no = 10;
$i = 0;

do {
    $n = $i + 1;
    echo $n."".$nama."<br/>";
    $i++;
} while ($i < $no)
*/
/*
$data = array('Avanza', 'Lamborghini', 'tesla', 'xenia', 'xpander', 'rubicon');

$i = 0;
while ($i < count($data)) {
    echo $data[$i]."<br>";
    $i++;
}
*/ 
//echo $data[5];

/*
foreach ($data as $value) {
    echo $value. "<br>";
}
*/

// PERCABANGAN
/*
if ($nama == "Galpur") {
    echo $nama." adalah orang Ciamis";
} else if ($nama == "budi") {
    echo $nama." berasal dari pulau jawa";
} else {
    echo $nama." darimana ya ?";
}
*/
/*
switch($nama) {
   case "Galpur":
        $pesan = $nama." adalah orang Ciamis";
    break;
    case "Galih purnama":
        $pesan = $nama." adalah orang Ciamis";
    break;
    default :
         $pesan = $nama." darimana ya ?";
   }

   echo $pesan;
*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Input Nama dan Diulang </h1>
 <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
    <label>nama</label>
    <input type="text" name="nama">
    <label>Jumlah</label>
    <input type="text" name="no">
    <input type="submit" name="submit" value="Submit">
</form>
<?php
    if(!empty($_POST['submit'])) {

        switch($_POST['nama']) {
            case "Galpur":
                 $pesan = $_POST['nama']." adalah orang Ciamis";
             break;
             case "Galih purnama":
                 $pesan = $_POST['nama']." berasal dari pulau jawa ";
             break;
             default :
                  $pesan = $_POST['nama']." darimana ya ?";
            }

            for ($i=0;$i<$_POST['no'];$i++) {
                echo $pesan."<br>";
            }
    } else {
        echo "Anda belum Input nama dan jumlah";
    }
    ?>
</body>
</html>
