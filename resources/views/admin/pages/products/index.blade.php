@extends('admin.layouts.app')

@section('title', 'Gestão de produtos')

@section('content')
    <h1>Exibindo os produtos</h1>

    @if (isset($products))
        @foreach ($products as $product)
            <p>{{$product}}</p>
        @endforeach
    @endif

    <hr>
    @forelse ($products as $product)
        <p>{{$product}}</p>  
    @empty
        <p>Não existem produtos cadastrados</p>
    @endforelse
    <hr>

    @if ($teste2 === 123)
        é igual

    @else    
        é diferente   
    @endif

    {{$teste}}



@endsection
    
