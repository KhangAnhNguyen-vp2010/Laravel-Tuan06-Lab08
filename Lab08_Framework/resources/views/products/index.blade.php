@extends('layouts.app')
@section('content')
<h2>Danh sách sản phẩm</h2>
<a href="{{ route('products.create') }}" class="bg-green-500 text-white px-4 py-2 rounded">Thêm mới</a>

@if(session('success'))
    <p class="text-green-500">{{ session('success') }}</p>
@endif

<table class="mt-3 border-collapse border w-full">
    <thead>
        <tr>
            <th class="border px-2">ID</th>
            <th class="border px-2">Tên</th>
            <th class="border px-2">Giá</th>
            <th class="border px-2">Tồn kho</th>
            <th class="border px-2">Danh mục</th>
            <th class="border px-2">Hành động</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $p)
        <tr>
            <td class="border px-2">{{ $p->id }}</td>
            <td class="border px-2">{{ $p->name }}</td>
            <td class="border px-2">{{ number_format($p->price,0,',','.') }} đ</td>
            <td class="border px-2">{{ $p->stock }}</td>
            <td class="border px-2">{{ $p->category->name ?? 'Chưa có' }}</td>
            <td class="border px-2">
                <a href="{{ route('products.edit', $p->id) }}" class="bg-blue-500 text-white px-2 py-1 rounded">Sửa</a>
                <form action="{{ route('products.destroy', $p->id) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded" onclick="return confirm('Xác nhận xóa?')">Xóa</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="mt-2">
    {{ $products->links() }}
</div>
@endsection
