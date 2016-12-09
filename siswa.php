<?php
//komen
//
require_once('lib/DBClass.php');
require_once('lib/msiswa.php');

$siswa = new Siswa();
$data = $siswa->readAllSiswa();

/*print'<pre>';
print_r($data);
print '<pre>';*/
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
			<td>
				<a href="dsiswa.php?a=<?php echo $a['id_siswa']?>"> Detail </a>
			</td>
			<td>
				<a href="usiswa.php?a=<?php echo $a['id_siswa']?>"> Update </a>
			</td>
			<td>
				<a href="delsiswa.php?a=<?php echo $a['id_siswa']?>"> Delete </a>
			</td>
		</tr>
		<?php endforeach ?>
</table>