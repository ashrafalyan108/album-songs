<html>
<head>
</head>
<body>
<?php
	$servername="localhost";
	$BBDD="login-user";

		$conn=new mysqli($servername, alyan, lFBiGpmvxCCPKtET, $BBDD);
			if ($conn->connect_error){
				die("Error de connexió a BD");
			}

	$sql="SELECT login, contra, rol FROM usuaris";
	$result=$conn->query($sql);
		while($row = $result->fetch_assoc()) {
			if ($row["login"] == $_POST["check_user"] && $row["contra"] == $_POST["check_password"]){
				setcookie("usuario", $row["login"], time() + (20*3600), "/");
				setcookie("rol", $row["rol"], time() + (20*3600), "/");
				header("Location: index.php");
			} else {
				header("Location: index.php");
			}
		}
	  $conn->close();
?>
</body>
</html>
