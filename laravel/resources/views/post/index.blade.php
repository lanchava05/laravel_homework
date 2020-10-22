<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href=" {{ asset('css/app.css') }}">
</head>
<body>

	<div class="container">
		<table class="table">
			<tr>
				<td>title</td>
				<td>desc</td>
			</tr>
			@foreach ($posts as $post)
				<tr>
					<td>{{ $post->title }}</td>
					<td>{{ $post->description }}</td>
				</tr>
			@endforeach
		</table>
	</div>
</body>
</html>