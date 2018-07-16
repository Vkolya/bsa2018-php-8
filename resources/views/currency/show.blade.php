@extends('currency.layout')

@section('title', $currency->title)

@section('content')

@page_header
    @slot('header') 
        {{ $currency->title }}
    @endslot
@endpage_header
<div class="text-center currency-info">
    <div class="text-right">
        <a href="{{ route('currencies-edit', $currency->id) }}" class="btn btn-warning edit-button" role="button">Edit</a>
        <form method="post" action="{{ route('currencies-delete', $currency->id) }}" class="form-delete">
            @csrf
            @method('DELETE')
                <button type="submit" title="Delete" class="btn btn-danger delete-button"><i class="fas fa-trash-alt"></i> Delete</button>
        </form>
    </div>
    <img src="{{ $currency->logo_url }}"/><b>{{ $currency->title }}</b>({{ $currency->short_name }})
    <p><b>Цена: </b>{{ $currency->price }} USD</p>
</div>
@endsection
