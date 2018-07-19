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
                                    <a title="BLOG" href="{{route('blog')}}">
                                        BLOG
                                    </a>
                                </li>
                                <li class="separator">
                                    &#47;
                                </li>
                                <li>
                                    {{$blog->title}}
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
                    <div class="blog clearfix">
                        <div class="post single">
                            {{--<a href="post.html" title="Time To Change Your Winter Tires" class="post-image">--}}
                                <img src="/blogImages/{{$blog->photo->path}}" alt="">
                            {{--</a>--}}
                            <div class="post-content-details-container clearfix">
                                <ul class="post-content-details">
                                    <li>{{$blog->created_at->toFormattedDateString()}}</li>
                                    <li>By <a href="#" title="Kevin Smith">{{$blog->admin->name}}</a></li>
                                    <li>In
                                        @foreach($blog->tags as $tag)
                                            <a title="{{$tag->name}}" href="{{route('tag', $tag)}}">{{$tag->name}}</a>,
                                        @endforeach
                                    </li>
                                </ul>
                                <ul class="post-content-details right">
                                    <li class="template-bubble"><a class="scroll-to-comments" href="post.html#comments-list" title="5 comments">5</a></li>
                                    <li class="template-eye">2 325</li>
                                </ul>
                            </div>
                            <h3 class="box-header"><a href="post.html">{{$blog->title}}</a></h3>
                            {!! htmlspecialchars_decode($blog->body) !!}
                        </div>
                    </div>
                    <div class="row page-margin-top">
                        <h4 class="box-header">LEAVE A COMMENT</h4>
                        <form class="comment-form margin-top-40" id="comment-form" method="post" action="#">
                            <div class="row">
                                <fieldset class="column column-1-2">
                                    <input class="text-input" name="name" type="text" value="Your Name *" placeholder="Your Name *">
                                    <input class="text-input" name="email" type="text" value="Your Email *" placeholder="Your Email *">
                                    <input class="text-input" name="website" type="text" value="Your Website" placeholder="Your Website">
                                </fieldset>
                                <fieldset class="column column-1-2">
                                    <textarea name="message" placeholder="Type your comment here *"></textarea>
                                </fieldset>
                            </div>
                            <div class="row margin-top-30">
                                <div class="column column-1-2">
                                    <p>You comment will be published within 24 hours.</p>
                                </div>
                                <div class="column column-1-2 align-right">
                                    <div class="row margin-top-20 padding-bottom-20">
                                        <a href="#cancel" id="cancel-comment" title="Cancel reply">Cancel reply</a>
                                        <a class="more submit-comment-form" href="#" title="POST COMMENT"><span>POST COMMENT</span></a>
                                    </div>
                                    <!--<input type="submit" value="POST COMMENT" class="more active">-->
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="row page-margin-top">
                        <h3 class="box-header">5 COMMENTS</h3>
                        <ul id="comments-list">
                            <li class="comment clearfix" id="comment-1">
                                <div class="comment-author-avatar avatar-3">
                                    &nbsp;
                                </div>
                                <div class="comment-details">
                                    <div class="posted-by clearfix">
                                        <h6>AYOOLA JOHNSON</h6>
                                        <abbr title="March 05, 2015">March 05, 2018</abbr>
                                        <a class="more simple small" href="#comment-form" title="Reply">REPLY</a>
                                    </div>
                                    <p>
                                        Paetos dignissim at cursus elefeind norma arcu. Pellentesque accumsan est in tempus etos ullamcorper, sem quam suscipit lacus maecenas tortor. Erates vitae node metus. Morbi suspendisse a tortor velim pellentesque uter justo magna gravida. Pellentesque accumsan, ex in tempus ullamcorper terminal.
                                    </p>
                                </div>
                                <ul class="children">
                                    <li class="comment clearfix">
                                        <div class="comment-author-avatar avatar-1">
                                            &nbsp;
                                        </div>
                                        <div class="comment-details">
                                            <div class="posted-by clearfix">
                                                <h6>FUNMI ALABI<a href="#comment-1" class="in-reply">&nbsp;@AYOOLA JOHNSON</a></h6>
                                                <abbr title="March 06, 2015">March 06, 2018</abbr>
                                                <a class="more simple small" href="#comment-form" title="Reply">REPLY</a>
                                            </div>
                                            <p>
                                                Paetos dignissim at cursus elefeind norma arcu. Pellentesque accumsan est in tempus node etos ullamcorper, sem quam suscipit lacus maecenas tortor. Erates vitae node suspendisse est velim pellentesque uter justo magna gravida.
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="comment clearfix" id="comment-2">
                                <div class="comment-author-avatar avatar-2">
                                    &nbsp;
                                </div>
                                <div class="comment-details">
                                    <div class="posted-by clearfix">
                                        <h6>SUNDAY AGU</h6>
                                        <abbr title="March 05, 2015">March 03, 2018</abbr>
                                        <a class="more simple small" href="#comment-form" title="Reply">REPLY</a>
                                    </div>
                                    <p>
                                        Paetos dignissim at cursus elefeind norma arcu. Pellentesque accumsan est in tempus etos ullamcorper, sem quam suscipit lacus maecenas tortor. Erates vitae node metus. Morbi suspendisse a tortor velim pellentesque uter justo magna gravida. Pellentesque accumsan, ex in tempus ullamcorper terminal.
                                    </p>
                                </div>
                            </li>
                            <li class="comment clearfix">
                                <div class="comment-author-avatar avatar-4">
                                    &nbsp;
                                </div>
                                <div class="comment-details">
                                    <div class="posted-by clearfix">
                                        <h6>CHUKS ABIODUN</h6>
                                        <abbr title="March 05, 2015">March 03, 2018</abbr>
                                        <a class="more simple small" href="#comment-form" title="Reply">REPLY</a>
                                    </div>
                                    <p>
                                        Paetos dignissim at cursus elefeind norma arcu. Pellentesque accumsan est in tempus etos ullamcorper, sem quam suscipit lacus maecenas tortor. Erates vitae node metus. Morbi suspendisse a tortor velim pellentesque uter justo magna gravida. Pellentesque accumsan, ex in tempus ullamcorper terminal.
                                    </p>
                                </div>
                                <ul class="children">
                                    <li class="comment clearfix">
                                        <div class="comment-author-avatar avatar-6">
                                            &nbsp;
                                        </div>
                                        <div class="comment-details">
                                            <div class="posted-by clearfix">
                                                <h6>KEVIN LAWAL<a href="#comment-2" class="in-reply">&nbsp;@CHUKS ABIODUN</a></h6>
                                                <abbr title="March 05, 2015">March 03, 2018</abbr>
                                                <a class="more simple small" href="#comment-form" title="Reply">REPLY</a>
                                            </div>
                                            <p>
                                                Paetos dignissim at cursus elefeind norma arcu. Pellentesque accumsan est in tempus node etos ullamcorper, sem quam suscipit lacus maecenas tortor. Erates vitae node suspendisse est velim pellentesque uter justo magna gravida.
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="pagination page-margin-top">
                            <li class="left">
                                <a href="#" title="" class="template-arrow-left-1">&nbsp;</a>
                            </li>
                            <li class="selected">
                                <a href="#" title="">
                                    1
                                </a>
                            </li>
                            <li>
                                <a href="#" title="">
                                    2
                                </a>
                            </li>
                            <li>
                                <a href="#" title="">
                                    3
                                </a>
                            </li>
                            <li class="right">
                                <a href="#" title="" class="template-arrow-left-1">&nbsp;</a>
                            </li>
                        </ul>
                    </div>
                </div>
                @include('includes.sidebar')
            </div>
        </div>
    </div>

@endsection