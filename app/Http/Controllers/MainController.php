<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function __invoke()
    {
        return view('index');
    }

    public function create()
    {
        $postArr = [
            [
                'title' => 'I believe every human has a finite number of heartbeats. I do not intend to waste any of mine.',
                'description' => '',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut consequuntur magnam, excepturi aliquid ex itaque esse est vero natus quae optio aperiam soluta voluptatibus corporis atque iste neque sit tempora!',
                'image' => '',
                'posted_on' => 'Posted on August 13, 2024',
                'is_published' => 1,
            ],
            [
                'title' => 'Science has not yet mastered prophecy.',
                'description' => 'We predict too much for the next year and yet far too little for the next ten.',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut consequuntur magnam, excepturi aliquid ex itaque esse est vero natus quae optio aperiam soluta voluptatibus corporis atque iste neque sit tempora!',
                'image' => '',
                'posted_on' => 'Posted on July 3, 2024',
                'is_published' => 1,
            ],
    ];

        foreach ($postArr as $item) {
            Post::create($item);
        }
        dd('created');
    }
    public function delete()
    {
    $post = Post::find(2);
    $post->delete();
    dd('deleted');
    }
}
