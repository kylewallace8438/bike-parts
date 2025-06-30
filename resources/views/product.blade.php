@extends('layouts.app')
@section('title', 'Home')
@section('meta')
<meta name="robots" content="noindex, follow" />
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
@endsection
@section('content')
    <div class="main-wrapper" id="product-app">
        <product-detail-component :product="{{ json_encode($product) }}"></product-detail-component>
    </div>
@endsection
@section('scripts')
<script src="{{ asset('app/app.js') }}"></script>
@endsection
