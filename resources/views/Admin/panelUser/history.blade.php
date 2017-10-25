<div class="alert alert-info">
   {{$title}}
</div>
{{ $slot }}
<div class="portlet-body">
    <table class="table table-striped table-bordered table-advance table-hover">
        <thead>
        <tr>
            <th>
                 ردیف
            </th>
            <th>
                <i class="fa fa-briefcase"></i> نام محصول
            </th>
            <th>
                <i class="fa fa-question"></i>وضعیت پرداخت ها
            </th>
            <th>
                <i class="fa fa-address-card"></i>قیمت
            </th>
            {{--<th class="hidden-xs">
                <i class="fa fa-question"></i> توضیحات

            </th>--}}
        </tr>
        </thead>
        <tbody>
        @foreach($payments as $index=>$payment)
        <tr>
            <td>
               {{$index=$index+1}}
            </td>
            <td>
                {{$payment->course->title}}
            </td>
            <td>
                <a href="javascript:;">
                    {{ $payment->payment ==0 ?  'ناموفق' : 'موفق' }}
                </a>
            </td>
            <td class="hidden-xs">  </td>
            <td> {{$payment->price}}
                <span class="label label-success label-sm"> تومان </span>
            </td>

            {{--<td>
                {{$payment->course->description}}
                <a class="btn btn-sm grey-salsa btn-outline" href="javascript:;"> View </a>
            </td>--}}
        </tr>
        @endforeach
        </tbody>
    </table>
</div>