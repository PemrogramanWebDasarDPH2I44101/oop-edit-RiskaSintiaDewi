<?php  

include 'class.php';
$nim=$_GET['nim'];
$result=$kalkulator->view_data($nim);
$row=mysqli_fetch_assoc($result);

?>

<html>
<head>
	<title></title>
</head>
<body>
	<input type="hidden" value="<?php echo $row['nim'];?>" name="nim">
	<form action="data.php" method="POST">

		Nama : <input type="text" name="nama" value="<?php echo $row['nama'];?>"><br>
		NIM : <input type="number" name="nim" value="<?php echo $row['nim'];?>"size="10"><br>
		Tanggal Lahir : <input type="date" name="tanggal" value="<?php echo $row['tanggal'];?>"><br>
		<input type="submit" value="submit">
	</form>
</body>
</html>