<?php

require_once('lib/DBClass.php');
require_once('lib/msiswa.php');

if(!isset($_POST['kirim'])){
	exit("accesadascda");
}

$siswa = new Siswa();

if (!copy($_FILES['in_foto']['tmp_name'],'img/'.$_POST['in_nis'].'.png')){
	exit('error upload file');
}

$data['input_name'] = $_POST['in_name'];
$data['input_email'] = $_POST['in_email'];
$data['input_nationality'] = $_POST['in_nation'];
$data['in_foto'] = 'img/'.$_POST['in_nis'].'png';

$siswa->updateSiswa($_POST['in_nis'], $data);

echo "Data siswa berhasil diupdate </ br>";
echo "<a href='usiswa.php?a=".$_POST['in_nis']."'>Kembali</a>";

?>