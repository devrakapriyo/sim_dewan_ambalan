<!DOCTYPE html>
<html>
@extends('admin.dashboard')
<head>
	<title></title>
</head>
@section('admin.konten')
<body>
<div class="row">
@if(Auth::User()->jabatan != "Pembinaan" || Auth::User()->jabatan != "Judat")
	<div class="col s12">
		@if(Session::has('sukses'))
		<div class="chip" title="Klick jika ingin di hilangkan">
			<i class="material-icons green-text">done</i>
			{{ Session::get('sukses') }}
		</div>
		@endif
		<ol class="breadcrumb white">
		  <li><a href="{{URL::asset('pembinaan')}}">Input Data Pembinaan</a></li>
		  <li><a href="{{URL::asset('datapembinaan')}}">Data Pembinaan</a></li>
		</ol>
		<div class="card">
			<div class="card-content red darken-1 white-text">
				<span class="card-title">Pembinaan Peserta</span>
			</div>
			<div class="card-action">
			<form method="post" action="{{URL::asset('pembinaan')}}">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<table id="addtable" class="highlight responsive-table">
					<thead>
						<tr>
							<td>NIS</td>
							<td>Pembinaan</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								<div class="input-field">
									<input type="text" name="nis[]" placeholder="Masukan nis peserta" required>
								</div>
							</td>
							<td>
								<div class="input-field">
									<input type="text" name="pembinaan[]" placeholder="Masukan pembinaan peserta" required>
								</div>
							</td>
						</tr>
					</tbody>
					<tfoot>
						<tr>
							<td colspan="2">
								<div class="btn green white-text" onclick="addtable()" name="action"><i class="material-icons right">add</i>Tambah</div>
								<button class="btn blue white-text"><i class="material-icons right">send</i>Simpan</button>
							</td>
						</tr>
					</tfoot>
				</table>
			</form>
			</div>
		</div>
	</div>
@else
<div class="card">
	<div class="card-content">Maaf, anda tidak memilik hak akses</div>
</div>
@endif
</div>
</body>
@stop
</html>