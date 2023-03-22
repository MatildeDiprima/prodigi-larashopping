@extends('layouts.app')

@section('head_title', 'Carrello')

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
            @foreach ($carts as $index => $cart)
                <tr>
                    <th><button type="button" class="btn btn-danger">X</button></th>
                    <th>{{ $index+1 }}</th>
                    <td><a href="{{ route('categories.show', $cart->product->category) }}">{{ $cart->product->title}}</a></td>
                    <td>€ {{ $cart->product->price }}</td>
                    <td>{{ $cart->quantity }}</td>
                    <td><strong>€ {{ $cart->product->price * $cart->quantity}}</strong></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection