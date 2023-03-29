@extends('layouts.grocery')
@section('content')
<div class="banner">
    <div class="jumbotron jumbotron-bg text-center rounded-0" style="background-image: url('{{ asset('assets/img/bg-header.jpg')}}');">
        <div class="container" id="container0">
            <h1 class="pt-5">
                Pagina de Prueba
            </h1>
            <p class="lead">
                Save time and leave the groceries to us.
            </p>
        </div>
    </div>
</div>

<div class="product-detail">
    <div style="display: none;" class="container" id="container1" style="background-color: blueviolet;">
        Hola que taaaaal
    </div>
    <button id="btnHola" class="btn btn-danger">HOLAAAAAA</button>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h1>Listado de productos</h1>
                                <input class="form-control" type="text" name="title" id="title">
                                <button href="" id="btnNew" class="btn btn-success btn-sm float-right">Nuevo Producto</button>
                            </div>
                            <div class="card-body">
                                
                                <label id="titlechange">Your name is:</label>
                                <ul>
                                    <li class="list-group">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    </li>
                                    <li class="list-group">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    </li>
                                    <li class="list-group">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    </li>
                                    <li class="list-group">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    </li>
                                    <li>
                                        <ul>
                                            <li class="list-group">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                            </li>
                                            <li class="list-group">Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                                            </li>
                                        </ul>
                                    </li>
                                </ul>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


@endsection