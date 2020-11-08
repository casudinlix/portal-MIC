@extends('layouts.fron.app')
@section('title', 'Beranda')
@section('parentPageTitle', 'App')
@section('css')
<link href="{{ asset('fron/layerslider/css/layerslider.css') }}" rel="stylesheet">
<link href="{{ asset('fron/css/tabs.css') }}" rel="stylesheet">
@endsection
@section('content')
<div id="full-slider-wrapper">
    <div id="layerslider" style="width:100%;height:650px;">
        <!-- first slide -->
        <div class="ls-slide" data-ls="slidedelay: 5000; transition2d:5;">
            <img src="{{ asset('fron/img/slides/slide_1.jpg') }}" class="ls-bg" alt="Slide background">
            <h3 class="ls-l slide_typo" style="top: 45%; left: 50%;"
                data-ls="offsetxin:0;durationin:2000;delayin:1000;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% bottom 0;offsetxout:0;rotatexout:90;transformoriginout:50% bottom 0;">
                MIC <strong>Excellence</strong> in teaching</h3>
            <p class="ls-l slide_typo_2" style="top:52%; left:50%;"
                data-ls="durationin:2000;delayin:1000;easingin:easeOutElastic;">
                CAMPUS</p>
            <p class="ls-l" style="top:62%; left:50%;" data-ls="durationin:2000;delayin:1300;easingin:easeOutElastic;">
                <a href="tour.html" class="button_intro">Take a tour</a> <a href="about.html"
                    class="button_intro outline">About us</a></p>
        </div>

        <!-- second slide -->
        <div class="ls-slide" data-ls="slidedelay: 5000; transition2d:5;">
            <img src="{{asset ('fron/img/slides/slide_2.jpg') }}" class="ls-bg" alt="Slide background">
            <h3 class="ls-l slide_typo" style="top: 45%; left: 50%;"
                data-ls="offsetxin:0;durationin:2000;delayin:1000;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% bottom 0;offsetxout:0;rotatexout:90;transformoriginout:50% bottom 0;">
                Atena <strong>Qualified</strong> teachers</h3>
            <p class="ls-l slide_typo_2" style="top:52%; left:50%;"
                data-ls="durationin:2000;delayin:1000;easingin:easeOutElastic;">COLLEGE / UNIVERSITY /
                CAMPUS</p>
            <p class="ls-l" style="top:65%; left:50%;" data-ls="durationin:2000;delayin:1300;easingin:easeOutElastic;">
                <a href="tour.html" class="button_intro">Take a tour</a> <a href="about.html"
                    class="button_intro outline">About us</a></p>
        </div>

        <!-- third slide -->
        <div class="ls-slide" data-ls="slidedelay:5000; transition2d:5;">
            <img src="{{ asset('fron/img/slides/slide_3.jpg') }}" class="ls-bg" alt="Slide background">
            <h3 class="ls-l slide_typo" style="top: 45%; left: 50%;"
                data-ls="offsetxin:0;durationin:2000;delayin:1000;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% bottom 0;offsetxout:0;rotatexout:90;transformoriginout:50% bottom 0;">
                <strong>Great</strong> students community</h3>
            <p class="ls-l slide_typo_2" style="top:52%; left:50%;"
                data-ls="durationin:2000;delayin:1000;easingin:easeOutElastic;">COLLEGE / UNIVERSITY /
                CAMPUS</p>
            <p class="ls-l" style="top:65%; left:50%;" data-ls="durationin:2000;delayin:1300;easingin:easeOutElastic;">
                <a href="tour.html" class="button_intro">Take a tour</a> <a href="about.html"
                    class="button_intro outline">About us</a></p>
        </div>

        <!-- fourth slide -->
        <div class="ls-slide" data-ls="slidedelay: 5000; transition2d:5;">
            <img src="{{ asset('fron/img/slides/slide_4.jpg') }}" class="ls-bg" alt="Slide background">
            <h3 class="ls-l slide_typo" style="top: 45%; left: 50%;"
                data-ls="offsetxin:0;durationin:2000;delayin:1000;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% bottom 0;offsetxout:0;rotatexout:90;transformoriginout:50% bottom 0;">
                <strong>Well equiped</strong> classrooms</h3>
            <p class="ls-l slide_typo_2" style="top:52%; left:50%;"
                data-ls="durationin:2000;delayin:1000;easingin:easeOutElastic;">COLLEGE / UNIVERSITY /
                CAMPUS</p>
            <p class="ls-l" style="top:65%; left:50%;" data-ls="durationin:2000;delayin:1300;easingin:easeOutElastic;">
                <a href="tour.html" class="button_intro">Take a tour</a> <a href="about.html"
                    class="button_intro outline">About us</a></p>
        </div>

    </div>
