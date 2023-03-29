@extends('layouts.grocery')
@section('content')
	<div class="banner">
            <div class="jumbotron jumbotron-bg text-center rounded-0" style="background-image: url('{{ asset('assets/img/bg-header.jpg')}}');">
                <div class="container">
                    <h1 class="pt-5">
                        Todos los Productos
                    </h1>
                    <p class="lead">
                        Una lista entera de todos los productos
                    </p>
                </div>
            </div>
        </div>
        
		<div class="product-detail">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="card">
							<div class="card-header">
								<h1>Listado de productos</h1>
								
								<a href="{{route('products.create')}}" class="btn btn-success btn-sm float-right">Nuevo Producto</a>
							</div>
							<div class="card-body">
								@if(session('info'))
								<div class="alert alert-success">
									{{session('info')}}	
								</div>
								
								@endif
								<table id="tbl_products" class="table table-hover table-sm display">
									<thead>
										<tr>
										<th>Nombre</th>
										<th>Descripcion</th>
										<th>Precio$</th>
										<th>Cantidad</th>
										<th>Comentarios</th>
										<th>Actions</th>
										</tr>
									</thead>
									<tbody>
										@foreach($products as $product)
										<tr>
											<td>{{$product->name}}</td>
											<td>{{$product->description}}</td>
											<td>$ {{$product->price}}</td>
											<td>{{$product->quantity}}</td>
											<td>{{$product->comments->count()}}</td>

											<td>
												<a class="btn btn-warning" href="{{route('products.edit', $product->id)}}" title="">Editar</a>
												

												<a href="javascript: document.getElementById('delete-{{ $product->id }}').submit()" class="btn btn-danger btn-sm" title="">Eliminar</a></td>
											<form id='delete-{{ $product->id }}' action="{{route('products.destroy', $product->id)}}" method="post">
												@method('delete')
												@csrf
											</form>
											
										</tr>
										@endforeach
									</tbody>
								</table>


							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
@endsection