<!-- Categories Filter Section Begin -->
<div class="categories-filter-section spad" style="margin-top: -134px;">
    <img  style="margin-left: 200px;" width="1000px" height="350px" src="img/logo.jpg" alt="">
    <div class="container">
        @if(Session::has('message'))
        <div class="alert alert-warning fade show" style="width: 183px;" role="alert">
            <strong>{{Session::get('message')}}</strong>
            <button type="button" class="btn btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        @if(Session::has('name'))
        <a href="{{route('profile')}}"><button style="margin-top: -157px;" type="button" class="btn btn-warning">الصفحة الشخصية</button></a>
        @endif
        <a href="{{route('homepage')}}"><button style="margin-top: -157px;" type="button" class="btn btn-danger">الصفحة الرئيسيـة</button></a>
        
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="filter-item">
                    <ul>
                        <li class="active" data-filter=".last">جديد اخر رشفة</li>
                        <li data-filter=".shmens">قسم عصير الشمندر</li>
                        <li data-filter=".make">قسم الميلك شيك</li>
                        <li data-filter=".mashrop">قسم مشروبات الطاقة</li>
                        <li data-filter=".arase">قسم العرايسى والخلطات الاخرى</li>
                        <li data-filter=".kltat">الخلطات الاخرى</li>
                        <li data-filter=".asermona">قسم العصائر المتنوعة</li>
                        <li data-filter=".asertasa">العصائر الطازجة</li>
                        <li data-filter=".asdernewtype">العصائر الطازجة (نوع جديد)</li>
                        <li data-filter=".specifi">ما يميزنا- خلطات خاصة بالمحل</li>
                        <li data-filter=".moheto">قسم الموهيتو</li>
                        <li data-filter=".fruits">سلطة فواكه (صحن)</li>
                        <li data-filter=".fruitssepefic">قطع الفواكه السادة</li>
                        <li data-filter=".box">بوكسات عصائر اخر رشفة</li>
                    </ul>
                    <hr>
                </div>
            </div>
        </div>
        <div class="cf-filter" id="category-filter">
            @foreach($product as $pro)
            @if($pro->section == 'جديد اخر رشفة')
            <div style="text-align: center;float: right;" class="cf-item mix last">
                <div class="cf-item-pic">
                    <img class="img-thumbnail" class="img-thumbnail" style="border-radius: 20px;" src="img/juice.jpg" alt="">
                </div>
                <div class="cf-item-text">
                    <div>
                    <p style="line-height: 1px;">صغير 6 وسط 9 كبير 12</p>
                    <p>لتر 20 لترونصف 25 خمس لتر 80</p>
                    
                    </div>
                    <h4 style="font-weight: bold;">{{$pro->name}}</h4>
                    <hr>
                </div>

                @if((Session::has('name')) and (Session::get('name') !== 'admin'))
                <div class="cf-item-text">
                    <a href="{{route('additem',['name'=>$pro->name,'section'=>$pro->section,'id'=>Session::get('id')])}}"><button type="button" class="btn btn-success"> اضافــة</button></a>
                </div>
                @endif
            </div>

            @elseif($pro->section == 'قسم عصير الشمندر')
            <div style="text-align: center;float: right;" class="cf-item mix  shmens">
                <div class="cf-item-pic">
                    <img class="img-thumbnail" style="border-radius: 20px;" src="img/juice.jpg" alt="">
                </div>
               <div class="cf-item-text">
                    <div>
                    <p style="line-height: 1px;">صغير 5 وسط 8 كبير 10</p>
                    <p>لتر 15 لترونصف 8 خمس لتر 70</p>
                    
                    </div>
                    <h4 style="font-weight: bold;">{{$pro->name}}</h4>
                    <hr>
                </div>
                @if((Session::has('name')) and (Session::get('name') !== 'admin'))
                <div class="cf-item-text">

                    <a href="{{route('additem',['name'=>$pro->name,'section'=>$pro->section,'id'=>Session::get('id')])}}"><button type="button" class="btn btn-success"> اضافــة</button></a>
                </div>
                @endif
            </div>


            @elseif($pro->section == 'قسم الميلك شيك')
            <div style="text-align: center;float: right;" class="cf-item mix  make">
                <div class="cf-item-pic">
                    <img class="img-thumbnail" style="border-radius: 20px;" src="img/juice.jpg" alt="">
                </div>
               <div class="cf-item-text">
                    <div>
                    <p style="line-height: 1px;">وسط 9 كبير 12</p>
                    </div>
                    <h4 style="font-weight: bold;">{{$pro->name}}</h4>
                    <hr>
                </div>
                @if((Session::has('name')) and (Session::get('name') !== 'admin'))
                <div class="cf-item-text">

                    <a href="{{route('additem',['name'=>$pro->name,'section'=>$pro->section,'id'=>Session::get('id')])}}"><button type="button" class="btn btn-success"> اضافــة</button></a>
                </div>
                @endif
            </div>


            @elseif($pro->section == 'قسم مشروبات الطاقة')
            <div style="text-align: center;float: right;" class="cf-item mix  mashrop">
                <div class="cf-item-pic">
                    <img class="img-thumbnail" style="border-radius: 20px;" src="img/juice.jpg" alt="">
                </div>
               <div class="cf-item-text">
                    <div>
                    <p style="line-height: 1px;">وسط 9 كبير 12</p>
                    </div>
                    <h4 style="font-weight: bold;">{{$pro->name}}</h4>
                    <hr>
                </div>
                @if((Session::has('name')) and (Session::get('name') !== 'admin'))
                <div class="cf-item-text">

                    <a href="{{route('additem',['name'=>$pro->name,'section'=>$pro->section,'id'=>Session::get('id')])}}"><button type="button" class="btn btn-success"> اضافــة</button></a>
                </div>
                @endif
            </div>


            @elseif($pro->section == 'قسم العرايسى والخلطات الاخرى')
            <div style="text-align: center;float: right;" class="cf-item mix  arase">
                <div class="cf-item-pic">
                    <img class="img-thumbnail" style="border-radius: 20px;" src="img/juice.jpg" alt="">
                </div>
               <div class="cf-item-text">
                    <div>
                    <p style="line-height: 1px;">صغير 6 وسط 9 كبير 12</p>
                    <p>لتر 20 لترونصف 25 خمس لتر 80</p>
                    
                    </div>
                    <h4 style="font-weight: bold;">{{$pro->name}}</h4>
                    <hr>
                </div>
                @if((Session::has('name')) and (Session::get('name') !== 'admin'))
                <div class="cf-item-text">

                    <a href="{{route('additem',['name'=>$pro->name,'section'=>$pro->section,'id'=>Session::get('id')])}}"><button type="button" class="btn btn-success"> اضافــة</button></a>
                </div>
                @endif
            </div>


            @elseif($pro->section == 'الخلطات الاخرى')
            <div style="text-align: center;float: right;" class="cf-item mix  kltat">
                <div class="cf-item-pic">
                    <img class="img-thumbnail" style="border-radius: 20px;" src="img/juice.jpg" alt="">
                </div>
               <div class="cf-item-text">
                    <div>
                    <p style="line-height: 1px;">وسط 10 كبير 12</p>
                    </div>
                    <h4 style="font-weight: bold;">{{$pro->name}}</h4>
                    <hr>
                </div>
                @if((Session::has('name')) and (Session::get('name') !== 'admin'))
                <div class="cf-item-text">

                    <a href="{{route('additem',['name'=>$pro->name,'section'=>$pro->section,'id'=>Session::get('id')])}}"><button type="button" class="btn btn-success"> اضافــة</button></a>
                </div>
                @endif
            </div>


            @elseif($pro->section == 'قسم العصائر المتنوعة')
            <div style="text-align: center;float: right;" class="cf-item mix  asermona">
                <div class="cf-item-pic">
                    <img class="img-thumbnail" style="border-radius: 20px;" src="img/juice.jpg" alt="">
                </div>
               <div class="cf-item-text">
                    <div>
                    <p style="line-height: 1px;">صغير 5 وسط 7 كبير 10</p>
                    <p>لتر 15 لترونصف 20 خمس لتر 70</p>
                    
                    </div>
                    <h4 style="font-weight: bold;">{{$pro->name}}</h4>
                    <hr>
                </div>
                @if((Session::has('name')) and (Session::get('name') !== 'admin'))
                <div class="cf-item-text">

                    <a href="{{route('additem',['name'=>$pro->name,'section'=>$pro->section,'id'=>Session::get('id')])}}"><button type="button" class="btn btn-success"> اضافــة</button></a>
                </div>
                @endif
            </div>


            @elseif($pro->section == 'العصائر الطازجة ')
            <div style="text-align: center;float: right;" class="cf-item mix asertasa">
                <div class="cf-item-pic">
                    <img class="img-thumbnail" style="border-radius: 20px;" src="img/juice.jpg" alt="">
                </div>
               <div class="cf-item-text">
                    <div>
                    <p style="line-height: 1px;">صغير 6 وسط 9 كبير 12</p>
                    <p>لتر 20 لترونصف 25 خمس لتر 80</p>
                    
                    </div>
                    <h4 style="font-weight: bold;">{{$pro->name}}</h4>
                    <hr>
                </div>
                @if((Session::has('name')) and (Session::get('name') !== 'admin'))
                <div class="cf-item-text">

                    <a href="{{route('additem',['name'=>$pro->name,'section'=>$pro->section,'id'=>Session::get('id')])}}"><button type="button" class="btn btn-success"> اضافــة</button></a>
                </div>
                @endif
            </div>


            @elseif($pro->section == 'العصائر الطازجة (نوع جديد)')
            <div style="text-align: center;float: right;" class="cf-item mix  asdernewtype">
                <div class="cf-item-pic">
                    <img class="img-thumbnail" style="border-radius: 20px;" src="img/juice.jpg" alt="">
                </div>
               <div class="cf-item-text">
                    <div>
                    <p style="line-height: 1px;">صغير 6 وسط 9 كبير 12</p>
                    <p>لتر 20 لترونصف 25 خمس لتر 80</p>
                    
                    </div>
                    <h4 style="font-weight: bold;">{{$pro->name}}</h4>
                    <hr>
                </div>
                @if((Session::has('name')) and (Session::get('name') !== 'admin'))
                <div class="cf-item-text">

                    <a href="{{route('additem',['name'=>$pro->name,'section'=>$pro->section,'id'=>Session::get('id')])}}"><button type="button" class="btn btn-success"> اضافــة</button></a>
                </div>
                @endif
            </div>


            @elseif($pro->section == 'ما يميزنا- خلطات خاصة بالمحل')
            <div style="text-align: center;float: right;" class="cf-item mix  specifi">
                <div class="cf-item-pic">
                    <img class="img-thumbnail" style="border-radius: 20px;" src="img/juice.jpg" alt="">
                </div>
               <div class="cf-item-text">
                    <div>
                    <p style="line-height: 1px;">صغير 6 وسط 9 كبير 12</p>
                    <p>لتر 20 لترونصف 25 خمس لتر 80</p>
                    
                    </div>
                    <h4 style="font-weight: bold;">{{$pro->name}}</h4>
                    <hr>
                </div>
                @if((Session::has('name')) and (Session::get('name') !== 'admin'))
                <div class="cf-item-text">

                    <<a href="{{route('additem',['name'=>$pro->name,'section'=>$pro->section,'id'=>Session::get('id')])}}"><button type="button" class="btn btn-success"> اضافــة</button></a>
                </div>
                @endif
            </div>

            @elseif($pro->section == 'قسم الموهيتو')
            <div style="text-align: center;float: right;" class="cf-item mix  moheto ">
                <div class="cf-item-pic">
                    <img class="img-thumbnail" style="border-radius: 20px;" src="img/juice.jpg" alt="">
                </div>
               <div class="cf-item-text">
                    <div>
                    <p style="line-height: 1px;">وسط 9 كبير 12</p>
                    </div>
                    <h4 style="font-weight: bold;">{{$pro->name}}</h4>
                    <hr>
                </div>
                @if((Session::has('name')) and (Session::get('name') !== 'admin'))
                <div class="cf-item-text">

                    <a href="{{route('additem',['name'=>$pro->name,'section'=>$pro->section,'id'=>Session::get('id')])}}"><button type="button" class="btn btn-success"> اضافــة</button></a>
                </div>
                @endif
            </div>

            @elseif($pro->section == 'سلطة فواكه (صحن)')
            <div style="text-align: center;float: right;" class="cf-item mix  fruits">
                <div class="cf-item-pic">
                    <img class="img-thumbnail" style="border-radius: 20px;" src="img/juice.jpg" alt="">
                </div>
               <div class="cf-item-text">
                    <div>
                    <p style="line-height: 1px;">صغير 15 وسط 30 كبير 80</p>
                    </div>
                    <h4 style="font-weight: bold;">{{$pro->name}}</h4>
                    <hr>
                </div>
                @if((Session::has('name')) and (Session::get('name') !== 'admin'))
                <div class="cf-item-text">
                    <a href="{{route('additem',['name'=>$pro->name,'section'=>$pro->section,'id'=>Session::get('id')])}}"><button type="button" class="btn btn-success"> اضافــة</button></a>>
                </div>
                @endif
            </div>
            @elseif($pro->section == 'قطع الفواكه السادة')
            <div style="text-align: center;float: right;" class="cf-item mix  fruitssepefic ">
                <div class="cf-item-pic">
                    <img class="img-thumbnail" style="border-radius: 20px;" src="img/juice.jpg" alt="">
                </div>
               <div class="cf-item-text">
                    <div>
                    <p style="line-height: 1px;">وسط 12 كبير 15</p>
                    </div>
                    <h4 style="font-weight: bold;">{{$pro->name}}</h4>
                    <hr>
                </div>
                @if((Session::has('name')) and (Session::get('name') !== 'admin'))
                <div class="cf-item-text">

                    <a href="{{route('additem',['name'=>$pro->name,'section'=>$pro->section,'id'=>Session::get('id')])}}"><button type="button" class="btn btn-success"> اضافــة</button></a>
                </div>
                @endif
            </div>
            @elseif($pro->section == 'بوكسات عصائر اخر رشفة')
                <div style="text-align: center;float: right;" class="cf-item mix  box ">
                    <div class="cf-item-pic">
                        <img class="img-thumbnail" style="border-radius: 20px;" src="img/juice.jpg" alt="">
                    </div>
                    <div class="cf-item-text">
                        <div>
                            
                        </div>
                        @if($pro->name =='بوكس 12 علبة مشكلة 200 مل')
                        <p style="line-height: 1px;"> ريال 75</p>
                        <h4 style="font-weight: bold;">{{$pro->name}}</h4>
                        @else
                        <p style="line-height: 1px;"> ريال 90</p>
                        <h4 style="font-weight: bold;">{{$pro->name}}</h4>
                        @endif
                        <hr>
                    </div>
                    @if((Session::has('name')) and (Session::get('name') !== 'admin'))
                    <div class="cf-item-text">
                        <a href="{{route('additem',['name'=>$pro->name,'section'=>$pro->section,'id'=>Session::get('id')])}}"><button disabled type="button" class="btn btn-success "> اضافــة</button></a>
                    </div>
                @endif
                </div>
            @endif
            @endforeach

        </div>
    </div>