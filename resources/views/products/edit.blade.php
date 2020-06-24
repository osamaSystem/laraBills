@extends('sections.headerAndFooter')
@section('content')

    <!-- start banner Area -->
    <section class="home-banner-area" >
        <div class="container">
            <div class="row fullscreen d-flex align-items-center">
                <div class="banner-content col-lg-6 col-md-12 justify-content-center ">
                    <div class="wow fadeInUp title" data-wow-duration="0.5s" data-wow-delay="0.8s" align="center">تحـديـث صـنـف </div>

                    <br>
                    @if(Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{Session::get('success')}}
                        </div>
                    @endif
                    <br>


                    <form method="POST" action="{{url('products/update/'.$product -> id)}}">
                        @csrf
                        {{-- <input name="_token" value="{{csrf_token()}}">--}}

                        <div class="login-content" align="right">

                            <label for="productNameId" class="lable-font">اسم الصنف:</label>

                            <input type="text" class="form-control" id="productNameId" value="{{$product -> product_name}}" name="product_name" placeholder="ادخل الاسم هنا">
                            @error('product_name')
                            <small class = "form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form-group" align="right">
                            <label for="productPriceId" class="lable-font" >السعر:</label>
                            <input type="number" class="form-control" id="productPriceId" value="{{$product -> product_price}}" name="product_price" placeholder="ادخل السعر هنا">
                            @error('product_price')
                            <small class = "form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="col-auto my-1">
                            <button type="submit" class="btn2">تحـديث</button>
                        </div>

                    </form>

                </div>
                <div class="banner-img col-lg-6 col-md-6 align-self-start">
                    <img class="img-fluid photo-margin-top" src="{{URL::asset('img/bg.svg')}}" alt="">
                </div>
            </div>
        </div>
    </section>

@stop
