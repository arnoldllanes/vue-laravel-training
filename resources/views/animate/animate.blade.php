<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>Animations</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.css">
	
</head>
<body>
		<div v-show="show" class="animated" transition="fade">Hello World</div>

		<button @click="show = !show">Toggle</button>

		<script src="/js/animate.main.js"></script>
</body>
</html>