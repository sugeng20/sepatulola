<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Content;
use App\Models\Log;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $categories = Category::where('role', 'GURU')->get();
        $color_ = '#557ef8';
        return view('pages.backend.guru.dashboard.index', [
            'categories' => $categories,
            'color_' => $color_,
        ]);
    }

    public function category($category)
    {
        return view('pages.backend.guru.dashboard.category', [
            'contents' => Content::where('category_id', $category)->with('category')->get(),
            'category' => $category,
        ]);
    }

    public function content($category, $id)
    {
        Log::create([
            'id_user' => Auth::user()->id,
            'id_content' => $id,
        ]);

        return view('pages.backend.guru.dashboard.show', [
            'content' => Content::with('category')->findOrFail($id),
            'category' => $category,
            'id' => $id,
        ]);
    }
}
