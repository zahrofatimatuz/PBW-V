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
// Pengecekan kondisi username dan password
if(isset($_POST['username']) && ($_POST['password'])){

   // Variabel untuk menyimpan data username dan password yang dikirim dari form
   $username = $_POST['nama'];
   $password = $_POST['pass'];

   //function php untuk mengambil data dari database
   $sql = mysql_query("select * from biodata_pelanggan where nama='$nama' and pass='$pass'")or die ("SQL Error:".mysql_error());;
   $result = mysql_num_rows($sql);
   $data = mysql_fetch_array($sql);

   // Untuk menyimpan session login

   if ($result== 1){

       $_SESSION['nama'] = $data['nama'];
       $_SESSION['level'] = $data['level'];
       header("location:index.php");

   }else{

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
    if ($result== 1){

       $_SESSION['nama'] = $data['nama'];
       $_SESSION['level'] = $data['level'];
       header("location:index.php");
}
}

?>
