
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
                            <img class="videoPic"  src="{{$course->images['thumb']}}"  alt=""  >
                        </a>
                    </div>
                    <div class="media-body">
                        <a href="{{$course->path()}}"><h4 class="media-heading">{{$course->title}}</h4></a>
                        <p> {{str_limit($course->description,219)}}</p>
                        {{--<p><i class="fa fa-eye" aria-hidden="true"></i> {{Redis::get("views.{$course->id}.courses")}}/ {{$course->viewCount}}</p>--}}
                    </div>
                </div>
            </div>
            @endforeach
            {{--<div class="col col-md-6">
                <div class="media wow fadeInLeft" data-wow-delay=".3s">
                    <div class="media-left">
                        <a href="#">
                            <img src="/viewSite/img/service-img.png" alt="">
                        </a>
                    </div>
                    <div class="media-body">
                        <a href="#"><h4 class="media-heading">Jonathon Andrew</h4></a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commo</p>
                    </div>
                </div>
            </div>
            <div class="col col-md-6">
                <div class="media wow fadeInRight" data-wow-delay=".3s">
                    <div class="media-left">
                        <a href="#">
                            <img src="/viewSite/img/service-img.png" alt="">
                        </a>
                    </div>
                    <div class="media-body">
                        <a href="#"><h4 class="media-heading">Jonathon Andrew</h4></a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commo</p>
                    </div>
                </div>
            </div>--}}
        </div>
    </div>
</section>