<?php

namespace App\Http\Controllers\Api;


use App\Blog;
use App\Http\Controllers\Controller;
use App\Images;


class BlogController extends Controller
{

    public function index()
    {
        return Blog::with('mainImage')->get();
    }
}
