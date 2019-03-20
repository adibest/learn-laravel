<!DOCTYPE html>
<html>
<head>
	<title>BlogController</title>
</head>
<body>
	<div style="text-align: center; margin-top:10em;">
		<h1>XOXO</h1>
		<p>
			nama saya adalah: {{ $nama }}
		</p>
		<p>Makanan favorit: </p>
		<ul>
			@foreach ($makanans as $makanan)
				<li> {{ $makanan }} </li>
			@endforeach
		</ul>
	</div>
</body>
</html>