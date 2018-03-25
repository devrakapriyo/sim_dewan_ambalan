<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table border="1" cellspacing="5" cellpadding="5" width="100%" style="border-collapse:collapse;">
	<thead>
		<tr>
			<td rowspan="3">Nis</td>
			<td rowspan="3">Nama</td>
			<td rowspan="3">JK</td>
			<td colspan="44" style="text-align:center; background-color:#8bc34a;">2016</td>
		</tr>
		<tr>
			<td colspan="5" style="text-align:center; background-color:#aed581;">Januari</td>
			<td colspan="5" style="text-align:center; background-color:#aed581;">Febuari</td>
			<td colspan="5" style="text-align:center; background-color:#aed581;">Maret</td>
			<td colspan="5" style="text-align:center; background-color:#aed581;">April</td>
			<td colspan="5" style="text-align:center; background-color:#aed581;">Mei</td>
			<td colspan="5" style="text-align:center; background-color:#aed581;">Juni</td>
			<td colspan="5" style="text-align:center; background-color:#aed581;">Juli</td>
			<td colspan="5" style="text-align:center; background-color:#aed581;">Agustus</td>
			<td colspan="4" style="text-align:center; background-color:#689f38;">Absensi</td>
		</tr>
		<tr>
			<td>1</td>
			<td>2</td>
			<td>3</td>
			<td>4</td>
			<td>5</td>
			<td>1</td>
			<td>2</td>
			<td>3</td>
			<td>4</td>
			<td>5</td>
			<td>1</td>
			<td>2</td>
			<td>3</td>
			<td>4</td>
			<td>5</td>
			<td>1</td>
			<td>2</td>
			<td>3</td>
			<td>4</td>
			<td>5</td>
			<td>1</td>
			<td>2</td>
			<td>3</td>
			<td>4</td>
			<td>5</td>
			<td>1</td>
			<td>2</td>
			<td>3</td>
			<td>4</td>
			<td>5</td>
			<td>1</td>
			<td>2</td>
			<td>3</td>
			<td>4</td>
			<td>5</td>
			<td>1</td>
			<td>2</td>
			<td>3</td>
			<td>4</td>
			<td>5</td>
			<td style="text-align:center;">S</td>
			<td style="text-align:center;">I</td>
			<td style="text-align:center;">A</td>
			<td style="text-align:center;">Jml</td>
		</tr>
	</thead>
	<tbody>
		@foreach($data as $data)
		<tr>
			<td>{{$data->nis}}</td>
			<td>{{$data->nama}}</td>
			@if($data->jk == "Laki-laki")
			<td>L</td>
			@else
			<td>P</td>
			@endif
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		@endforeach
	</tbody>
</table>
</body>
</html>