<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Shopping Helper</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="{{ route('items.index') }}">Items</a>
		</div>
		<div class="nav navbar-nav navbar-right">
			<li><a href="{{ route('home') }}">Home</a></li>
			<li><a href="{{ route('items.index')}}">List</a></li>
		</div>
	</div>
</nav>

<main>
	<div class="container">
		@yield('content')
	</div>
</main>


</body>
</html>