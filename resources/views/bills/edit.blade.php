@extends('sections.headerAndFooter')
@section('content')

    <!-- start banner Area -->
    <section class="home-banner-area " >
        <div class="container ">
            <div class="row fullscreen d-flex align-items-center all-bills-padding-top all-bills-margin-bottom">
                <div class="banner-content col-lg-6 col-md-12 justify-content-center ">
                    <div class="wow fadeInUp title margin-top" data-wow-duration="0.5s" data-wow-delay="0.8s" align="center">تعديل فاتورة</div>

                    <br>
                    @if(Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{Session::get('success')}}
                        </div>
                    @endif
                    <br>

                    <form method="POST" action="{{url('bills/update/'.$allBill ->id)}}">
                        @csrf

                        <div align="right">
                            <label class="my-1 mr-2 lable-font" for="productId">حدد الصنف من القائمة:</label>
                            <select class="form-control" id="productId" name="product2" onchange="getValue()">
                                <option selected> قائمة الأصناف... </option>
                                @foreach ($products as $product)
                                    <option value="{{$product -> product_price}}">
                                        {{$product -> product_name}}
                                    </option>
                                @endforeach
                            </select>
                            @error('product_name')
                            <small class = "form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>

                        <input type="hidden" id="productId2" class="form-control" name="product">

                        <div class="form-group" align="right">
                            <label for="amountId" class="lable-font">الكمية:</label>
                            <input type="number" class="form-control" id="amountId" value="{{$allBill -> amount}}" name="amount" onchange="setTotalPrice()" placeholder="العدد المطلوب">
                            @error('amount')
                            <small class = "form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>


                        <div class="form-group" align="right">
                            <fieldset disabled >
                                <label for="totalPriceId" class="lable-font">السعر:</label>
                                <input type="number" class="form-control" value="{{$allBill -> total_price}}" id="totalPriceId"
                                       placeholder="سيظهر السعر الكلي هنا">
                                @error('total_price')
                                <small class = "form-text text-danger">{{$message}}</small>
                                @enderror
                            </fieldset>

                            <input type="hidden" id="totalPriceId2" class="form-control" name="total_price">

                        </div>

                        <div class="form-group" align="right">
                            <label for="dateId" class="lable-font">التاريخ:</label>
                            <input type="date" class="form-control" id="dateId" value="{{$allBill -> date}}" name="date" placeholder="حدد تاريخ الفاتورة">
                            @error('date')
                            <small class = "form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>


                        <div class="form-group" align="right">
                            <label for="migratorId" class="lable-font">الترحيلات:</label>
                            <input type="text" class="form-control" id="migratorId" value="{{$allBill -> migrator}}" name="migrator" placeholder="ادخل الترحيلات هنا">
                            @error('migrator')
                            <small class = "form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>


                        <div class="form-group" align="right">
                            <label for="customerId" class="lable-font">المشتري:</label>
                            <input type="text" class="form-control" id="customerId" value="{{$allBill -> customer}}" name="customer" placeholder="ادخل اسم المشتري هنا">
                            @error('customer')
                            <small class = "form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>

                        <div class="result"></div>

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

    <script src="http://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <script type="text/javascript">
        // $(document).on('change','#amountId',function(){

        ///////////////

        var product = document.getElementById('productId');////
        var product2 = document.getElementById('productId2');
        var amount = document.getElementById('amountId');
        var totalPrice = document.getElementById('totalPriceId');
        var totalPrice2 = document.getElementById('totalPriceId2');

        function getValue(){
            if(amount!=null) {
                totalPrice.value = product.value * amount.value;
                totalPrice2.value = product.value * amount.value;
                product2.value = product.options[product.selectedIndex].text;
            }else{
                totalPrice.value = product.value;
                totalPrice2.value = product.value;
                product2.value = product.options[product.selectedIndex].text;

            }
        }


        function setTotalPrice(){
            if(product!=null && amount!=null){
                totalPrice.value = amount.value * product.value;
                totalPrice2.value = amount.value * product.value;
            }else if(product!=null && amount==null){
                totalPrice.value = product.value;
                totalPrice2.value = product.value;
            }
        }

    </script>

@stop



