<div class="column column-1-4 re-smart-column">
    <div class="re-smart-column-wrapper">
        <div class="call-to-action">
            <div class="hexagon small"><div class="sl-small-percent"></div></div>
            <h4 class="margin-top-58">ONLINE APPOINTMENT</h4>
            <p class="description">Book your appointment now and get 5% discount.</p>
            <a class="more" href="{{route('appointment')}}" title="MAKE APPOINTMENT"><span>BOOK APPOINTMENT</span></a>
        </div>
        <h6 class="box-header page-margin-top">LATEST POSTS</h6>
        <ul class="blog small margin-top-30 clearfix">
            @foreach($blogAll as $blog)
            <li>
                <a href="{{route('post', $blog->slug)}}" title="{{$blog->title}}" class="post-image">
                    <img src="/blogImages/{{$blog->photo->path}}" alt="">
                </a>
                <div class="post-content">
                    <a href="{{route('post', $blog->slug)}}" title="How to Book an Appointment">{{$blog->title}}</a>
                    <ul class="post-details">
                        <li class="date">{{$blog->created_at->toFormattedDateString()}}</li>
                    </ul>
                </div>
            </li>
            @endforeach
        </ul>
        <h6 class="box-header page-margin-top">ARCHIVES</h6>
        <ul class="taxonomies full-width margin-top-30 clearfix">
            <li><a href="#" title="April 2015">APRIL 2018<span>2</span></a></li>
            <li><a href="#" title="March 2015">MARCH 2017<span>5</span></a></li>
        </ul>
        @if($tags)
        <h6 class="box-header page-margin-top">TAGS</h6>
        <ul class="taxonomies margin-top-30 clearfix">
            @foreach($tags as $tag)
                <li>
                    <a href="{{route('tag', $tag)}}" title="{{$tag->name}}">
                        {{$tag->name}}
                    </a>
                </li>
            @endforeach

        </ul>
        @else

            <h6>No tags</h6>

        @endif
    </div>
</div>
