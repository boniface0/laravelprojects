<!DOCTYPE html>
<html>
<head>
	<title>new</title>
</head>
<body>
	@foreach($users as $user)
  
     <h1>{{$user}}</h1>

	@endforeach


	{{'1'+2*"007"}}

	@include('inner');


	<script>
		var data= @json($users);
		console.warn(data[0]);
	</script>
</body>
</html>