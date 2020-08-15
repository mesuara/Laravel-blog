<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB;

class PagesController extends Controller
{
    //
    public function index(){
        // $title = "welcome to the Blog";
        // // return view('pages.index', compact('title'));

        // return view('pages.index') -> with('title', $title);
        // $posts  = DB::select('SELECT * FROM posts');

        $posts =  Post::orderBy('created_at','desc')->get();

        return view('pages.index')->with('posts', $posts);
        // return view('posts.index');
    }
    public function about(){
        $title = "About us";
        return view('pages.about')-> with('title', $title);
    }
    // public function services(){
    //     $data = array(
    //         'title' => "Services",
    //         'services' => ['Earth', 'Clean']
    //     );
    //     return view('pages.services')->with($data);
    // }


}
