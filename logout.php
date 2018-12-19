<?php
include "koneksi.php";
unset($_SESSION['nama']);
unset($_SESSION['id_user']);
unset($_SESSION['level']);

header("Location: index.php");