<!-- Comments Form -->
@if(auth()->check())
    <div class="addcomment">
        <span>ثبت نظر</span>
        @include ('Home.layout.errors')
        <div class="blog-comment-form">
            <form role="form" method="post" action="/comment">
                {{csrf_field()}}
                <input type="hidden" name="parent_id" value="0"/>
                <input type="hidden"  name="commentable_id" value="{{$subject->id}}">
                <input type="hidden"  name="commentable_type" value="{{get_class($subject)}}">
                <textarea class="form-control" rows="3" placeholder="متن پیام"></textarea>
                <button class="btn btn-default" type="submit">ارسال نظر</button>
            </form>
        </div>
    </div>
@else
    <div class="alert alert-danger">
        شما برای ارسال نظر باید وارد شوید!
    </div>
@endif
<!-- Posted Comments -->
<br/><br/>
<div class="blog-comment-main">
    @foreach($comments as $comment)
    <div class="blog-comment">
        <a class="comment-img" href="#" >
            <img class="img-responsive" src="/viewSite/img/blog-details-img5.jpg" alt="">
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
                        <img class="img-responsive" src="/viewSite/img/blog-details-img6.jpg" alt="">
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

{{--Mode Send Comments--}}
<div class="modal fade" id="sendCommentModal" tabindex="-1" role="dialog" aria-labelledby="sendCommentModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">ارسال پاسخ</h4>
            </div>
            <div class="modal-body">
                <form action="/fa/comment" method="post">
                    {{csrf_field()}}
                    <input type="hidden" name="parent_id" value="0">
                    <input type="hidden" name="commentable_id" value="{{$subject->id}}">
                    <input type="hidden" name="commentable_type" value="{{get_class($subject)}}">
                    <div class="form-group">
                        <label for="message-text" class="control-label">متن پاسخ:</label>
                        <textarea class="form-control" id="message-text" name="comment"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">ارسال</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">انصراف</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

