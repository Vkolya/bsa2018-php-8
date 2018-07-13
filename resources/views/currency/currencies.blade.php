@extends('currency.layout')

@section('title', 'Currency market')

@section('content')

@page_header
    @slot('header') 
        Currency market 
    @endslot
@endpage_header

@if($currencies->count() > 0)
    <ul class="list-group text-center">
        @each('currency.currency_list', $currencies, 'currency')
   </ul>
@else
    <h3 class="text-center">No currencies</h3>
@endif

@endsection