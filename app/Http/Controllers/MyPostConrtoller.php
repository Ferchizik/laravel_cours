<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class MyPostConrtoller extends Controller
{
    public function index()
    {
        $posts = Post::where('id', 2)->first();
//        dump($post);
        foreach ($posts as $post) {
            dump($post);
        }
        dd('end');
    }

    public function getAll()
    {
        $posts = Post::all();
        foreach ($posts as $post){
            dump($post);
        }
        dd('end');
    }

    public function create()
    {
        $postsArr = [
        [
          'title' => 'title of post from phpstorm',
          'content' => 'some interesting content',
          'image' => 'imageblabla.jpg',
          'likes' => 20,
          'is_publish' => 1,
        ],
        [
          'title' => 'title of post from phpstorm',
          'content' => 'some interesting content',
          'image' => 'imageblabla.jpg',
          'likes' => 20,
          'is_publish' => 1,
        ],
    ];
        foreach ($postsArr as $item){
            Post::create($item);
            dump($item);
        }
        dd('created');

    }

    public function update()
    {
        $post = Post::find(6);
//        dd($post->title);
        $post->update([
            'title' => 'updated',
            'content' => 'updated',
            'image' => 'updated',
            'likes' => 1000,
            'is_publish' => 0,
        ]);
        dd('update');
    }
    public function delete()
    {
        $post = Post::find(2);
        $post->delete();
        dd('deleted');
//        $post = Post::withTrashed()->find(2);
//        $post->restore();
//        dd('restored');
    }

    // firstOrCreate
    // updateOrCreate

    public function firstOrCreate()
    {
//        $post = Post::find(1);

        $anotherPost = [
            'title' => 'some post',
            'content' => 'some content',
            'image' => 'some image.jpg',
            'likes' => 500000,
            'is_publish' => 1,
        ];

        $post = Post::firstOrCreate([
            'title' => 'some title phpstorm'],
            [
            'title' => 'some title phpstorm',
            'content' => 'some content',
            'image' => 'some image.jpg',
            'likes' => 500000,
            'is_publish' => 1,
        ]);
        dump($post->content);
        return $post->contnt;
//        dd('finish');
    }
    public function updateOrCreate()
    {
        $anotherPost = [
            'title' => 'update some post',
            'content' => 'update some content',
            'image' => 'update some image.jpg',
            'likes' => 500,
            'is_publish' => 1,
        ];

        $post = Post::updateOrCreate([
            'title' => 'some post not phpstorm'
        ],[
            'title' => 'some post not phpstorm',
            'content' => 'some post not phpstorm',
            'image' => 'updateorcreate some image.jpg',
            'likes' => 500,
            'is_publish' => 0,
        ]);
        dump($post->content);
        dd('updateOrCreate');
    }
}
