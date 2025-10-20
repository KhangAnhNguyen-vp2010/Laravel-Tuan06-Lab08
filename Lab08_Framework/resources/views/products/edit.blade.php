@extends('layouts.app')
@section('content')
<h2>Chỉnh sửa sản phẩm</h2>
@include('products.form', [
    'action' => route('products.update', $product->id),
    'method' => 'PUT',
    'buttonText' => 'Cập nhật sản phẩm',
    'product' => $product,
    'categories' => $categories
])
@endsection
