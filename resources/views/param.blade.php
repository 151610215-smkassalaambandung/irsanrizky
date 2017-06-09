<!DOCTYPE html>
<html>
<head>
	<title>Parameter</title>
</head>
<body>


		Daftar : <b>{{$pil}} {{$jenis}}</b>
		<br>
		<br>

		@foreach($jac as $jk)
			{{$jk}}
			
			<hr>
		@endforeach	
	
	
</body>
</html>