<!DOCTYPE html>
<html>
<head>
	<title>Show Results</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
	<table>
		@foreach ($dataresult as $var)
		<table class="table">
			 <thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Firstname</th>
			      <th scope="col">Lastname</th>
			      <th scope="col">Address</th>
			      <th scope="col">Bio</th>
			      <th scope="col">Birth Date</th>
			    </tr>
			 </thead>
			 <tbody>
			    <tr>
			      <th scope="row">1</th>
			      <td>{{ $var['name']}}</td>
			      <td>{{ $var['lastname']}}</td>
			      <td>{{ $var['address']}}</td>
			      <td>{{ $var['bio']}}</td>
			      <td>{{ $var['birthdate']}}</td>
			    </tr>
			 </tbody>
		</table>

	@endforeach
	</table>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" ></script>
</body>
</html>