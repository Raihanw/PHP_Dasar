<html>
<body>
	<form action="biodata.php" method="post">
		<p>NIM 	: <input type="text" name="nim"></p>
		<P>Nama : <input type="text" name="nama"></P>
		<P>Jenis Kelamin : 
		<input type="radio" name="kelamin" value="Laki-laki">Laki-laki
		<input type="radio" name="kelamin" value="Perempuan">Perempuan </P>
		<P>Program Studi :
		<select name="prodi">
			<option value="Biologi">Biologi</option>
			<option value="Matematika">Matematika</option>
			<option value="Fisika">Fisika</option>
			<option value="Sistem Informasi">Sistem Informasi</option>
		</select></P>
		<input type="submit" value="kirim">
	</form>
</body>
</html>