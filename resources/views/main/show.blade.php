@extends('layout.main')
@section('title', 'View One')
@section('content')

	<a href="{{url('/')}}" class="btn btn-warning">
		<span class="glyphicon glyphicon-arrow-left"></span> Kembali
	</a>

	<br><br>
	
	<div class="col-lg-6 col-md-6 col-xs-12">
		<div class="container">
			<img src="{{asset('public/indonesia.png')}}" class="img img-rounded" style="border: 1px solid #ccc;">
		</div>
	</div>

	<div class="col-lg-6 col-md-6 col-xs-12">
		<h2>{{$data['name']}}</h2>
			<hr>
			<h4>Description :</h4>
			<p align="justify">
				{{$data['description']}}
			</p>
			<br><br>
			<table class="table">
				<tr>
					<td align="left">{{$data['category']}}</td>
					<td align="right">Rp. {{$data['price']}}</td>
				</tr>
			</table>
	</div>

@endsection