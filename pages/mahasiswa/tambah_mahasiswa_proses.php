<?php
include "../../conf/conn.php";
if($_POST)
{
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$jurusan = $_POST['jurusan'];
$query = ("INSERT INTO mahasiswa(id_mahasiswa,nim,nama,kelas,jurusan) VALUES ('','".$nim."','".$nama."','".$kelas."','".$jurusan."')");
if(!mysqli_query($konek, $query)){
die(mysqli_error);
}else{
echo '<script>alert("Data Berhasil Ditambahkan !!!");
window.location.href="../../index.php?page=data_mahasiswa"</script>';
}
}
?>