<!DOCTYPE html>
<html lang="zxx" class="no-js" dir="rtl">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="{{URL::asset('img/fav.png')}}">
	<!-- Author Meta -->
	<meta name="author" content="colorlib">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
    <title>أولاد بلل</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700,900" rel="stylesheet">
	<!--
			CSS
			============================================= -->
	<link rel="stylesheet" href="{{URL::asset('css/linearicons.css')}}">
	<link rel="stylesheet" href="{{URL::asset('css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{URL::asset('css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{URL::asset('css/magnific-popup.css')}}">
	<link rel="stylesheet" href="{{URL::asset('css/nice-select.css')}}">
	<link rel="stylesheet" href="{{URL::asset('css/animate.min.css')}}">
	<link rel="stylesheet" href="{{URL::asset('css/owl.carousel.css')}}">
	<link rel="stylesheet" href="{{URL::asset('css/main.css')}}">


{{-- start my addition--}}



    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }


        .full-height {
            height: 100vh;
        }

        .nice-font {
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 50px;
            font-family: 'Nunito', sans-serif;
        }

        .big-font {
            font-size: 35px;
        }

        .lable-font {
            font-size: 25px;
        }

        /*.links > a {*/
        /*    color: #636b6f;*/
        /*    padding: 0 25px;*/
        /*    font-size: 13px;*/
        /*    font-weight: 600;*/
        /*    letter-spacing: .1rem;*/
        /*    text-decoration: none;*/
        /*    text-transform: uppercase;*/
        /*}*/

        .m-b-md {
            margin-bottom: 50px;
        }
        .all-bills-margin-bottom {
            margin-bottom: 350px;
        }
        .margin-top {
            margin-top: 70px;
        }
        .padding-top {
            padding-top: 50px;
        }
        .all-bills-padding-top {
            padding-top: 90px;
        }
        .all-bills-margin-sides {
            margin-left: 70px;
            margin-right: 70px;
        }
        .all-products-margin-sides {
            margin-left: 230px;
            margin-right: 230px;
        }
        .photo-margin-top {
            margin-top: 310px;
        }

        .blue-color {
            color: #8FACCE;
        }

        .color-white {
            color: #ffffff;
        }

        .bagination {
            margin-top: -160px;
        }

        .nav-m{
            color: white !important;
            font-size: 5.8em !important;
        }
        .nav li{
            padding-right:5px;
        }

        /* Modify the background color */

        .navbar-custom {
            background-color: #8FACCE;
        }
        /* Modify brand and text color */

        .navbar-custom .navbar-brand,
        .navbar-custom .navbar-text {
            color: #8FACCE;
        }


        .btn2{
            display: block;
            width: 100%;
            height: 50px;
            border-radius: 25px;
            outline: none;
            border: none;
            background-image: linear-gradient(to right, #8FACCE, #8FACCE, #8FACCE);
            background-size: 200%;
            font-size: 1.2rem;
            color: #000;
            font-family: 'Poppins', sans-serif;
            text-transform: uppercase;
            margin: 1rem 0;
            cursor: pointer;
            transition: .5s;
        }
        .btn2:hover{
            background-position: right;
        }




    </style>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


{{--    from form design--}}

{{--    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/style.css')}}">--}}
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{--end from form--}}


{{--    from all products--}}


    <script>
        // Basic example
        $(document).ready(function () {
            $('#billsTable').DataTable({
                "paging": true // false to disable pagination (or any other option)
            });
            $('.dataTables_length').addClass('bs-select');
        });

        // Basic example
        $(document).ready(function () {
            $('#billsTable').DataTable({
                "pagingType": "simple" // "simple" option for 'Previous' and 'Next' buttons only
            });
            $('.dataTables_length').addClass('bs-select');
        });


    </script>






{{--    from all bills--}}



    <script>
        // Basic example
        $(document).ready(function () {
            $('#billsTable').DataTable({
                "paging": true // false to disable pagination (or any other option)
            });
            $('.dataTables_length').addClass('bs-select');
        });

        // Basic example
        $(document).ready(function () {
            $('#billsTable').DataTable({
                "pagingType": "simple" // "simple" option for 'Previous' and 'Next' buttons only
            });
            $('.dataTables_length').addClass('bs-select');
        });

        $(document).ready(function () {
            $('#billsTable').DataTable();
            $('.dataTables_length').addClass('bs-select');
        });

    </script>

    <script type="text/javascript">
        $(function () {

            $('#productId').bind('change keyup',function () {

                //get value of selected option
                var value = $(this).children("option:selected").attr('value');

                // do something here
                //from me


            }).change();

        });
    </script>






    {{-- end my addition--}}

</head>

<body class="nice-font">

	<!-- Start Preloader Area -->
	<div class="preloader-area">
		<div class="loader-box">
			<div class="loader"></div>
		</div>
	</div>
	<!-- End Preloader Area -->


	<!-- Start Header Area -->
	<header id="header" class="navbar navbar-custom">
		<div class="container blue-color padding-top">
			<div class="row align-items-center d-flex links">
				<div id="logo">
					<a href=""><img src="{{URL::asset('img/logo.png')}}" alt="" title="" /></a>
				</div>
                <b>
				<nav id="nav-menu-containe title" >
					<ul class="nav-menu">
						<li class="menu-has-children nice-font"><a class="nice-font" href="">الأصنــاف</a>
							<ul>
								<li><a class="nice-font" href="{{url('products/create')}}">اضـافة صنـف</a></li>
								<li><a class="nice-font" href="{{url('products/getAll')}}">عـرض الأصنـاف</a></li>
							</ul>
						</li>
						<li class="menu-has-children "><a class="nice-font" href="">الفـواتيـر</a>
							<ul>
								<li><a href="{{url('bills/create')}}">اضـافة فاتورة</a></li>
								<li><a href="{{url('bills/getAll')}}">عـرض الفواتير</a></li>
								<li><a href="">تقرير عن الفواتير</a></li>
							</ul>
						</li>
                        <li class=""><a class="nice-font title" href="{{url('home')}}">الصـفحـة الـرئيسـية</a></li>
                    </ul>
				</nav>
                </b>
			</div>
		</div>
	</header>
	<!-- End Header Area -->


{{--here my page content--}}


    @yield('content')


        <!-- start footer Area -->
	<footer class="footer-area navbar-custom">
		<div class="container">
			<div class="row justify-content-center ">
				<div class="col-lg-12 blue-color">
					<div class="footer-top flex-column blue-color">
						<div class="footer-logo">

							<h4>Follow Us</h4>
						</div>
						<div class="footer-social">
							<a href=""><i class="fa fa-facebook"></i></a>
							<a href=""><i class="fa fa-twitter"></i></a>
							<a href=""><i class="fa fa-dribbble"></i></a>
							<a href=""><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="row footer-bottom justify-content-center color-white">
				<p class="col-lg-8 col-sm-12 footer-text">
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
 &copy; <script>document.write(new Date().getFullYear());</script> كل الحقوق محفوظة لمؤسسة أولاد بلل <i class="fa fa-heart-o" aria-hidden="true"></i>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
			</div>
		</div>
	</footer>
	<!-- End footer Area -->


	<!-- ####################### Start Scroll to Top Area ####################### -->
	<div id="back-top">
		<a title="Go to Top" href="">
			<i class="lnr lnr-arrow-up"></i>
		</a>
	</div>
	<!-- ####################### End Scroll to Top Area ####################### -->

	<script src="{{URL::asset('js/vendor/jquery-2.2.4.min.js')}}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
	 crossorigin="anonymous"></script>
	<script src="{{URL::asset('js/vendor/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
	<script src="{{URL::asset('js/easing.min.js')}}"></script>
	<script src="{{URL::asset('js/hoverIntent.js')}}"></script>
	<script src="{{URL::asset('js/superfish.min.js')}}"></script>
	<script src="{{URL::asset('js/mn-accordion.js')}}"></script>
	<script src="{{URL::asset('js/jquery.ajaxchimp.min.js')}}"></script>
	<script src="{{URL::asset('js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{URL::asset('js/owl.carousel.min.js')}}"></script>
	<script src="{{URL::asset('js/jquery.nice-select.min.js')}}"></script>
	<script src="{{URL::asset('js/isotope.pkgd.min.js')}}"></script>
	<script src="{{URL::asset('js/jquery.circlechart.js')}}"></script>
	<script src="{{URL::asset('js/mail-script.js')}}"></script>
	<script src="{{URL::asset('js/wow.min.js')}}"></script>
	<script src="{{URL::asset('js/main.js')}}"></script>
</body>

</html>
