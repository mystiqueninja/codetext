<!DOCTYPE html>
<html lang="en" ng-app="myApp">
	<head>
		<meta charset="UTF-8">
		<title>Angular</title>
		<!-- Angular & Libs -->
			<script src="js/lib/angular.js"></script>
			<script src="js/lib/route.js"></script>
		<!-- Angular application -->
			<script src="js/app.js"></script>
			<script src="js/controllers.js"></script>
		<!-- Codemirror -->
			<script src="js/lib/code/codemirror.js"></script>
			<script src="js/lib/code/modes/javascript/javascript.js"></script>
		<!-- Stylesheets -->
			<link rel="stylesheet" href="js/lib/code/codemirror.css">
			<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<div class="container" ng-view></div>
		<div class="container" id="editor"></div>
		<div id="console"></div>
		<div id="fileTree">
			<pre>
			</pre>
		</div>

		<input type="text" name="filePath" id="filePath">
		<select name="fileType" id="fileType">
			<option value="js">JavaScript</option>	
		</select>

		<button id="save" type="button">Save</button>
		<button id="load" type="button">Load</button>
		<!-- Scripts -->
			<script src="js/lib/jquery.min.js"></script>
			<script src="js/editor.js"></script>
	</body>
</html>