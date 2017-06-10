<!DOCTYPE html>
<html>
<head>
	<title>Parameter</title>
</head>
<body>


		Daftar : <b>{{$data}} {{$data2}}</b>
		<br>

		@foreach($query as $jk)
			<li>{{$jk}}</li>
			
		@endforeach	
	
	
</body>
</html>