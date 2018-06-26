@extends('layout.main')
@section('title', 'Index Page')
@section('content')
	<a href="{{url('/add')}}" class="btn btn-primary">
		<span class="glyphicon glyphicon-plus"></span> Tambah Data
	</a>

	<br><br>

	<table class="table table-striped table-bordered table-hover" id="table-data">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Kategori</th>
				<th>Harga</th>
				<th>Deskripsi</th>
				<th>Opsi</th>
			</tr>	
		</thead>

		<tbody>
			@foreach($data as $num => $item)
				<tr>
					<td>{{$num+1}}</td>
					<td>{{$item['name']}}</td>
					<td>{{$item['category']}}</td>
					<td>{{$item['price']}}</td>
					<td>{{$item['description']}}</td>
					<td>
						<a href="{{url('/add?id=')}}{{$item['id']}}" class="btn btn-xs btn-success" title="Edit">
							<span class="glyphicon glyphicon-pencil"></span>
						</a>

						<a href="{{url('/show?id=')}}{{$item['id']}}" class="btn btn-xs btn-info" title="Show">
							<span class="glyphicon glyphicon-search"></span>
						</a>

						<a href="{{url('/delete?id=')}}{{$item['id']}}" class="btn btn-xs btn-danger" title="Delete">
							<span class="glyphicon glyphicon-trash"></span>
						</a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@endsection