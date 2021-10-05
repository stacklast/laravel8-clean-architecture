<?php

namespace App\Http\Controllers\Api\v1\Posts;

use Illuminate\Http\Request;
use Domain\Blogging\Models\Post;
use Illuminate\Http\JsonResponse;
use JustSteveKing\StatusCode\Http;
use App\Http\Controllers\Controller;
use Spatie\QueryBuilder\QueryBuilder;
use App\Http\Resources\Api\v1\PostResource;

class IndexController extends Controller
{
    //
    public function __invoke(Request $request): JsonResponse
    {
        $posts = QueryBuilder::for(Post::class)
                ->allowedIncludes(['user']) // ?includes=x,y,z
                ->wherePublished()
                ->paginate(3);
                
        return response()->json(
            data: PostResource::collection(
                $posts
            ),
            status: Http::OK,
        );
        
    }
}
