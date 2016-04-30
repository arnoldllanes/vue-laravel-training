<!DOCTYPE html>
<html>
<head>
	<title>Alerts with laravel and vue</title>
</head>
<body>

	<div class="container">
	@if (session()->has('status'))
		<alerts important>{{ session('status') }}</alerts>
	@endif

		<div class="content">
			<div class="title">Laravel 5</div>
		</div>
	</div>

	<script src="/js/alert.main.js"></script>
</body>
</html>