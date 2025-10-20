@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh sách User và Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f8fafc;
            padding: 20px;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background: #fff;
            box-shadow: 0 0 5px rgba(0,0,0,0.1);
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background: #2563eb;
            color: white;
        }
        tr:hover {
            background-color: #f1f5f9;
        }

        /* Style cho phân trang */
        .pagination {
            display: flex;
            justify-content: center;
            list-style: none;
            padding: 10px 0;
        }
        .pagination li {
            margin: 0 5px;
        }
        .pagination a, .pagination span {
            padding: 8px 12px;
            background: #fff;
            color: #2563eb;
            border: 1px solid #2563eb;
            border-radius: 4px;
            text-decoration: none;
        }
        .pagination .active span {
            background: #2563eb;
            color: #fff;
        }
        .pagination a:hover {
            background: #2563eb;
            color: white;
        }
    </style>
</head>
<body>

    <h2>Danh sách User và Profile</h2>

    <table>
        <thead>
            <tr>
                <th>User ID</th>
                <th>Tên</th>
                <th>Email</th>
                <th>Địa chỉ</th>
                <th>Số điện thoại</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->profile->address ?? 'Chưa có' }}</td>
                    <td>{{ $user->profile->phone ?? 'Chưa có' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{-- Hiển thị phân trang --}}
    <div style="margin-top: 20px;">
        {{ $users->links() }}
    </div>

</body>
</html>
@endsection