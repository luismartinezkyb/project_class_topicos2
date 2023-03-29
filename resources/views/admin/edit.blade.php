@extends('layouts.grocery')
@section('content')

<div class="banner">
            <div class="jumbotron jumbotron-bg text-center rounded-0" style="background-image: url('{{ asset('assets/img/bg-header.jpg')}}');">
                <div class="container">
                    <h1 class="pt-5">
                        Editar Producto
                    </h1>
                    <p class="lead">
                        Edita un producto existente
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
					<h1>Editar producto</h1>
					
				</div>
				<div class="card-body">
					<form action="{{ route ('products.update', $product->id)}}" method="post" >
						@method('put')
						@csrf
						
						<div class="form-group">
							<label for="">Nombre</label>
							<input value="{{ $product->name }}" type="text" class="form-control" name="name" required="">
						</div>
						
						<div class="form-group">
							<label for="">Descripción</label>
							<input value="{{ $product->description }}" type="text" class="form-control" name="description" required="">
						</div>
						<div class="form-group">
							<label for="">Precio</label>
							<input value="{{ $product->price }}" type="number" class="form-control" name="price" required="">
						</div>
						<div class="form-group">
							<label for="">Antiguo Precio</label>
							<input value="{{ $product->old_price }}" type="number" class="form-control" name="old_price" required="">
						</div>
						<div class="form-group">
							<label for="">Descuento</label>
							<input value="{{ $product->discount }}" type="number" class="form-control" name="discount" required="">
						</div>
						<div class="form-group">
							<label for="">Cantidad</label>
							<input value="{{ $product->quantity }}" type="number" class="form-control" name="quantity" required="">
						</div>
						<div class="form-group">
							<label for="">Categoria</label>
							<select name="category" class="form-control" required>
								
								@foreach($categories as $category)
								@if ($product->category_id==$category->id)
									<option value="" selected disabled hidden>{{$category->id}} - {{$category->name}}</option>
								@endif
								@endforeach
								@foreach($categories as $category)
								<option value="{{$category->id}}">{{$category->id}} - {{$category->name}}</option>
								@endforeach
								
							</select>
						</div>
						<div class="form-group">
							<label for="">Imagen</label>
							<select name="image" class="form-control">
								
								<option value="{{$category->id}}"></option>
								
							</select>
							
						</div>
						<button type="submit" class="btn btn-primary">Guardar</button>
						<a href="{{ route('products.index')}} " class="btn btn-danger">Cancelar</a>
					</form>
					
				</div>
			</div>
		</div>
	</div>

</div>
</div>
@endsection