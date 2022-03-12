<?php

namespace App\Http\Controllers\Ortu;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Content;
use App\Models\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContentController extends Controller
{
    public function index($slug)
    {
        if($slug == 'anak') {
            $categories = Category::where('role', 'ANAK')->get();
            $color_ = '#FA4EAB';
        } else {
            $categories = Category::where('role', 'ORANG TUA')->get();
            $color_ = '#557ef8';
        }
        return view('pages.backend.orang-tua.content.index', [
            'categories' => $categories,
            'color_' => $color_,
            'slug' => $slug
        ]);
    }

    public function category($slug, $category)
    {
        return view('pages.backend.orang-tua.content.category', [
            'contents' => Content::where('category_id', $category)->with('category')->get(),
            'slug' => $slug,
            'category' => $category,
        ]);
    }

    public function content($slug, $category, $id)
    {
        Log::create([
            'id_user' => Auth::user()->id,
            'id_content' => $id,
        ]);
        
        return view('pages.backend.orang-tua.content.show', [
            'content' => Content::with('category')->findOrFail($id),
            'slug' => $slug,
            'category' => $category,
            'id' => $id,
        ]);
    }
}
