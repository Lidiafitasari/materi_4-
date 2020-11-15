@extends('template.base')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card mt-4">
					<div class="card-header">
						Data Produk
						<a href="{{url('produk/create')}}" class="btn btn-dark float-right"><i class="fa fa-plus">  Tambah Data</i></a>
					</div>
					<div class="card-body">
						<table class="table">
							<thead>
								<th>No</th>
								<th width="200px">Aksi</th>
								<th>Nama</th>
								<th>Harga</th>
								<th>Stok</th>
							</thead>
							<tbody>
								@foreach($list_produk as $produk)
								<tr>
									<td>{{$loop->iteration}}</td>
									<td>
										<div class="btn-group">
										<a href="{{url('produk', $produk->id)}}" class="btn btn-dark"><i class="fa fa-info"></i></a>
										<a href="{{url('produk', $produk->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
										<form action="{{url('produk', $produk->id)}}" method="post" class="form-inline" onsubmit="return confirm('Apakah Anda Yakin?')">
											@csrf
											@method("delete")
											<button class="btn btn-danger"><i class="fa fa-trash"></i>
											</button>
										</form>
									</td>
									<td>{{$produk->nama}}</td>
									<td>{{$produk->harga}}</td>
									<td>{{$produk->stok}}</td>
								</tr>
								@endforeach
							</tbody>							
						</table>
					</div>
				</div>
			</div>
		</div>		
	</div>

@endsection