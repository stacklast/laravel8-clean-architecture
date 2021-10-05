<?php

namespace App\Http\Controllers\Api\v1\Posts;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\v1\PostResource;
use Domain\Blogging\Models\Post;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use JustSteveKing\StatusCode\Http;

class IndexController extends Controller
{
    //
    public function __invoke(Request $request): JsonResponse
    {
        return response()->json(
            data: PostResource::collection(
                Post::wherePublished()->paginate(3)
            ),
            status: Http::OK,
        );
        
    }
}
