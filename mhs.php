<html>
<body>
<table style="width:100%">
  <tr>
    <td>NIM</td>
    <td>  <?php  echo $_POST["nim"];  ?> </td>
  </tr>
  <tr>
    <td>Nama</td>
    <td> <?php echo $_POST["nama"]; ?> </td>
  </tr>
  <tr>
    <td>Jenis Kelamin</td>
    <td> <?php echo $_POST["kelamin"]; ?> </td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td> <?php 
       $inputtext = $_POST["alamat"];
       echo $inputtext; ?> 
    </td>
  </tr>
  <tr>
    <td>Program Studi</td>
    <td> <?php echo $_POST["prodi"]; ?> </td>
  </tr>
  <tr>
    <td>Bahasa Pemrograman yang Dikuasai</td>
    <td> <?php 
        if(isset($_POST["PASCAL/DELPHI"])) 
        { echo "PASCAL/DELPHI"; } 
        elseif (isset($_POST["C/C++"])) 
        { echo "C/C++"; } 
        elseif (isset($_POST["VISUAL BASIC"])) 
        { echo "VISUAL BASIC"; } 
        else { echo "error"; } ?> 
    </td>
  </tr>
</table>
</body>
</html>