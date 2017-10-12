<div class="widget">
    <span>سبد خرید</span>
    <div class="widget-body">
        <p class="textAlign">{{$widget->description}}</p>
        <form action="{{route($url)}}" method="POST">
            {{csrf_field()}}
            <input type="hidden" name="course_id" value="{{$widget->id}}" />
            <input type="submit" class="btn btn-success" value="خرید دوره" />
        </form>
    </div>
</div>