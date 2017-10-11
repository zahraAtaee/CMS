<div class="widget sidebar-tags">
    <span>تگ ها</span>
    <div class="widget-body">
        <?php  $tags=explode(",",$widget->tags); ?>
        @foreach($tags as $value)
        <a href="#">{{$value}}</a><br/>
        @endforeach
    </div>
</div>