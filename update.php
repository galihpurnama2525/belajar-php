<?php

if (isset ($_GET["id"])) {

$id = $_GET['id'];

// 1. buat koneksi dengan MySQL
$con = mysqli_connect("localhost","root","","fakultas");

// 2. cek konek dengan mySQL
if(mysqli_connect_errno()) {
    echo "koneksi gagal" . mysqli_connect_error();
}else{
    echo "koneksi berhasil";
}

// 3. membaca data dari table mysql
$query = "SELECT * FROM mahasiwa WHERE id=$id";

// 4 tampilkan data, dengan menjalankan sql query
$result = mysqli_query($con,$query);
$mahasiwa = [];
if ($result){
    // tampilkan data satu persatu
    while($row = mysqli_fetch_assoc($result)){
       $mahasiwa = $row;
    }
    mysqli_free_result($result);
}

// 5. tutup koneksi mysql
 mysqli_close($con);
}
// tangkap data dari form submit
if (isset ($_POST["submit"])) {
    $nim = $_POST ['nim'];
    $nama = $_POST['nama'];
    $id_jurusan = $_POST['id_jurusan'];
    $tpt_lahir = $_POST['tpt_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $gender = $_POST['gender'] ;
    $alamat = $_POST['alamat'];
    $id = $_POST['id'];

     // 1. buat koneksi dengan MySQL
     $con = mysqli_connect("localhost","root","","fakultas");

     // 2. cek konek dengan mySQL
     if(mysqli_connect_errno()) { 
         echo "koneksi gagal" . mysqli_connect_error();
     }else{
         echo "koneksi berhasil";
     }
 
     // buat sql query untuk insert ke database
     // buat query insert dan jalankan
     $sql = "UPDATE mahasiwa SET nim='$nim',nama='$nama',id_jurusan='$id_jurusan',tempat_lahir='$tpt_lahir',
    tanggal_lahir='$tgl_lahir',alamat='$alamat' WHERE id=$id ";
 
     // jalankan query
     if (mysqli_query($con, $sql)){
         echo "Data berhasil diubah";
     }else{
         echo "ada eror ". $sql . "<br>" . mysqli_error($con);
     }
    
     mysqli_close($con);   
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data Mahasiswa</title>
</head>
<body>
    <h1>Update Data Mahasiswa</h1>
    <?php //var_dump($mahasiwa); ?>
<form action="update.php" method="post">
    NIM: <input type="text" name="nim" value="<?php echo $mahasiwa['nim'] ?>"><br>
    Nama: <input type="text" name="nama" value="<?php echo $mahasiwa['nama'] ?>"><br>
    ID Jurusan: <input type="number" name="id jurusan" value="<?php echo $mahasiwa['id_jurusan'] ?>"><br>
    jenis Kelamin: <input type="text" name="gender" value="<?php echo $mahasiwa['jenis_kelamin'] ?>"><br>
    Tempat Lahir: <input type="text" name="tpt_lahir" value="<?php echo $mahasiwa['tempat_lahir'] ?>"><br>
    Tanggal Lahir (yyyy-mm- dd): <input type="text" name="tgl_lahir" value="<?php echo $mahasiwa['tanggal_lahir'] ?>"><br>
    Alamat: <input type="text" name="alamat" value="<?php echo $mahasiwa['alamat'] ?>"><br> 
        <input type="number" name="id" value="<?php echo $mahasiwa['id'] ?>" hidden>
        <button type="submit" name="submit">Tambah Data</button>
    <form>
</body>
</html>