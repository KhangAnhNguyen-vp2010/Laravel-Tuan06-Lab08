@extends('layouts.app')
@section('content')
<h2>Tạo sản phẩm mới</h2>
@include('products.form', [
    'action' => route('products.store'),
    'method' => 'POST',
    'buttonText' => 'Tạo sản phẩm',
    'categories' => $categories
])
@endsection
