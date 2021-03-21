<html>
<head>
<title>Hasil</title>
</head>
<body>
<h3 align="center"><blink>Hasil Akhir Nilai</blink></h3>
<table align="center" border="2">
<?php
if (isset($_POST['Simpan'])) {
$nim = $_POST['nim'];
$progdi = $_POST['progdi'];
function grade($nilai)
{
 if($nilai <= 100 ) { $grade = "A"; }
 if($nilai <  85 )  { $grade = "B"; }
 if($nilai <  70 )  { $grade = "C"; }
 if($nilai <  60 )  { $grade = "D"; }
 if($nilai <  50 )  { $grade = "E"; }
 if($nilai >  100 )  { $grade = "penilaian hanya berlaku 0-100"; }

 return $grade;
}
function status($nilai)
{
 if($nilai >= 60 ) {$status = "lulus"; }
 if($nilai < 60 )  {$status = "gagal"; }

 return $status;
}
$tugas  = trim($_POST['tugas']);
$uts  = trim($_POST['uts']);
$uas  = trim($_POST['uas']);
$nilai  =($tugas*0.4)+ ($uts*0.3)+ ($uas*0.3);

$grade  = grade($nilai);
$status = status($nilai);
if (isset($_POST['kehadiran'])) {

}
if (isset($_POST['interaktif'])) {

}
if (isset($_POST['terlambat'])) {

}
}
?>
<tr>
<th>Program Studi</th>
<th>NIM</th>
<th>Nilai Angka</th>
<th>Nilai Huruf</th>
<th>STATUS</th>
<th>Catatan Khusus</th>
</tr>
<tr>
<td align="center"><?php echo$progdi; ?></td>
<td align="center"><?php echo$nim;?></td>
<td align="center"><?php echo$nilai;?></td>
<td align="center"><?php echo$grade;?></td>
<td align="center"><?php echo$status;?></td>
<td align="center">
<?php echo "* " . $_POST['interaktif'];?><br>
<?php echo "* " . $_POST['interaktif'];?><br>
<?php echo "* " . $_POST['terlambat'];?>
</td>
</table>
</tr>
<tr>
</body>
</html>
