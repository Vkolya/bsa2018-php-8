@extends('currency.layout')

@section('title', 'Create currency')

@section('content')

@page_header
    @slot('header') 
        Add a new currency 
    @endslot
@endpage_header
<div class="col-sm-12 text-center currency-info">
@include('currency.parts.currency_form', [
    'action' => route('currencies-store'),
])
</div>
@endsection