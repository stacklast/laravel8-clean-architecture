<?php

namespace App\Http\Controllers\Api\v1\Posts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    //
    public function __invoke(Request $request)
    {
        return PostResource::collection(Post::all());
    }
}
