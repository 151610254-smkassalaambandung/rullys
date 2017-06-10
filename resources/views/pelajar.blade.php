<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border="1">
		<thead>
			<tr class="bg-info">
				<th>Id</th>
				<th>Nama</th>
				<th>alamat</th>
				<th>Jenis Kelamin</th>
			</tr>
			<?php
			$no =1;
			?>
			@foreach ($a as $data)
			<tr>
				<td>{{ $no++ }}</td>
				<td>{{ $data->nama }}</td>
				<td>{{ $data->alamat }}</td>
				<td>{{ $data->jk }}</td>
			</tr>
			@endforeach
			</thead>
		</thead>
		<tbody>
			
		</tbody>
	</table>

</body>
</html>