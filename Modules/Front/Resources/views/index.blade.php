@include('front::layouts.master')
<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <!-- Header Section Begin -->
    <header style="margin-top: -108px;" class="header-section">
        <div class="container">
            <div class="logo">
                <a href="./index.html"><img src="img/logo.jpg" width="500x" height="220px"  alt=""></a>
            </div>
           
            <div class="nav-menu" style="margin-top: -128px;">
               
                <nav class="main-menu mobile-menu">
                    <ul>
                        <li class="active"><a href="{{route('homepage')}}">الرئيسيــة</a></li>
                        <li><a href="{{route('allcategory')}}">قســم العصائـر</a></li>
                        <li><a href="{{route('contactus')}}">تواصــل معنــا</a></li>
                    </ul>
                </nav>
                @if(Session::has('name'))
                    <div class="nav-left search-switch" style="margin-left: -93px;">
                    <a href="{{route('profile')}}"><button type="button" class="btn btn-success btn-lg">مرحبا بك يا {{ Session::get('name') }}</button></a>
                    <a href="{{route('logout')}}"><button type="button" style="border-radius: 20px;" class="btn btn-warning btn-md">سجل خروجك</button></a>
                    </div>
                @else
                    <div class="nav-left search-switch">
                    <a href="{{route('ui')}}"><button type="button" class="btn btn-success btn-lg">سجل دخولك</button></a>
                    </div>
                @endif
               
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Page Top Recipe Section Begin -->
    <section class="page-top-recipe">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-lg-2">
                    <div class="pt-recipe-item large-item">
                        <div class="pt-recipe-img set-bg" data-setbg="img/j3.jpg">
                            <i class="fa fa-plus"></i>
                        </div>
                        <div class="pt-recipe-text">
                            <span>جديد اخر رشفة</span>
                            <h3>مشكل توت</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 order-lg-1">
                    <div class="pt-recipe-item">
                        <div class="pt-recipe-img set-bg" data-setbg="img/j1.jpg">
                            <i class="fa fa-plus"></i>
                        </div>
                        <div class="pt-recipe-text">
                            <h4>قسم عصير الشمندر</h4>
                        </div>
                    </div>
                    <div class="pt-recipe-item">
                        <div class="pt-recipe-img set-bg" data-setbg="img/j2.jpg">
                            <i class="fa fa-plus"></i>
                        </div>
                        <div class="pt-recipe-text">
                            <h4>قسم العصائر المتنوعة</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 order-lg-3">
                    <div class="pt-recipe-item">
                        <div class="pt-recipe-img set-bg" data-setbg="img/j4.jpg">
                            <i class="fa fa-plus"></i>
                        </div>
                        <div class="pt-recipe-text">
                            <h4>قسم الميلك شيك</h4>
                        </div>
                    </div>
                    <div class="pt-recipe-item">
                        <div class="pt-recipe-img set-bg" data-setbg="img/j5.jpg">
                            <i class="fa fa-plus"></i>
                        </div>
                        <div class="pt-recipe-text">
                            <h4>قسم مشروبات الطاقة</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('front::layouts.footer')
    @include('front::layouts.js-script')


</body>

</html>