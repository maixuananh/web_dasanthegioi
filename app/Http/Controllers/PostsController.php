<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Psy\Command\WhereamiCommand;

class PostsController extends Controller
{
    public function index()
    {

    $posts = DB::table("posts")
            ->where('id',5)

            ->delete()
            // ->update(
            //     [
            //         'title' => 'EHEHE',
            //         'body'=>'this is hahah body needs'
            //     ]
            // )
    ;
                // ->insert([
                //     'title'=>'EHEHE',
                //     'body'=>'A NEW POST HAHAH'
                // ]) ;
            // ->whereNotNull("body")
            // ->get();

    dd($posts);
    }
}
