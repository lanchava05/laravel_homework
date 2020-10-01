<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
		
		<tr>

		</tr>
		<tr>
			<th>name</th>
		</tr>

		@foreach ($newdata as $var)
			<tr>
				<td> {{ ++$loop->index }} </td>
				<td> {{ $var['name']}}</td>
			</tr>
		@endforeach
	</table>
</body>
</html>