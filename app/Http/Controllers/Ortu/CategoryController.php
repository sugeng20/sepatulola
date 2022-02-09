<?php

namespace App\Http\Controllers\Ortu;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
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
        return view('pages.backend.orang-tua.category.index', [
            'categories' => $categories,
            'color_' => $color_,
            'slug_' => $slug
        ]);
    }
}
