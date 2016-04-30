<!DOCTYPE html>
<html>
<head>
	<title>Workflow for Swapping View-Specific Components</title>
</head>
<body>

@if (isset($vueView))
	<component is="{{ $vueView }}">
@endif
		@yield('content')
	</component>

	<script src="/js/view.main.js"></script>
</body>
</html>