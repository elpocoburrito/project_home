<html>
<head>
	<?php include '../head.php';?>
  <script src="TemplateData/UnityProgress.js"></script>
	<script src="Build/UnityLoader.js"></script>
	<script>
	  var gameInstance = UnityLoader.instantiate("gameContainer", "Build/FlappyFish WebGL.json", {onProgress: UnityProgress});
	</script>
</head>
<body>
<?php include '../topdocument_game.php';?>

<div class="webgl-content">
  <div id="gameContainer" style=""></div><!--width: 960px; height: 600px-->
  <div class="footer">
    <div class="webgl-logo"></div>
    <div class="fullscreen" onclick="gameInstance.SetFullscreen(1)"></div>
    <div class="title">FlappyFish</div>
  </div>
</div>

<?php include '../bottomdocument.php';?>
<?php include '../footer.php';?>
</body>
</html>