</div><!-- End layerslider -->
<div class="container_gray_bg" id="home_feat_1">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <div class="home_feat_1_box">
                    <a href="#">
                        <img src="{{ asset('fron/img/home_feat_1_1.jpg') }}" class="img-responsive" alt="">
                        <div class="short_info">
                            <h3>Plan a visit</h3><i class="arrow_carrot-right_alt2"></i>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="home_feat_1_box">
                    <a href="#">
                        <img src="{{ asset('fron/img/home_feat_1_2.jpg') }}" class="img-responsive" alt="">
                        <div class="short_info">
                            <h3>Study Programs</h3><i class="arrow_carrot-right_alt2"></i>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="home_feat_1_box">
                    <a href="#">
                        <img src="{{ asset('fron/img/home_feat_1_3.jpg') }}" class="img-responsive" alt="">
                        <div class="short_info">
                            <h3>Admissions</h3><i class="arrow_carrot-right_alt2"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div><!-- End row -->
    </div><!-- End container -->
</div><!-- End container_gray_bg -->

<div class="container margin_60">
    <div class="main_title">
        <h2>Kenapa Memilih MIC Sebagai Kampus Anda </h2>
        <p>Kuliah Dengan Biaya Ekonomis.</p>
    </div>
    <div class="row">
        <div class="col-md-6 col-sm-6">
            <div class="box_feat_home">
                <i class=" iconcustom-certificate"></i>
                <h3>Quality Certifications</h3>
                <p>Berkerja sama dengan badan sertifikasi nasional (BNSP)
                    untuk meningkatkan bakat dan profesionalisme kerja
                </p>
            </div>
        </div>
        <div class="col-md-6 col-sm-6">
            <div class="box_feat_home">
                <i class=" iconcustom-innovation"></i>
                <h3>Learning Best Practice</h3>
                <p>Belajar dengan langsung ke studi kasus
                    .</p>
            </div>
        </div>
    </div><!-- End row -->
    <div class="row">
        <div class="col-md-6 col-sm-6">
            <div class="box_feat_home">
                <i class=" iconcustom-education_online"></i>
                <h3>Online Resources</h3>
                <p>
                    Kegiatan belajar bisa dimana saja, karena disediakan kelas online
                </p>
            </div>
        </div>
        <div class="col-md-6 col-sm-6">
            <div class="box_feat_home">
                <i class=" iconcustom-know_how"></i>
                <h3>Study Plan Tutors</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut rutrum elit in
                    arcu blandit, eget pretium nisl accumsan. Sed ultricies commodo tortor, eu
                    pretium mauris.</p>
            </div>
        </div>
    </div><!-- End row -->
    <div class="row">
        <div class="col-md-6 col-sm-6">
            <div class="box_feat_home">
                <i class=" iconcustom-science"></i>
                <h3>Advanced Practice</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut rutrum elit in
                    arcu blandit, eget pretium nisl accumsan. Sed ultricies commodo tortor, eu
                    pretium mauris.</p>
            </div>
        </div>
        <div class="col-md-6 col-sm-6">
            <div class="box_feat_home">
                <i class=" iconcustom-test"></i>
                <h3>Research</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut rutrum elit in
                    arcu blandit, eget pretium nisl accumsan. Sed ultricies commodo tortor, eu
                    pretium mauris.</p>
            </div>
        </div>
    </div><!-- End row -->
    <hr class="more_margin">

    <div class="row add_bottom_60">
        <div class="main_title">
            <h2>MIC Fokus Pada ....</h2>
            <p>-</p>
        </div>
        <div class="col-md-6 col-md-offset-3">
            <div id="graph">
                <img src="{{ asset('fron/img/graphic.jpg') }}" class="wow zoomIn" data-wow-delay="0.1s" alt="">
                <div class="features step_1 wow zoomIn" data-wow-delay="1s">
                    <h4><strong>01.</strong> Students growth</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut rutrum elit in
                        arcu blandit, eget pretium nisl accumsan. Sed ultricies commodo tortor, eu
                        pretium mauris.</p>
                </div>
                <div class="features step_2 wow zoomIn" data-wow-delay="1.5s">
                    <h4><strong>02.</strong> Best learning practice</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut rutrum elit in
                        arcu blandit, eget pretium nisl accumsan. Sed ultricies commodo tortor, eu
                        pretium mauris.</p>
                </div>
                <div class="features step_3 wow zoomIn" data-wow-delay="2s">
                    <h4><strong>03.</strong> Focus on targets</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut rutrum elit in
                        arcu blandit, eget pretium nisl accumsan. Sed ultricies commodo tortor, eu
                        pretium mauris.</p>
                </div>
                <div class="features step_4 wow zoomIn" data-wow-delay="2.5s">
                    <h4><strong>04.</strong> Interdisciplanary model</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut rutrum elit in
                        arcu blandit, eget pretium nisl accumsan. Sed ultricies commodo tortor, eu
                        pretium mauris.</p>
                </div>
            </div>
        </div>
    </div><!-- End row -->
    <div class="text-center"><a href="tour.html" class=" button_outline large">Ikuti Tur MIC</a>
    </div>
