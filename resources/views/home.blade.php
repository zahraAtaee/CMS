@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
               {{--
                <form id="form">
                    {{csrf_field()}}
                    <input type="text" name="name" id="name">
                    <input type="file" name="pic" id="pic"/>
                    <input type="submit" value="send">
                </form>
                --}}
                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
{{--
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script>
    $(document).ready(function () {
        $('#form').on('submit',function (e) {

            e.preventDefault();

            let name=$('#name').val()

            let pic=$('#pic')[0].files[0];

            let _token=$('input[name="_token"]').val();

            let formData=new FormData();
            formData.append('name',name);
            formData.append('pic',pic);
            console.log(formData);
            $.ajax({
                method:'POST',
                url:'/getData',
                data:formData,
                contentType:false,
                processData:false,
                headers:{
                    'X-CSRF-TOKEN':_token

                }




            }).done(function (res) {
                console.log(res);
            });


        })
    });
</script>--}}
