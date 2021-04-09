<!doctype html>
<html dir="rtl">
<head>
    <title>التسجيل</title>

	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />


	<style>body{padding-top: 60px;}</style>

    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet" />

	<link href="{{asset('assets/css/login-register.css')}}" rel="stylesheet" />
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

	<script src="{{asset('assets/js/jquery-1.10.2.js')}}" type="text/javascript"></script>
	<script src="{{asset('assets/js/bootstrap.js')}}" type="text/javascript"></script>
	<script src="{{asset('assets/js/login-register.js')}}" type="text/javascript"></script>

</head>
<body class="cover">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 d-flex p-2">
                <a class="btn btn-primary btn-lg" data-toggle="modal" href="javascript:void(0)" onclick="openLoginModal();">ادخل الى حسابك</a>
                <a class="btn btn-success btn-lg" data-toggle="modal" href="javascript:void(0)" onclick="openRegisterModal();">سجل حساب جديد</a></div>
            </div>


		 <div class="modal fade login" id="loginModal">
		      <div class="modal-dialog login animated">
    		      <div class="modal-content">
    		         <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="box">
                             <div class="content">
                                <div class="social">
                                    <a class="circle github" href="#">
                                        <i class="fa fa-github fa-fw"></i>
                                    </a>
                                    <a id="google_login" class="circle google" href="#">
                                        <i class="fa fa-google-plus fa-fw"></i>
                                    </a>
                                    <a id="facebook_login" class="circle facebook" href="#">
                                        <i class="fa fa-facebook fa-fw"></i>
                                    </a>
                                </div>
                                <div class="division">
                                    <div class="line l"></div>
                                      <span>أو</span>
                                    <div class="line r"></div>
                                </div>
                                <div class="error"></div>
                                <div class="form loginBox">
                                    <form method="post" action="{{route('login')}}" accept-charset="UTF-8">
                                    {{ csrf_field() }}
                                    <input required id="name" class="form-control" type="text" placeholder="ادخل الاسم" name="name">
                                    <input required id="password" class="form-control" type="password" placeholder="ادخل الرقم السرى" name="password">
                                    <input class="btn btn-default btn-login" type="submit" value="تســجــيــــل" >
                                    </form>
                                </div>
                             </div>
                        </div>
                        <div class="box">
                            <div class="content registerBox" style="display:none;">
                             <div class="form">
                                <form method="post" html="{:multipart=>true}" data-remote="true" action="{{route('register')}}" accept-charset="UTF-8">
                                {{ csrf_field() }}
                                <input required id="name" class="form-control" type="text" placeholder="ادخل الاسم" name="name">
                                <input required id="password" class="form-control" type="password" placeholder="ادخل الرقم السرى" name="password">
                                <input required id="password_confirmation" class="form-control" type="password" placeholder="اعادة الرقم السرى" name="password_confirmation">
                                <input required id="phone" class="form-control" type="text" placeholder="ادخل رقم المحمول" name="phone">
                                <input required id="addresse" class="form-control" type="text" placeholder="ادخل العنوان" name="addresse">
                                <input class="btn btn-default btn-register" type="submit" value="انشاء حساب" name="commit">
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="forgot login-footer">
                            <span>
                                 <a href="javascript: showRegisterForm();">انشاء حساب جديد</a>
                            </span>
                        </div>
                        <div class="forgot register-footer" style="display:none">
                             <span>هل بالفعل تمتلك حساب ؟</span>
                             <a href="javascript: showLoginForm();">تســجــيــــل</a>
                        </div>
                    </div>
    		      </div>
		      </div>
		  </div>
    </div>
<script type="text/javascript">
    $(document).ready(function(){
        openLoginModal();
    });
</script>


</body>
</html>
