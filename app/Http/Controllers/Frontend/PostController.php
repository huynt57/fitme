<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Vinkla\Instagram\Facades\Instagram;

class PostController extends Controller
{
    //
    public function getAllPosts()
    {
        $insta = Instagram::users()->getMedia();
        dd( $insta);
    }

}
