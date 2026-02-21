<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Gallery;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'posts' => Post::count(),
            'gallery' => Gallery::count(),
            'users' => User::count(),
        ];

        return view('admin.dashboard.index', compact('stats'));
    }
}
