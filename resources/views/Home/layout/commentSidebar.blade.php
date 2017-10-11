{{--Last Comment Side Bar--}}
<div class="widget">
    <span>آخرین نظرات</span>
    <div class="widget-body">
        <ul class="category-list">
            @foreach($comments as $comment)
                <li><a href="#" class="textAligen" >{!! mb_substr($comment->comment, 0,35) !!}...</a>{{jdate($comment->created_at)->ago()}}</li>
            @endforeach


        </ul>
    </div>
</div>