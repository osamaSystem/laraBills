@extends('sections.headerAndFooter')
@section('content')

	<div >
{{--	<div class="container">--}}
		<div >
{{--		<div class="img">--}}
{{--			<img src="{{URL::asset('img/bg.svg')}}">--}}
		</div>
{{--		<div class="login-content">--}}
		<div >
			<form action="">
{{--				<img src="{{URL::asset('img/avatar.svg')}}">--}}
				<h2 class="title">Welcome</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-product-hunt"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>الصنف</h5>
           		   		<input type="text" class="input">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i">
           		    	<i class="fas fa-money"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>السعر</h5>
           		    	<input type="number" class="input">
            	   </div>
            	</div>
            	<input type="submit" class="btn" value="Login">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="{{URL::asset('js/main.js')}}"></script>

@stop
