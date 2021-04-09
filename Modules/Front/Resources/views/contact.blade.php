@include('front::layouts.master')

<body>
    <!-- Contact Section Begin -->
    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <a href="{{route('homepage')}}"><button style="margin-top: -52px;" type="button" class="btn btn-danger">الصفحة الرئيسيـة</button></a>
                    <div class="logo">
                        <img style="margin-left: 178px;" src="img/logo.jpg" width="700px" height="250px" alt="">
                    </div>
                    <video width="100%" height="500px" controls>
                        <source src="video/lastvideo.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Map Section Begin -->
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3628.907368151717!2d46.71407038500317!3d24.557862984197516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjTCsDMzJzI4LjMiTiA0NsKwNDInNDIuOCJF!5e0!3m2!1sar!2seg!4v1617913750127!5m2!1sar!2seg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    <div class="map-content set-bg">
                        <div class="contact-addr">
                            <span>واتس اب</span>
                            <ul>
                                <li>فرع الشفاء - شارع الترمذي 📞 0554066535</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-6">
            <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3627.94208153612!2d46.5929371850024!3d24.5911949841816!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjTCsDM1JzI4LjMiTiA0NsKwMzUnMjYuNyJF!5e0!3m2!1sar!2seg!4v1617913819597!5m2!1sar!2seg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        <div class="map-content set-bg">
            <div class="contact-addr">
                <ul>
                    <li>فرع العريجاء - مارية القبطية 📞 0552537343</li>
        
                </ul>
            </div>
        </div>
        </div>

            </div>
        </div>

    </div>

    <!-- Map Section End -->
    @include('front::layouts.footer')
    @include('front::layouts.js-script')
</body>

</html>