@extends('currency.layout')

@section('title', 'Edit '.$currency->title)

@section('content')

@page_header
    @slot('header') 
        Edit
    @endslot
@endpage_header

<div class="col-sm-12 text-center currency-info">
    @include('currency.parts.currency_form', [
        'action' => route('currencies-update', $currency->id),
        'method' => 'PUT',
    ])
</div>
@endsection