<?php
$host='localhost';
$user='root';
$pass='';
$database='kampus';

$konek=mysqli_connect($host, $user, $pass);

mysqli_select_db($konek, $database);
if ($konek){
echo "";
} else {
echo "failure";
}

?>