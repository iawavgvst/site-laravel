<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\UpdateRequst;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequst $request, Post $post)
    {
        $data = $request->validated();

        $this->service->update($post, $data);

        return redirect()->route('post.show', $post->id);
    }
}
