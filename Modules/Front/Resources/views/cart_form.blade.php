<!doctype html>
<html dir="rtl">

<head>
    <title>الدفع</title>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />


    <style>
        body {
            padding-top: 60px;
        }
    </style>

    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet" />

    <link href="{{asset('assets/css/login-register.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

    <script src="{{asset('assets/js/jquery-1.10.2.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/js/bootstrap.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/js/login-register.js')}}" type="text/javascript"></script>

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 d-flex p-2">
                <div class="box">
                <img class="cart_img" src="{{asset('./front/img/juice.jpg')}}">
                    <div class="content registerBox">
                        <div class="form" style="width: 265px;height: 120px;padding-top: 120px;">
                            <form method="post" html="{:multipart=>true}" data-remote="true" action="{{route('add_cart')}}" accept-charset="UTF-8">
                                {{ csrf_field() }}
                                <input required id="cat_id" class="form-control" type="hidden" name="cat_id" value="{{$cat_id}}" readonly>
                                <br>
                                <input required id="section" class="form-control" type="text" name="section" value="{{$section}}" readonly>
                                <br>
                                <input required id="name" class="form-control" type="text"  name="name" value="{{$name}}" readonly>
                                <br>
                                <select name="type_price" class="form-control" style="font-size: 15px; font-weight: bold;">
                                @if($sm =='0' and $leter =='0' and $leterhalf =='0' and $leterhalf =='0' )
                                    <option value="[{{$md}},'وســط']"> وســط  {{$md}} ريال </option>
                                    <option value="[{{$lg}},'كبيــر']"> كبيــر  {{$lg}} ريال </option>

                                @else
                                <option value="[{{$sm}},'صغيــر']"> صغيــر  {{$sm}} ريال </option>
                                    <option value="[{{$md}},'وســط']"> وســط  {{$md}} ريال </option>
                                    <option value="[{{$lg}},'كبيــر']"> كبيــر  {{$lg}} ريال </option>
                                    <option value="[{{$leter}},'لتـــر']"> لتـــر  {{$leter}} ريال </option>
                                    <option value="[{{$leterhalf}},'لترونصف']"> لترونصف  {{$leterhalf}} ريال </option>
                                    <option value="[{{$fiveleter}},'خمسة لتر']"> خمسة لتر  {{$fiveleter}} ريال </option>
                                @endif
                                </select>
                                <br>
                                <input required id="quantity" class="form-control" placeholder="ادخل الكمية" type="number"  name="quantity">
                                <br>
                                <select name="sector" class="form-control" style="font-size: 15px; font-weight: bold;">
                                   @foreach($loc as $row)
                                      <option value="{{$row->sector}}" >{{$row->sector}}</option>
                                   @endforeach
                                </select>
                                <br>
                                <select name="track" class="form-control" style="font-size: 15px; font-weight: bold;">
                                   @foreach($loc as $row)
                                   <option value="{{$row->track}}" >{{$row->track}}</option>
                                   @endforeach
                                </select>
                            <br>
                                <input class="btn btn-default btn-register" type="submit" value="تسوق الان" name="commit">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>