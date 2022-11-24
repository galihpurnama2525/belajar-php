<?php
// 1. buat koneksi dengan MySQL
$con = mysqli_connect("localhost","root","","fakultas");

// 2. cek konek dengan mySQL
if(mysqli_connect_errno()) {
    echo "koneksi gagal" . mysqli_connect_error();
}else{
    echo "koneksi berhasil";
}

// 3. membaca data dari table mysql
$query = "SELECT * FROM mahasiwa";

// 4 tampilkan data, dengan menjalankan sql query
$result = mysqli_query($con,$query);
if ($result){
    // tampilkan data satu persatu
    while($row = mysqli_fetch_assoc($result)){
       $mahasiwa[] = $row;
    }
    mysqli_free_result($result);
}

// 5. tutup koneksi mysql
 mysqli_close($con);


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
    <h1>Data Mahasiswa</h1>
    <table border="1" style="width:100%;">
    <tr>
        <th>NIM</th>
        <th>nama</th>
    <tr>
    <?php foreach($mahasiwa as $value): ?>
    <tr>
        <td><?php echo $value["nim"]; ?></td>
        <td><?php echo $value["nama"]; ?></td>
    <tr>
        <?php endforeach; ?>
    <table>
</body>
</html>









?>