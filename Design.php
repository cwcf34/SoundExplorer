<!DOCTYPE html>
<html>

<head>

	<title>Sound Explorer</title>
	
	<style>
		body {
			background: url(Images/background.jpg);
		}
		
		@font-face {
			font-family: abode;
			src: url(JKAbode-Demo.ttf);
		}
		
		h1#title {
			margin-top: 15px;
			border-top: 3px solid orange;
			border-bottom: 3px solid orange;
			color: white;
			margin-left: auto;
			margin-right: auto;
			text-align: center;
			font-family: abode, verdana;
			font-size: 250%;
			width: 300px;
			
		}
		
		div#footer {
			padding: 5px;
			border-top: 5px solid white;
			color: white;
			text-align: center;
		}
		
		div#menu {
			text-align: center;
		}
		
		.error {
			text-align: center;
			font-size: 150%;
			color: red;
		}
	
		.content {
			text-align: center;
			color: white;
		}
		
		ol {
			list-style-type: decimal;
			font-size: large;
			font-family: verdana;
		}
		
		img {
			padding 10px 15px;
			border-radius: 8px;
			margin-bottom: 10px;
		}
		
		iframe {
			padding 10px 15px;
			border-radius: 8px;
			margin-bottom: 10px;
		}
		
		button {
			padding: 10px 15px;
			background: #FF8000;
			color: #FFF;
			border-radius: 4px;
			margin-bottom: 20px;
		}
		
		#button {
			list-style-type: none;
		}
	</style>
	
<link href="jquery-ui-1.11.2/jquery-ui.css" rel="stylesheet">
<script src="jquery-ui-1.11.2/external/jquery/jquery.js"></script>
<script src="jquery-ui-1.11.2/jquery-ui.js"></script>
<script src="Tabs.js"></script>

</head>

<body>
	<h1 id="title">Sound Explorer</h1>
	
	<?php if ($error) {
	print "<p class=\"error\">$error</p>\n";
    } ?>
	
	<?php require "Menu.php"; ?>
	
	<div id="content1" class="content">
	</div>
	
	<div id="footer">Copyright &copy; 2014 Cody Cameron</div>
</body>
</html>
