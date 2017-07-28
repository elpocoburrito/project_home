<html>
<head>
	<?php include '/head.php';?>
</head>
<body id="loader-body">
	<?php include '/topdocument_game.php';?>
		<iframe id="loader-iframe" src="<?php $type = $_GET['type']; $name = $_GET['name']; if ($name != "" && $type == "pdf") {echo "./files/".$name;} else if ($name != "" && $type == "link") {echo $name;} else {header('Location: index.php');} ?>" style="width:100%;height:100%;"></iframe>
	<?php include '/bottomdocument.php';?>
	<?php include '/footer.php';?>
</body>
</html>
