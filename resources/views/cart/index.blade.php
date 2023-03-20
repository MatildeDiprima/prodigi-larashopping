@extends('layouts.app')

@section('head_title', 'Homepage')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Cancella</th>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Prezzo</th>
                <th scope="col">Quantità</th>
                <th scope="col">Prezzo totale</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $index => $product)
            <tr>
                <th><button type="button" class="btn btn-danger">X</button></th>
                <th>{{ $index+1 }}</th>
                <td>{{ $product->title}}</td>
                <td>{{ $product->price}}</td>
                <td>
                    <div class="input-group mb-3">
                        <input type="number" class="form-control text-center" placeholder="Quntità" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </td>
                <td>{{ $product->totalPrice}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection