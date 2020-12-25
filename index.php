<!DOCTYPE html>
<html>
<head>
	<title>	Data Mahasiswa </title>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>

	<div class="container">
		<div class="alert alert-info">Data Mahasiswa</div>

		<table class="table table-bordered">

			<thead>
				<tr>
					<th>No</th>
					<th>NIM</th>
					<th>Nama</th>
					<th>Prodi</th>
					<th>Aksi</th>
				</tr>
			</thead>

			<tbody>

				<?php  
					require'../koneksi.php';
					$query ="select * from mahasiswa" ;
					$result = mysqli_query($link, $query);

					$no=1;

					while ($isi = mysqli_fetch_object($result)) {
						# code...
					
				?>

				<tr>
					<td><?= $no++; ?></td>
					<td><?php echo $isi->nim;?></td>
					<td><?= $isi->nama_mahasiswa;?></td>
					<td><?= $isi->prodi;?></td>
					<td>
						<a href="" class="btn btn-danger">Delete</a>
						<a href="" class="btn btn-warning">Edit</a>
					</td>
				</tr>

			<?php } ?>

			</tbody>
			
		</table>
	</div>

</body>
</html>