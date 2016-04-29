<!DOCTYPE html>
<html>
<head>
	<title>Managing Custom Events</title>
</head>
<body>
	
	<message @new-message="handleNewMessage"></message>
	<ul>
		<li v-for="message in messages">
			@{{ message }}
		</li>
	</ul>
	<script src="/js/events.app.js"></script>
</body>
</html>