<?php
session_start();
// jika session belum ada pindahkan ke halaman login
if(!isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}
require_once "functions.php";
$id = $_GET["id"];
if(hapus($id)>0){
    echo "
    <script>
    alert('data berhasil dihapus!');
    document.location.href= 'index.php'
    </script>
";
}else{
    echo "
    <script>
    alert('data gagal Dihapus!');
    document.location.href= 'index.php'
    </script>
";

}

?>