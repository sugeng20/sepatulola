<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Content;
use App\Models\Ebook;
use App\Models\Game;
use App\Models\User;
use App\Models\Video;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('pages.backend.admin.dashboard.index', [
            'users' => User::count(),
            'anak' => Content::where('role', 'ANAK')->count(),
            'orangTua' => Content::where('role', 'ORANG TUA')->count(),
            'guru' => Content::where('role', 'GURU')->count(),
        ]);
    }
}
