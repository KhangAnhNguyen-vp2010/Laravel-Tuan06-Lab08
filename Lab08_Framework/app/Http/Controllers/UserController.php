<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        // Lấy toàn bộ user kèm profile (Eager Loading)
        $users = User::with('profile')->paginate(5);

        // Trả dữ liệu cho view
        return view('users.index', compact('users'));
    }
}
