@extends('sections.headerAndFooter')
@section('content')

	<!-- start banner Area -->
	<section class="home-banner-area">
		<div class="container">
			<div class="row fullscreen d-flex align-items-center">
				<div class="banner-content col-lg-6 col-md-12 justify-content-center ">
					<div class="me wow fadeInDown title" data-wow-duration="1s" data-wow-delay="1.2s">أهلاً وسهلاً</div>
					<h1 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.7s">نظـام الفـواتيـر</h1>

                        <h2 class="designation mb-50 wow fadeInUp" data-wow-duration="1s" data-wow-delay="2.1s">
						 لإدارة مخـازن
						<span class="designer">أولاد بلل</span>
						ومراجعتها
					</h2>

                    <a  class="primary-btn" data-text="BALAL's SONS">
						<span>ا</span>
						<span>و</span>
						<span>لا</span>
						<span>د</span>
						<span> </span>
						<span>بلل</span>
					</a>
				</div>
				<div class="banner-img col-lg-6 col-md-6 align-self-start">
					<img class="img-fluid photo-margin-top" src="{{URL::asset('img/bg.svg')}}" alt="">
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->


	<!-- Start brands Area -->
	<section class="brands-area">
        <h1>
		<div class="container">

			<div class="brand-wrap">
{{--				<div class="row align-items-center active-brand-carusel justify-content-start no-gutters">--}}
                <div class="row align-items-center justify-content-start no-gutters">

                        <div class="col single-brand">
						<div > أمـــان </div>
					</div>
					<div class="col single-brand">
						<div >دقــــة</div>
					</div>
					<div class="col single-brand">
						<div >تميــز</div>
					</div>

				</div>
			</div>
		</div>
        </h1>
	</section>
	<!-- End brands Area -->

    @stop
