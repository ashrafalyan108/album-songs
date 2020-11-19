<html>
<head>
</head>
<body>
<?php
	setcookie("rol","",time() - 144000, "/");
	setcookie("usuario","",time() - 144000, "/");
	header("Location: index.php");
?>
</body>
</html>