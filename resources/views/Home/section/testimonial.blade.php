<section id="testimonial" class="testimonial">
    <div class="container">
        <div class="row">
            <div class="title">
                <h2>آخرین آموزش ها</h2>
                <p>آخرین ویدئو های آموزشی تخصصی در این قسمت قرار می گیرد.<br> </p>
            </div>

            @foreach($courses  as $index=>$course)
            <div class="col col-md-6">
                <div class="media wow {{$orintation[$index]}}" data-wow-delay=".3s">
                    <div class="media-left">
                        <a href="#">
                            <img class="videoPic img-circle"  src="{{$course->images['thumb']}}"  alt=""  >
                        </a>
                    </div>
                    <div class="media-body">
                        <a href="{{$course->path()}}"><h4 class="media-heading">{{$course->title}}</h4></a>
                        <p> {{str_limit($course->description,219)}}</p>
                        <p><i class="fa fa-eye" aria-hidden="true"></i> {{Redis::get("views.{$course->id}.courses")}}/ {{$course->viewCount}}</p>
                    </div>
                </div>
            </div>
            @endforeach
    </div>
</section>