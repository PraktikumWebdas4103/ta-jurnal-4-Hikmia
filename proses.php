<form action=" " method="POST" enctype="multipart/form-data">

	<table>
		<tr>
			<td>Nama Lengkap</td>
			<td>: <input type="text" name="Nama[]"></input></td>
		</tr>
		<tr>
			<td>Tempat Lahir</td>
			<td>: <input type="text" name="Lahir[]"></input></td>
		</tr>
		<tr>
			<td>Masukkan Gambar</td>
			<td>: <input type="file" name="img" value="gambar"></input></td>
		</tr>
		<tr>
			<td>Tujuan Wisata</td>
			<td>:</td>
			<tr>
			<td>
			<input type="checkbox" name="Film[]" value="Bali">Bali</input><br>
			<input type="checkbox" name="Film[]" value="Raja Ampat">Raja Ampat</input><br>
			<input type="checkbox" name="Film[]" value="Pulau Derawan">Pulau Derawan</input><br>
			<input type="checkbox" name="Film[]" value="Bangka Belitung">Bangka Belitung</input><br>
			<input type="checkbox" name="Film[]" value="Labuan Bajo">Labuan Bajo</input>
		</tr>
		</td>
		</tr>
		<tr>
			<td>Genre Film</td>
			<td>:</td>
			<tr>
			<td>
			<input type="checkbox" name="Wisata[]" value="Horor">Horor</input><br>
			<input type="checkbox" name="Wisata[]" value="Action">Action</input><br>
			<input type="checkbox" name="Wisata[]" value="Anime">Anime</input><br>
			<input type="checkbox" name="Wisata[]" value="Thriller">Thriller</input><br>
			<input type="checkbox" name="Wisata[]" value="Animasi">Animasi</input>
		</tr>
		</td>
		</tr>
		</tr><br>
		<td><input type="submit" name="submit" value="Simpan">
		<input type="submit" name="delete" value="Hapus"></td>
	</table>
</form>
<?php
	if (isset($_POST['submit'])) {
		$Nama = $_POST['Nama'];
		$Lahir = $_POST['Lahir'];
		$img = $_FILES['img']['name'];
		$Film = $_POST['Film'];
		$Wisata = $_POST['Wisata'];
		$delete = $_POST['delete'];

		echo "<img src ='gambar/$img'>";
		echo "</br>";
		print_r($Nama);
		echo "</br>";
		print_r($Lahir);
		echo "</br>";
		print_r($Film);
		echo "</br>";
		print_r($Wisata);
	}
	?>