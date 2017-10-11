<!-- Comments Form -->
@if(auth()->check())
    <div class="addcomment">
        <span>ثبت نظر</span>
        @include ('Home.layout.errors')
        <div class="blog-comment-form">
            <form role="form" method="post" action="/fa/comment">
                {{csrf_field()}}
                <input type="hidden" name="parent_id" value="0"/>
                <input type="hidden"  name="commentable_id" value="{{$subject->id}}">
                <input type="hidden"  name="commentable_type" value="{{get_class($subject)}}">
                <textarea class="form-control" rows="3" placeholder="متن پیام" name="comment"></textarea>
                <button class="btn btn-default" type="submit">ارسال نظر</button>
            </form>
        </div>
    </div>
@else
    <div class="alert alert-danger">
        شما برای ارسال نظر باید وارد شوید!
    </div>
@endif
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

