<!-- Posted Comments -->
<br/><br/>
<div class="blog-comment-main" >
    @foreach($comments as $comment)
        <div class="blog-comment">
            <a class="comment-img" href="#" >
                <img class="img-responsive" src="{{$comment->user->images['thumb']}}" alt="">
            </a>
            <div class="comment-text">
                <a class="title" href="#">{{$comment->user->name}}</a>
                <span>{{jdate($comment->created_at)->ago()}}</span>
                <p> {!! $comment->comment !!}</p>
                <button class="pull-left btn btn-xs btn-success" data-toggle="modal" data-target="#sendCommentModal" data-parent="{{$comment->id}}">پاسخ</button>
            </div>
        </div>
        @if(count($comment->comments))
            @foreach($comment->comments as $child)
                <div class="sub-blog-comment">
                    <a class="comment-img" href="#">
                        <img class="img-responsive" src="{{$child->user->images['thumb']}}" alt="">
                    </a>
                    <div class="comment-text">
                        <a class="title" href="#">{{$child->user->name}}</a>
                        <span>{{jdate($child->created_at)->ago()}}</span>
                        <p>{!! $child->comment !!}</p>
                    </div>
                </div>
            @endforeach
        @endif
    @endforeach
</div>