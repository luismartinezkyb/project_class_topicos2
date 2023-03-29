@extends('layouts.grocery')
@section('content')


<div class="banner">
    <div class="jumbotron jumbotron-bg text-center rounded-0" style="background-image: url('assets/img/bg-header.jpg');">
        <div class="container">
            <h1 class="pt-5">
                Shopping Page
            </h1>
            <p class="lead">
                Save time and leave the groceries to us.
            </p>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <br>
            <button id="btnLoad" type="" class="btn btn-success btn-sm">Load Products</button>
            <br>

            <table id="tblProducts" class="table table-hover table-sm">
                <thead>
                
                    <th>Id</th>
                    <th>Name</th>
                    <th>Desc</th>
                    <th>Price</th>
                    <th>Categoria</th>
                
                </thead>
                <tbody>
                    
                </tbody>
            </table>
            
        </div>
    </div>
</div>
        
       


@endsection