@extends('layouts.app')

@section('head_title', 'Lista categoria')

@section('content')
        <h1>Categoria {{ $category->name }}</h1>
       
        <div class="container text-center d-inline-flex" style="height:100%; "> 
            <div class="container row">
                @foreach($products as $product)
                    <div class="card col-4"style="width: 20rem;">
                        <img src="{{ $product->image }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{substr($product->title,0,40 )}}</h5>
                            <p class="card-text">{{ substr($product->description,0,80 )}}</p>
                            <h3 class="card-price">€ {{ $product->price }}</h3>

                            <form method="post" action="{{ route ('carts.store', $product->id) }}">
                                @csrf
                                <div class="mb-3 d-none">
                                    <input type="text" class="form-control" id="product_id" name="product_id" value="{{ $product->id }}">
                                </div>
                                <button class="btn btn-primary">Aggiungi al carrello</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div> 
        </div> 
@endsection