</div><!-- End container -->

<div class="bg_content testimonials"
    style="background: url({{ asset('fron/img/testimonials.jpg') }}) repeat center center;">
    <div class="row">
        <div class="col-md-offset-1 col-md-10">
            <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                <!-- Bottom Carousel Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#quote-carousel" data-slide-to="1"></li>
                    <li data-target="#quote-carousel" data-slide-to="2"></li>
                </ol><!-- Carousel Slides / Quotes -->
                <div class="carousel-inner">
                    <!-- Quote 1 -->
                    <div class="item active">
                        <blockquote>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut rutrum elit in
                                arcu blandit, eget pretium nisl accumsan. Sed ultricies commodo tortor, eu
                                pretium mauris.
                            </p>
                        </blockquote>
                        <small><img class="img-circle" src="img/testimonial_1.jpg" alt="">Stefany</small>
                    </div>
                    <!-- Quote 2 -->
                    <div class="item">
                        <blockquote>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut rutrum elit in
                                arcu blandit, eget pretium nisl accumsan. Sed ultricies commodo tortor, eu
                                pretium mauris.
                            </p>
                        </blockquote>
                        <small><img class="img-circle" src="img/testimonial_2.jpg" alt="">Karla</small>
                    </div>
                    <!-- Quote 3 -->
                    <div class="item">
                        <blockquote>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut rutrum elit in
                                arcu blandit, eget pretium nisl accumsan. Sed ultricies commodo tortor, eu
                                pretium mauris.
                            </p>
                        </blockquote>
                        <small><img class="img-circle" src="img/testimonial_1.jpg" alt="">Maira</small>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End row -->
</div><!-- End bg_content -->

