@extends('layouts.grocery')
@section('content')

<div class="banner">
    <div class="jumbotron jumbotron-bg text-center rounded-0" style="background-image: url('{{ asset('assets/img/bg-header.jpg')}}');">
        <div class="container">
            <h1 class="pt-5">
                Crear Producto
            </h1>
            <p class="lead">
                Ingresa un nuevo producto
            </p>
        </div>
    </div>
</div>





<div class="product-detail">

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					
					<div class="card-body">
						<form action="{{route('products.store')}}" method="post" >
							@csrf
							<div class="form-group">
								<label for="">Nombre</label>
								<input type="text" class="form-control" name="name" required="">
							</div>
							<div class="form-group">
								<label for="">Descripción</label>
								<input type="text" class="form-control" name="description" required="">
								<br>
								<label for="">Precio</label>
							</div>

							<div class="input-group mb-3">
								
								<span class="input-group-text">$</span>
								<input type="number" class="form-control" name="price" required="">
							</div>
							<div class="form-group">
								<label for="">Antiguo Precio</label>
								<input type="number" class="form-control" name="old_price" required="">
							</div>
							<div class="form-group">
								<label for="">Descuento</label>
								<input type="number" class="form-control" name="discount" required="">
							</div>
							<div class="form-group">
								<label for="">Cantidad</label>
								<input type="number" class="form-control" name="quantity" required="">
							</div>
							<div class="form-group">
								<label for="">Categoria</label>
								<select name="category" class="form-control" required>
									<option value="" selected disabled hidden>Selecciona una categoria</option>
									@foreach($categories as $category)
									<option value="{{$category->id}}">{{$category->id}} - {{$category->name}}</option>
									@endforeach
								</select>
							</div>
							<div class="form-group">
								
								<label >Imagen</label>
    							<input name="image" type="file" class="form-control-file" id="exampleFormControlFile1">	
								
								
							</div>

							
							<button type="submit" class="btn btn-primary">Guardar</button>
							<a href=" {{ route('products.index')}}" class="btn btn-danger">Cancelar</a>
						</form>
						
					</div>
				</div>
			</div>
		</div>

	</div>
</div>
@endsection