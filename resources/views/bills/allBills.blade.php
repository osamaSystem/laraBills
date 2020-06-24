@extends('sections.headerAndFooter')
@section('content')

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>



<div class="flex-center all-bills-margin-sides padding-top">
    @if(Session::has('noThing'))
        <div class="alert alert-success all-bills-margin-sides padding-top" role="alert">

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



<div class="flex-center all-bills-margin-sides padding-top">
    <br class="margin-top">
    @if(Session::has('deleteSuccess'))
        <div class="alert alert-danger all-bills-margin-sides padding-top" role="alert">
            تم الحذف بنجاح
        </div>
    @endif
    <br>
</div>



<div class="title flex-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.7s">
    قـائمـة الفـواتيـر
</div>


<div >

<div class=" full-height all-bills-margin-sides">
    <table id="billsTable" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%" >
            <thead dir="rtl" align="center" bgcolor="#8FACCE">
            <tr >
                <th scope="col">#</th>
                <th scope="col">الصـنف</th>
                <th scope="col">الكمية</th>
                <th scope="col">المبلغ</th>
                <th scope="col">التاريخ</th>
                <th scope="col">الترحيلات</th>
                <th scope="col">المشتري</th>
                <th scope="col">الإجـراءات</th>
            </tr>
            </thead>
            <tbody dir="rtl" align="center">

            <div>
                <input type="hidden" value="{{$id = 1}}">
            </div>

            @foreach($allBills as $allBill)
                <tr>
                    <th scope="row">{{$id++}}</th>
                    <td>{{$allBill-> product}}</td>
                    <td>{{$allBill-> amount}}</td>
                    <td>{{$allBill-> total_price}}</td>
                    <td>{{$allBill-> date}}</td>
                    <td>{{$allBill-> migrator}}</td>
                    <td>{{$allBill-> customer}}</td>
                    <td>
{{--                        <a href="" class="btn btn-info btn-rounded btn-sm m-0">  طباعة </a>--}}
                        <a href="{{url('bills/edit/'.$allBill-> id)}}" class="btn btn-success btn-rounded btn-sm m-0"> تعديل  </a>
                        <a href="{{url('bills/delete/'.$allBill-> id)}}" class="btn btn-danger btn-rounded btn-sm m-0"
                        onclick="return confirm('إذا قمت بحذف فاتورة لا يمكن استرجاعها، هل تريد الحذف؟')">  حـذف </a>
                    </td>
                </tr>

            @endforeach

            </tbody>
        </table>
</div>
    <div class="all-bills-margin-sides bagination">
            {{$allBills->links()}}
    </div>
</div>
@stop
