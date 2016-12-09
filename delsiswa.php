<?php

require_once('lib/DBClass.php');
require_once('lib/msiswa.php');

$id = $_GET['a'];

if(!is_numeric($id)){
	exit("Access Forbiden");
}

$siswa = new Siswa();
$data = $siswa->deleteSiswa($id);

if(empty($data)){
	echo "data berhasil dihapus";
}
?>

<br />
<a href="siswa.php">Back</a>