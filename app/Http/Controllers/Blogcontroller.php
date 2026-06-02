<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
;

class Blogcontroller extends Controller
{
        private $blogs = [
            [
                'id' => 1,
                'title' => 'Basics laravel',
                'content' => 'larvel is a framework'
            ],
            [
                'id' => 2 ,
                'title' => 'basics middleware' ,
                'content' => 'middleware is a differnce between response and request'
            ],
            [
                'id' => 3 ,
                'title' => 'basics eloquent' ,
                'content' => 'eloquent is a orm'
            ]
        ];

        public function index (){
            return view('blog.index' , ['blogs' => $this->blogs]);
        }
        public function show($id){
            $posts = null;
            foreach($this ->blogs as $p){
                if($p['id'] == $id){
                    $posts = $p;
                    break;
                }
            }
            return view('blog.show' , compact('posts'));
        }
}
