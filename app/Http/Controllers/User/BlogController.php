<?php

namespace App\Http\Controllers\User;

use App\Model\User\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\User\Blog;

class BlogController extends Controller
{
    //

    public function index()
    {
        //
        $head = 'Blog';

        $icon = 'fa-book';

        $blogs = Blog::whereStatus(1)->latest()->paginate(2);

        $blogAll = Blog::latest()->take(3)->get();

        $tags = Tag::all();

        return view('blog.index', compact('blogs', 'head','icon', 'blogAll','tags'));
    }


    public function show(Blog $blog)
    {

        $poster = $blog->tags();

        $blogAll = Blog::latest()->take(3)->get();

        $tags = Tag::all();


        return view('blog.show', compact('blog', 'tags','poster', 'blogAll'));
    }

    public function tag(Tag $tag){

        $head = 'Tag - ' .  $tag->name;

        $icon = 'fa-tag';

        $blogs = $tag->blogs();

        $blogAll = Blog::latest()->take(3)->get();

        $tags = Tag::all();

        return view('blog.index', compact('blogs','tags', 'tag','head','icon', 'blogAll'));


    }
}
