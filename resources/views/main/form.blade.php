@extends('layout.main')
@section('title', 'Perubahan Data')
@section('content')
	<h3>Form Manipulasi Data</h3>
	<form method="POST" action="{{url('/save')}}">
		<input type="hidden" name="id" @if(!is_null($data)) value="{{$data['id']}}" @endif>
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<table class="table">
			<tr>
				<td width="20%">Nama</td>
				<td width="3%" align="center">:</td>
				<td>
					<input type="text" name="name" @if(!is_null($data)) value="{{$data['name']}}" @endif class="form-control" placeholder="Nama">
				</td>
			</tr>

			<tr>
				<td>Harga</td>
				<td align="center">:</td>
				<td>
					<input type="text" name="price" @if(!is_null($data)) value="{{$data['price']}}" @endif class="form-control" placeholder="Harga">
				</td>
			</tr>

			<tr>
				<td>Kategori</td>
				<td align="center">:</td>
				<td>
					<input type="text" name="category" @if(!is_null($data)) value="{{$data['category']}}" @endif class="form-control" placeholder="Kategori">
				</td>
			</tr>

			<tr>
				<td>Deskripsi</td>
				<td align="center">:</td>
				<td>
					<textarea name="description" class="form-control" rows="5" placeholder="Deskripsi">@if(!is_null($data)) {{$data['description']}} @endif</textarea>
				</td>
			</tr>

			<tr>
				<td colspan="3" align="center">
					<input type="submit" name="submit" value="Submit Data" class="btn btn-primary">
				</td>
			</tr>
		</table>

	</form>

@endsection