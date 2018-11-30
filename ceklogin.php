<?php


include 'koneksi.php';
if (isset($_POST['login'])) {

//mengambil data dari form login
$nama=filter_input(INPUT_POST,'nama'FILTER_SANITIZE_STRING);
$pass=filter_input(INPUT_POST,'pass'FILTER_SANITIZE_STRING));

//query untuk mengambil data yang sesuai
$query="select * from biodata_pelanggan where nama='$nama' and pass='$pass'";
$result = mysqli_query($link, $query);
  if(!$result){
      die ("Query gagal dijalankan: ".mysqli_errno($link).
           " - ".mysqli_error($link));
  }
// bind parameter ke query
    $params = array(
        ":nama" => $nama,
        ":email" => $nama
    );

    $stmt->execute($params);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

if($nama){
        // verifikasi password
        if(password_verify($pass, $nama["pass"])){
            // buat Session
            session_start();
            $_SESSION["nama"] = $nama;
            // login sukses, alihkan ke halaman timeline
            header("Location: biodata.php");
        }
    }
}

?>
