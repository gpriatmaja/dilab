<?php

require_once('lib/DBClass.php');
require_once('lib/msiswa.php');

$id = $_GET['a'];
if(!is_numeric($id)){
	exit('aouwouwouwo');
}

$siswa = new Siswa();
$data = $siswa->readSiswa($id);

if(empty($data)){
	exit('data not found');
}

$dt = $data[0];

?>

<table border = "1">
	<tr>
		<th>ID Siswa</th>
		<th>FULL NAME</th>
		<th>EMAIL</th>
		<th>NATIONALITY</th>
	</tr>
	<?php foreach($data as $a) :?>
		<tr>
			<td><?php echo $a['id_siswa'] ?></td>
			<td><?php echo $a['full_name'] ?></td>
			<td><?php echo $a['email'] ?></td>
			<td><?php echo $a['nationality'] ?></td>
		</tr>
		<?php endforeach ?>
</table>