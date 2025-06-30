@extends('layouts.app')
@section('title', 'Home')
@section('meta')
<meta name="robots" content="noindex, follow" />
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
@endsection
@section('content')
    <div class="main-wrapper" id="product-list-app">
        <product-list-component></product-list-component>
    </div>
@endsection
@section('scripts')
<script src="{{ asset('app/app.js') }}"></script>
@endsection
