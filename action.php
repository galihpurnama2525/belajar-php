<?php

if (isset($_GET['P'])) { 

    if ($_GET['P'] == 'tampil') { //standar

    echo $_GET['nama'];
    echo "<br/>";
    echo $_POST['password'];

} else if ($_GET['P'] == "pesan") { //ada pesanya
    echo "Hallo apa kabar" .$_POST ['nama'];
    echo "<br/>";
    echo "password anda salah" .$_POST ['password'];

} else if ($_GET['p'] == "aman") { //tambahan error

    if (!empty( $_POST['nama'])) {
        echo $_GET['nama'];
        } else {
            echo "nama belum dimasukan";
        }

        echo "<br/>";

        if (!empty( $_POST['password'])) {
        echo $_POST['password'];
        } else {
           echo "password masih kosong";
        }
    
 } else if ($_GET['p'] == "gambar") { //tampil gambar
     $size = getimagesize ($_FILES['berkas']['tmp_name']); //mengambil size
     $image = "data:". $size['mime'].";base64,".
             base64_encode(file_get_contents($_FILES['berkas']['tmp_name'])); //menampilkan gambar

    echo "<image src='".$image."'widht='720'>";
    }

} else {
   echo "anda tidak boleh mengakses halaman ini";
}





