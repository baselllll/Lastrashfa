<?php

use Carbon\Carbon;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title> الصفحة الشخصية</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/logo2.png">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Amiri|Aref+Ruqaa|Changa|Katibeh|Lalezar|Reem+Kufi|Tajawal&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <!-- Bootstrap CSS -->
    <script src="{{asset('js/bootstrap-4.js')}}"></script>
    <script src="{{asset('js/bootstrap.min-4.js')}}"></script>


    <link rel="stylesheet" href="{{asset('css/bootstrap-grid.min-4.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min-4.css')}}">

    <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('css/hover.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/style_mesd.css')}}">
    <link rel="stylesheet" href="{{asset('css/profile_user.css')}}">
    <link rel="stylesheet" href="{{asset('css/forms.css')}}">
</head>

<body>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <div class="container">
                <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i> الصفحـة الرئيسيـة</a></li>
                <li class="breadcrumb-item"><a href="#">حسـاب</a></li>
                <li class="breadcrumb-item active" aria-current="page">نجـاح</li>
            </div>
        </ol>
    </nav>
    <!-- ========================================================================== -->
    <section class="profile" id="profile">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    @if(Session::get('name')!=='admin')
                    <div class="to42">
                        <button class="btn btn-default btn-block s_out" type="button"><a href="{{route('homepage')}}">الصفحة الرئيسية <i class="fa fa-sign-out-alt"></i></a>
                        </button>
                    </div>
                    <div class="togl">
                        <button class="tablinks btn btn-default btn-block btn_st" type="button" onclick="openCity(event, 'tog1')">
                            حسـابي
                        </button>

                    </div>
                    <div class="tog2">
                        <button type="button" class="tablinks btn btn-default btn-block btn_st" type="button" onclick="openCity(event, 'tog2')">
                            تحـرير حسـاب
                        </button>
                    </div>

                    <div class="tog3">
                        <button class="tablinks btn btn-default btn-block btn_st" type="button" onclick="openCity(event, 'tog3')" id="defaultOpen">
                            طلبـاتي
                        </button>
                    </div>

                    <div class="tog3">
                        <button class="tablinks btn btn-default btn-block btn_st" type="button" onclick="openCity(event, 'tog4')" id="defaultOpen">
                            المرتجعات السابقة
                        </button>
                    </div>


                    <div class="to4l">
                        <button class="btn btn-default btn-block s_out" type="button"><a href="{{route('logout')}}">تسجيـل خروج <i class="fa fa-sign-out-alt"></i></a>
                        </button>
                    </div>
                </div>
                @else
                <div class="to42">
                        <button class="btn btn-default btn-block s_out" type="button"><a href="{{route('homepage')}}">الصفحة الرئيسية <i class="fa fa-sign-out-alt"></i></a>
                        </button>
                    </div>
                    <div class="tog2">
                        <button type="button" class="tablinks btn btn-default btn-block btn_st" type="button" onclick="openCity(event, 'tog2')">
                            تحـرير حسـاب
                        </button>
                    </div>
                    <div class="admin">
                        <button class="tablinks btn btn-default btn-block btn_st" type="button" onclick="openCity(event, 'admin')" id="defaultOpen">
                            طلبات العملاء
                        </button>
                    </div>
                    <div class="to4l">
                        <button class="btn btn-default btn-block s_out" type="button"><a href="{{route('logout')}}">تسجيـل خروج <i class="fa fa-sign-out-alt"></i></a>
                        </button>
                    </div>
                @endif
                <div class="col-sm-9">
                    <!-- ============================== -->
                    <div class="tabcontent" id="tog1">
                        <div class="card card-body">
                            <div class="profile_msg">
                                <h5>لقـد تـم إنشـاء الحسـاب بنجـاح ! </h5>
                            </div>
                            <hr>
                            <video width="100%" height="330" controls>
                            <source src="video/lastvideo.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                </div>
                <!-- ============================== -->
                <div class="tabcontent" id="tog2">
                    <div class="card card-body">
                        <div class="row">

                            <div class="col-lg-8" style="margin-right: 500px;text-align: center;">
                                <h5>تحرير الحساب </h5>
                                <hr>
                                <form method="post" action="{{route('update_user',['id'=>Session::get('id')])}}" accept-charset="UTF-8">
                                    {{ csrf_field() }}
                                    <input required id="name" class="form-control" type="text" placeholder="ادخل الاسم" name="name" value="{{Session::get('name')}}">
                                    <br>
                                    <input required id="password" disabled class="form-control" type="password" placeholder="ادخل الرقم السرى" name="password" value="{{Session::get('password')}}">
                                    <br>
                                    <input required id="new_pass" class="form-control" type="password" placeholder="ادخل الرقم الجديد" name="new_pass" value="">
                                    <br>
                                    <button type="submit" class="btn btn-primary btn-lg">تحديث</button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- ============================== -->
                <div class="tabcontent" id="tog3">
                    <div class="card card-body">
                        <div class="row">
                            <div class="col-lg-8" style="margin-top: -182px;margin-right: 500px;text-align: center;">
                                <h5>طلبـاتي</h5>
                                <table class="table table-striped table-responsive-lg">
                                    <thead>
                                        <tr>
                                            <th>القسم</th>
                                            <th>المنتج</th>
                                            <th>صورة</th>
                                        </tr>
                                    </thead>
                                    <tbody style="text-align: center;">
                                        @foreach($Category as $row)
                                        @if($row->user_id==Session::get('id'))
                                        <tr>
                                            <td>{{$row->section}}</td>
                                            <td>{{$row->name}}</td>
                                            <td><img width="70px" height="70px" class="cart_img img-thumbnail" src="{{asset('./front/img/juice.jpg')}}"></td>
                                            <td>
                                                @include('front::select_price')
                                                <a href="{{route('delete_request',['id'=>$row->id])}}"><button type="button" class="btn btn-warning">حذف الطلب</button></a>
                                            </td>
                                        </tr>
                                        @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================== -->
                <div class="tabcontent" id="tog4">
                    <div class="card card-body">
                        <div class="row">
                            <div class="col-lg-8" style="margin-top: -182px;margin-right: 500px;text-align: center;">
                                <h5>المرتجعات السابقة</h5>
                                <table class="table table-striped table-responsive-lg">
                                    <thead>
                                        <tr>
                                            <th>القسم</th>
                                            <th>المنتج</th>
                                            <th>النوع</th>
                                            <th>السعر</th>
                                            <th>الكمية</th>
                                            <th>التاريخ</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($Category as $row)
                                        @if($row->user_id==Session::get('id') and $row->cart!==null)
                                        <tr>

                                            <td>{{$row->section}}</td>
                                            <td>{{$row->name}}</td>
                                            <td>{{$row->cart->type}}</td>
                                            <td>{{$row->cart->price}} ريال</td>
                                            <td>{{$row->cart->quantity}}</td>
                                            <td>{{$row->cart->sector}}</td>
                                            <td>{{$row->cart->track}}</td>
                                            <td>{{$row->cart->updated_at}}</td>
                                        </tr>
                                        @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ============================== -->
                @if(Session::get('name')=='admin')
                <div class="tabcontent" id="admin">
                    <div class="card card-body">
                        <div class="row">
                            <div class="col-lg-8" style="margin-top:-160px;margin-right: 253px;text-align: center;">
                               
                                <table class="table table-striped table-responsive-lg">
                                    <thead>
                                        <tr>
                                            <th>الرقم</th>
                                            <th>الاسم</th>
                                            <th>التليفون</th>
                                            <th>العنوان</th>
                                            <th>القسم</th>
                                            <th>المنتج</th>
                                            <th>النوع</th>
                                            <th>الكمية</th>
                                            <th>السعر</th>
                                            <th>القطاع</th>
                                            <th>الفرع</th>
                                            <th>التاريخ</th>
                                        </tr>
                                    </thead>
                                    <tbody style="text-align: center;">
                                        @foreach($admin as $row)
                                        <tr> 
                                           <td>{{$loop->iteration}}</td>
                                            <td>{{$row->user->name}}</td>
                                            <td>{{$row->user->phone}}</td>
                                            <td>{{$row->user->addresse}}</td>
                                            <td>{{$row->section}}</td>
                                            <td>{{$row->name}}</td>
                                            <td>{{$row->cart->type}}</td>
                                            <td>{{$row->cart->quantity}}</td>
                                            <td>{{$row->cart->price}}</td>
                                            <td>{{$row->cart->sector}}</td>
                                            <td>{{$row->cart->track}}</td>
                                            <td>{{$row->cart->updated_at}}</td>
                                            <td>
                                                <a href="{{route('delete_request',['id'=>$row->id])}}"><button type="button" class="btn btn-warning">حذف </button></a>
                                            </td>
                                        </tr>
                                    
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/profile_user.js')}}"></script>
    <script src="{{asset('js/forms.js')}}"></script>
    <script src="{{asset('js/jquery.nicescroll.min.js')}}"></script>
    <script src="{{asset('js/wow.min.js')}}"></script>
    <script>
        new WOW().init();
    </script>

</body>

</html>