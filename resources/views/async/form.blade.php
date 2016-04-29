<!DOCTYPE html>
<html>
<head>
	<title>Custom Directives and Asynchronous Forms</title>
</head>
<body>
	<div class="container">
		<form method="POST" action="/posts/3" v-ajax complete="Okay, the post has been deleted.">
			{{ method_field('DELETE') }}
			{{ csrf_field() }}

			<button type="submit">Delete Post</button>
			
		</form>
	</div>

	<script src="/js/async.main.js"></script>
</body>
</html>