@extends('currency.layout')

@section('title', $currency->title)

@section('content')

@page_header
    @slot('header') 
        Currency info 
    @endslot
@endpage_header
<div class="text-center currency-info">
    <div class="text-right">
        <a href="{{ route('currencies-edit', $currency->id) }}" class="btn btn-warning edit-button" role="button">Edit</a>
        <a href="{{ route('currencies-delete', $currency->id) }}" class="btn btn-danger delete-button" role="button">Delete</a>
    </div>
    <img src="{{ $currency->logo_url }}"/><b>{{ $currency->title }}</b>({{ $currency->short_name }})
    <p><b>Цена: </b>{{ $currency->price }} USD</p>
</div>
@endsection