<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Post;
use App\User;


class SearchController extends Controller
{
    public function search(Request $request) {
       $search = $request->get('search');
       $posts=  DB::table('posts')
                ->where('status', '1')
                ->where('title', 'LIKE', '%' .$search. "%")
                ->Where('body', 'LIKE', '%' .$search. "%")
                ->get();

         return view('posts.index')->with('posts', $posts);
    }

    public function filtersearch(Request $request) {

        $search= $request->get('filtersearch');
        // $admin = DB::table('users')
        //         ->where('admin', '1')
        //         ->where('id', $search)
        //         ->get();

        $posts = DB::table('posts')
                ->where('status', '1')
                ->where('user_id', $search)
                ->get();



        return view('posts.index')->with('posts', $posts);
    }
}


