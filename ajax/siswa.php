<?php

require '../function.php';



$kunci= $_GET["kunci"];

$query ="SELECT * FROM datasiswa
    WHERE nama LIKE '%$kunci%' OR
        email LIKE '%$kunci%' OR
        nourut LIKE '%$kunci%'
    ";;
$siswa = query($query);



?>
<!-- HTML -->
<!-- pengganti tabel  -->
<table cellpadding="10" cellspacing="0" class="highlight responsive-table lefted">
<br></br>
	<tr>
		<th>No</th>
		<th>Aksi</th>
		<th>id</th>
		<th>Nama</th>
		<th>Email</th>
	
	</tr>
	 <?php $i=1; ?>
	 <?php foreach ($siswa as $row) :?>

	
	<tr>
		<td><?= $i ?></td>
		<td>
		<a href="edit.php?id=<?= $row ['id']; ?>" >Edit <a/> |
	    <a href="hapus.php?id=<?= $row ['id']; ?>" onclick="return confirm('apakah anda yakin ingin menghapus data ini?')">Hapus<a/>
		</td>
		<td><?= $row ["id"]; ?></td>
		<td><?= $row ["nama"]; ?></td>
		<td><?= $row ["email"]; ?></td>
	
	</tr>
	<?php $i++ ; ?>
	<?php endforeach ;?>
	
		
	<br></br>
	
	
</table>