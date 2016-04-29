<!DOCTYPE html>
<html>
<head>
	<title>Reviewing Filter</title>
</head>
<body>
	<ul>
		<!-- chain piping eg.) | orderBy 'name' | limitBy 2-->
		<li v-for="person in people | role 'student'">@{{ person.name }}</li>
	</ul>

	<script src="/js/filter.main.js"></script>
</body>
</html>