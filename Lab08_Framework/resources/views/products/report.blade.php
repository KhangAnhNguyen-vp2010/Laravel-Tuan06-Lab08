@extends('layouts.app')

@section('content')
<h2 class="text-xl font-bold mb-4">Báo cáo nâng cao</h2>

<h3 class="font-semibold mt-4">Sản phẩm giá > 100.000</h3>
@if($expensiveProducts->isEmpty())
    <p>Không có sản phẩm nào</p>
@else
    <ul class="list-disc ml-6">
        @foreach($expensiveProducts as $p)
            <li>{{ $p->name }} - {{ number_format($p->price,0,',','.') }} đ</li>
        @endforeach
    </ul>
@endif

<h3 class="font-semibold mt-4">Số sản phẩm mỗi danh mục</h3>
@if($categories->isEmpty())
    <p>Không có danh mục nào</p>
@else
    <ul class="list-disc ml-6">
        @foreach($categories as $c)
            <li>{{ $c->name }} - {{ $c->products_count }} sản phẩm</li>
        @endforeach
    </ul>
@endif

<h3 class="font-semibold mt-4">Sinh viên và số môn học đã đăng ký</h3>
@if($students->isEmpty())
    <p>Không có sinh viên nào</p>
@else
    <ul class="list-disc ml-6">
        @foreach($students as $s)
            <li>{{ $s->name }} - Đã đăng ký {{ $s->courses_count }} môn học</li>
        @endforeach
    </ul>
@endif

@endsection
