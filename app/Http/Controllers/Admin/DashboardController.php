<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
            'ebooks' => Ebook::count(),
            'videos' => Video::count(),
            'games' => Game::count(),
        ]);
    }
}
