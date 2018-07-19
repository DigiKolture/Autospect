@extends('layouts.base')

@section('content')

    <div class="theme-page padding-bottom-66">
        <div class="row gray full-width page-header vertical-align-table">
            <div class="row full-width padding-top-bottom-50 vertical-align-cell">
                <div class="row">
                    <div class="page-header-left">
                        <h1>BLOG</h1>
                    </div>
                    <div class="page-header-right">
                        <div class="bread-crumb-container">
                            <label>YOU ARE HERE:</label>
                            <ul class="bread-crumb">
                                <li>
                                    <a title="HOME" href="{{route('welcome')}}">
                                        HOME
                                    </a>
                                </li>
                                <li class="separator">
                                    &#47;
                                </li>
                                <li>
                                   <span class="fa {{$icon}}"></span> {{$head}}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix">
            <div class="row margin-top-70">
                <div class="column column-3-4">
                    <ul class="blog clearfix">

                        @foreach($blogs as $blog)
                        <li>
                            <a href="{{route('post', $blog->slug)}}" title="Time To Change Your Tires" class="post-image">
                                <img src="/blogImages/{{$blog->photo->path}}" alt="">
                            </a>
                            <div class="post-content-details-container clearfix">
                                <ul class="post-content-details">
                                    <li>{{$blog->created_at->toFormattedDateString()}}</li>
                                    <li>By <a href="#" title="Temi Oladapo">{{$blog->admin->name}}</a></li>
                                    <li>In
                                    @foreach($blog->tags as $tag)
                                            <a title="{{$tag->name}}" href="{{route('tag', $tag)}}">{{$tag->name}}</a>,
                                    @endforeach
                                    </li>
                                </ul>
                                <ul class="post-content-details right">
                                    <li class="template-bubble"><a href="{{route('post', $blog->slug)}}#comments-list" title="comments">5</a></li>
                                    <li class="template-eye">225</li>
                                </ul>
                            </div>
                            <h3 class="box-header"><a href="{{route('post', $blog->slug)}}">{{$blog->title}}</a></h3>
                            <p>{{$blog->subtitle}}</p>
                            <div class="row margin-top-40 padding-bottom-20">
                                <a class="more" href="{{route('post', $blog->slug)}}" title="READ MORE"><span>READ MORE</span></a>
                            </div>
                        </li>
                            {{--<li>No Blog</li>--}}

                        @endforeach
                    </ul>

                    <ul class="pagination page-margin-top">
                        <li class="next">
                                {{$blogs->links()}}
                        </li>

                    </ul>
                </div>
                @include('includes.sidebar')
            </div>
        </div>
    </div>

@endsection