<div class="container margin_60">
    <div class="main_title">
        <h2>Terbaru Dari Kami ....</h2>
        <p>-</p>
    </div>
    <div id="tabs" class="tabs">
        <nav>
            <ul>

                <li><a href="#section-2" class="icon-news"><span>Berita</span></a></li>
                <li><a href="#section-3" class="icon-events"><span>Agenda</span></a></li>
            </ul>
        </nav>
        <div class="content">

            <section id="section-2">
                <div class="row list_news_tabs">
                    <div class="col-md-4 col-sm-4">
                        <p><a href="#0"><img src="img/news_1_thumb.jpg" alt="" class="img-responsive"></a>
                        </p>
                        <span class="date_published">20 Agusut 2015</span>
                        <h3><a href="#0">Success Stories for Atena College in 2015's </a></h3>
                        <p>Lorem ipsum dolor sit amet, ei tincidunt persequeris efficiantur vel, usu animal
                            patrioque omittantur et. Timeam nostrud platonem nec ea, simul nihil delectus
                            has ex. </p>
                        <a href="#0" class="button small">Read more</a>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <p><a href="#0"><img src="img/news_2_thumb.jpg" alt="" class="img-responsive"></a>
                        </p>
                        <span class="date_published">20 Agusut 2015</span>
                        <h3><a href="#0">Boost in A-Level Grades in 2015 for Students</a></h3>
                        <p>Lorem ipsum dolor sit amet, ei tincidunt persequeris efficiantur vel, usu animal
                            patrioque omittantur et. Timeam nostrud platonem nec ea, simul nihil delectus
                            has ex. </p>
                        <a href="#0" class="button small">Read more</a>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <p><a href="#0"><img src="img/news_3_thumb.jpg" alt="" class="img-responsive"></a>
                        </p>
                        <span class="date_published">20 Agusut 2015</span>
                        <h3><a href="#0">Caps Off To Sport at Atena</a></h3>
                        <p>Lorem ipsum dolor sit amet, ei tincidunt persequeris efficiantur vel, usu animal
                            patrioque omittantur et. Timeam nostrud platonem nec ea, simul nihil delectus
                            has ex. </p>
                        <a href="#0" class="button small">Read more</a>
                    </div>
                </div>
                <!--End row -->
            </section>
            <section id="section-3">
                <div class="row list_news_tabs">
                    <div class="col-md-4 col-sm-4">
                        <p><a href="#0"><img src="img/event_1_thumb.jpg" alt="" class="img-responsive"></a>
                        </p>
                        <span class="date_published">20 Agusut 2015</span>
                        <h3><a href="#0">Next students meeting</a></h3>
                        <p>Lorem ipsum dolor sit amet, ei tincidunt persequeris efficiantur vel, usu animal
                            patrioque omittantur et. Timeam nostrud platonem nec ea, simul nihil delectus
                            has ex. </p>
                        <a href="#0" class="button small">Read more</a>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <p><a href="#0"><img src="img/event_2_thumb.jpg" alt="" class="img-responsive"></a>
                        </p>
                        <span class="date_published">20 Agusut 2015</span>
                        <h3><a href="#0">10 October Open day</a></h3>
                        <p>Lorem ipsum dolor sit amet, ei tincidunt persequeris efficiantur vel, usu animal
                            patrioque omittantur et. Timeam nostrud platonem nec ea, simul nihil delectus
                            has ex. </p>
                        <a href="#0" class="button small">Read more</a>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <p><a href="#0"><img src="img/event_3_thumb.jpg" alt="" class="img-responsive"></a>
                        </p>
                        <span class="date_published">20 Agusut 2015</span>
                        <h3><a href="#0">Photography workshop</a></h3>
                        <p>Lorem ipsum dolor sit amet, ei tincidunt persequeris efficiantur vel, usu animal
                            patrioque omittantur et. Timeam nostrud platonem nec ea, simul nihil delectus
                            has ex. </p>
                        <a href="#0" class="button small">Read more</a>
                    </div>
                </div>
                <!--End row -->
            </section>

        </div><!-- /content -->
    </div><!-- End tabs -->
</div>



<div class="bg_content magnific"
    style="background: url({{ asset('fron/img/bg_content.jpg') }}) no-repeat center center;">
    <div>
        <h3>Profile Kampus</h3>
        <p>
        </p>
        <a href="https://www.youtube.com/watch?v=yhNtUjtZEPY" class="video_pop"><i
                class="arrow_triangle-right_alt2"></i></a>
    </div>
</div><!-- End bg_content -->


@endsection
@section('js')
<script src="{{asset ('fron/layerslider/js/greensock.js') }}"></script>
<script src="{{ asset('fron/layerslider/js/layerslider.transitions.js') }}"></script>
<script src="{{ asset('fron/layerslider/js/layerslider.kreaturamedia.jquery.js') }}"></script>
@endsection
@section('modal')
@endsection
@section('script')
<script type="text/javascript">
    $(document).ready(function(){
		'use strict';
        $('#layerslider').layerSlider({
            autoStart: true,
			responsive: true,
			responsiveUnder: 1280,
			layersContainer: 1170,
            skinsPath: "{{ asset('fron/layerslider/skins/') }}/"
            // Please make sure that you didn't forget to add a comma to the line endings
            // except the last line!
        });
    });
</script>
@endsection