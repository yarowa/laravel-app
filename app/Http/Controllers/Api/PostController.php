<?php

namespace App\Http\Controllers\Api;

use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\PostResource;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    protected $limit = 5;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::with('user')
            ->latestFirst()
            ->published()
            ->simplePaginate($this->limit);
        return PostResource::collection($posts);
    }

    public function category(Category $category) {
        $posts = $category->posts()
            ->with('user')
            ->latestFirst()
            ->published()
            ->simplePaginate($this->limit);
        return CategoryResource::collection($posts);
    }

    public function author(User $author)
    {
        $authorName = $author->name;

        $posts = $author->posts()
            ->with('category')
            ->latestFirst()
            ->published()
            ->simplePaginate($this->limit);

        return PostResource::collection($posts);
    }
}
