<html>
<head>
<title>Alkarizqy Restu Pribadi Budianto</title>
<style>
body{
    background-image: url("https://www.bengkeldesain.com/img_desain_hemat/kecil_desain_logo-800471-JP_Infinity.jpg");
}
form {
    background-color: #fff;
    border: 1px solid #ccc;
    padding: 20px;
    max-width: 400px;
    margin: 50px auto;
    box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);  
}
.hasil {
    background-color: #fff;
    border: 1px solid #ccc;
    padding: 20px;
    max-width: 400px;
    margin: 50px auto;
    box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);  
}
p{
    text-align:center;
}
h2{
    text-align:center;
}
.container {
        padding: 16px;
      }
table, th, td {
  border:1px solid black;
}
.reset{
align:right;
}
</style>
</head>
<body>
	<form method="post" action="">
		<h2>BENGKEL ALKARIZQY</h2>
		<p>Apa yang anda inginkan?</p>
		
	<div class="container";>
	<table style="width:100%">	

<label for="nama">Nama Pelanggan:</label>
<input type="text" id="nama" name="nama"><br><br>
<tr>
<td>Jasa</td>
<td>pilih</td>
<td>Harga</td>
</tr>
<tr>
<td><label for="luar"> Ganti ban luar</label></td>
<td><input type="checkbox" id="ban" name="servis[]" value="65000"></td>
<td>Rp.25.000</td>
</tr>
<tr> 
	<td><label for="dalam"> Ganti ban dalam</label></td>
	<td><input type="checkbox" id="ban" name="servis[]" value="30000"></td>
	<td>Rp.30.000</td>
</tr>
<tr>
	<td><label for="samping"> Ganti oli samping</label></td>
	<td><input type="checkbox" id="oli" name="servis[]" value="50000"></td>
	<td>Rp.50.000</td>
</tr>
<tr>
	<td><label for="mesin"> Ganti oli mesin</label></td>
	<td><input type="checkbox" id="oli" name="servis[]" value="50000"></td>
	<td>Rp.50.000</td>
</tr>
<tr>
	<td><label for="sen"> Ganti warna lampu</label></td>
	<td><input type="checkbox" id="lampu" name="servis[]" value="35000"></td>
	<td>Rp.35.000</td>
</tr>
</table><br>
<input type="submit" name="ctk" value="cetak">
		</div>
	</form>
	<?php
if(isset($_POST['ctk'])){
    $bengkel = $_POST["servis"];
	$nama = $_POST['nama'];
	$total = 0;

    foreach ($bengkel as $harga) {
    $total += $harga;
  }
    $jumlah = $total;
    $diskon = ($total > 100000) ? 0.1 * $jumlah : 0;
	$totalharga = $jumlah - $diskon;
}
?>
<div class="hasil">
<h2>Struk Pembayaran</h2>
<?php
echo "Pelanggan : " . $nama;
?><br>
<?php
echo "Jasa yang dipilih : " ;
?>
  <br><br>
<table>
        <td><?php echo "Total Harga : Rp." . $total ?></td>
		<tr>
        <td><?php echo "Diskon : Rp." . $diskon ?></td>
     </tr>
     <tr>
        <td><?php echo "total yang harus di bayar : Rp." . $totalharga ?></td>
     </tr>
</table><br>
<input type="reset" >
</div>
</body>
</html>
