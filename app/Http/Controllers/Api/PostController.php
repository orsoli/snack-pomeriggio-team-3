<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;

class PostController extends Controller
{
    //
    public function index(){

        $posts = Post::with('category', 'tags')->orderBy('created_at', 'ASC')->paginate(10);

        return response()->json([
            'success' => true,
            'results' => $posts,
        ]);
    }
}