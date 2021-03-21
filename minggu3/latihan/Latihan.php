<html>
<head><title>Input Nilai</title></head>
<body>
<h1>Form Input Data Mahasiswa</h1>
<form action ="tabelproses.php" method="post" 
name="input">
<table width="500">
<thead>
<tr>
<td>Nim</td>
<td><input type="text" name="nim" placeholder="example (A22.2020.02825)"></td>
</tr>
<tr>
<td>Program Studi</td> 
<td><select name="progdi">
<option value="Teknik Informatika S1">A11</option>
<option value="Sistem Informasi S1">A12</option>
<option value="Teknik Informatika D3">A22</option>
</select></td>
</tr>
<tr>
<td>Nilai Tugas</td>
<td><input type="number" min = "0" max = "100" step "1" name="tugas" placeholder="0-100"></td>
</tr>
<tr>
<td>Nilai UTS</td> 
<td><input type="number" min = "0" max = "100" step "1" name="uts" placeholder="0-100"></td>
</tr>
<tr>
<td>Nilai UAS</td>  
<td><input type="number" min = "0" max = "100" step "1" name="uas" placeholder="0-100"></td>
</tr>
<tr>
<td>Catatan Khusus</td>
<td><input type="checkbox" name="kehadiran" value="Kehadiran >=70%"> Kehadiran >=70%</td>
</tr>
<tr>
<td></td>
<td><input type="checkbox" name="interaktif" value="Interaktif dikelas"> Interaktif dikelas</td>
</tr>
<tr>
<td></td>
<td><input type="checkbox" name="terlambat" value="Tidak terlambat mengumpulkan tugas">Tidak terlambat mengumpulkan tugas</td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="Simpan" value="Simpan">
</tr>
</form>
</table>
</body>
</html>





