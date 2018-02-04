<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Data Siswa</title>
		<!-- CSS -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
		<style type="text/css"> body { padding-top:50px; } </style>
	</head>
	<body class="container">
		<div class="col-sm-8 col-sm-offset-2">
		<center><h3><small>Many To One</small></h3></center>
			@foreach ($jurusan as $temp)
				<h3> <small>Nama Jurusan: {{$temp->nama}}</small><br>
					<li>Nama Mahasiswa: @foreach($temp->mahasiswa as $tampung) 
					{{$tampung->nama}},
					@endforeach
					</li>
					

				</h4>
				<hr/>
			@endforeach
		</div>
	</body>
</html>