<!DOCTYPE html>
<html>
<head>
	<title>lelaa</title>
</head>
<body>
	<form action="{{route('testpostroute')}}" method="POST">
		@csrf
		<input type="text" name="name">
		<button>submit</button>
	</form>
</body>
	
	<header>

	</header>

</html>