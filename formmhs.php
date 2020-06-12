<html>
<body>
	<form action="mhs.php" method="post">
		<p>NIM 	: <input type="text" name="nim"></p>
		<P>Nama : <input type="text" name="nama"></P>
		<P>Jenis Kelamin : 
		<input type="radio" name="kelamin" value="Laki-laki">Laki-laki
		<input type="radio" name="kelamin" value="Perempuan">Perempuan </P>
		<p>
			Alamat : <br>
			<textarea name="alamat" rows="2" cols="50"></textarea>
		</p>
		<P>Program Studi :
		<select name="prodi">
			<option value="Biologi">Biologi</option>
			<option value="Matematika">Matematika</option>
			<option value="Fisika">Fisika</option>
			<option value="Sistem Informasi">Sistem Informasi</option>
		</select></P>
		<p>
			Bahasa Pemrograman yang dikuasai : <br>
			<input type="checkbox" name="PASCAL/DELPHI" value="NO">PASCAL/DELPHI <br>
			<input type="checkbox" name="C/C++" value="NO">C/C++ <br>
			<input type="checkbox" name="VISUAL BASIC" value="NO">VISUAL BASIC <br>
		</p>
		<input type="submit" value="kirim">
	</form>
</body>
</html>