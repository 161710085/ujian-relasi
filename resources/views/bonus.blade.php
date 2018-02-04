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
			<center><h1><i><marquee><strong>Bonus</i></strong></marquee></h1></center>
			@foreach ($mahasiswa as $temp)
				<h3><strong> Nama <small>: {{$temp->nama}}</small><br></strong>
				<li><strong>Nama Wali <small> :{{$temp->wali->nama}}</small></strong></li>
				<li><strong>Alamat Wali <small>: {{$temp->wali->alamat}}</small></strong></li>
				<li><strong>Nama Guru  <small>:{{$temp->dosen->nama}}</strong></li></small>
				<li> <strong>Kelas <small>:{{$temp->jurusan->nama}}</strong></li></small>
				<li> <strong>Mata Pelajaran<small> : 
					@foreach($temp->mata_kuliah as $tampung) 
					{{$tampung->nama_matkul}}
					@endforeach
					</li></strong></small>
					

				</h4>
				<hr/>
			@endforeach
		</div>
	</body>
</html>