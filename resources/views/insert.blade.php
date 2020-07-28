@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<form action="{{route('insert.store')}}" method="post">
		@csrf
		<div class="form-group">
			<div class="row">
				<div class="col-sm-4">	
					<label for="name">Name:</label>
					<input type="text" name="name" id="name" class="form-control">
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4">	
					<label for="mobile">Mobile NO:</label>
					<input type="text" name="mobile" id="mobile" class="form-control">
				</div>
			</div>

			<div class="row">
				<div class="col-sm-4">	
					<label for="add">Address</label>
					<textarea name="address" class="form-control">
						
					</textarea>
				</div>
			</div>
		
		<button type="submit" class="btn btn-primary">Insert</button>
	</form>
</div>

</body>
</html>

@endsection