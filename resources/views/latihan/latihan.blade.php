<!DOCTYPE html>
<html>
<head>
	<title>Parameter</title>
</head>
<body>

		Daftar :{{$id}}
		<br>
		<br>

		@foreach($ubed as $data)
			{{$data}}<hr>
		@endforeach	
	
</body>
</html>