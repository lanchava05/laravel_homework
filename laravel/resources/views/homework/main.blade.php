<!DOCTYPE html>
<html>
<head>
	<title>შეიყვანე მონაცემები</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<form action="{{route('getresult')}}" method="POST">
@csrf
  <div class="container card mt-4">
  <div class="form-row card mt-4">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Name</label>
      <input type="name" class="form-control" id="inputName" placeholder="Name" name="name">
    </div>
    <div class="form-group col-md-6">
      <label for="inputLastname">Lastname</label>
      <input type="lastname" class="form-control" id="inputLastname" placeholder="lastname"  name="lastname">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Address"   name="address">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Biography</label>
    <input type="text" class="form-control" id="inputBio" placeholder="Enter Bio" name="bio">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Birth Date</label>
      <input type="Date" class="form-control" id="inputDate" name="birthdate">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" ></script>
</body>
	<header>
		<form>
			
			
		</form>
	</header>
</html>