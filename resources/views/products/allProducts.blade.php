@extends('sections.headerAndFooter')
@section('content')

    <div class="flex-center all-bills-margin-sides padding-top">
        <br class="margin-top">
        @if(Session::has('deleteSuccess'))

        @endif
        <br>
    </div>

    <div class="flex-center all-bills-margin-sides padding-top">
        <br class="margin-top">
        @if(Session::has('deleteSuccess'))
            <div class="alert alert-danger all-bills-margin-sides padding-top" role="alert">
                تم الحذف بنجاح
            </div>
        @endif
        <br>
    </div>



    <div class="flex-center all-bills-margin-sides padding-top">
        @if(Session::has('successful'))
            <div class="alert alert-success all-bills-margin-sides padding-top" role="alert">
                تم التعديل بنجاح
            </div>
        @endif
        <br>
    </div>

    <div class="title flex-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.7s">
        قـائمـة الأصـنــاف
    </div>



    <div class="full-height all-products-margin-sides">
        <table id="productsTable" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
            <thead dir="rtl" align="center" bgcolor="#8FACCE">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">الصـنف</th>
                        <th scope="col">السـعر</th>
                        <th scope="col">الإجـراءات</th>
                    </tr>
                    </thead>
                    <tbody align="center" dir="rtl">

                    <div>
                        <input type="hidden" value="{{$id = 1}}">
                    </div>

                    @foreach($products as $product)
                    <tr>
                        <th scope="row">{{$id++}}</th>
                        <td>{{$product-> product_name}}</td>
                        <td>{{$product-> product_price}}</td>

                        <td>
                            <a href="{{url('products/edit/'.$product-> id)}}" class="btn btn-success btn-rounded btn-sm m-0"> تعديل </a>
                            <a href="{{url('products/delete/'.$product-> id)}}" class="btn btn-danger btn-rounded btn-sm m-0"
                               onclick="return confirm('إذا قمت بحذف صنف لا يمكن استرجاعه، هل تريد الحذف؟')">  حـذف </a>
                        </td>
                    </tr>

                    @endforeach

                    </tbody>
                </table>
    </div>
@stop
