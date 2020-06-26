@extends('sections.print')
@section('content')

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>




<div class="flex-center all-bills-margin-sides padding-top">
    <br class="margin-top">
    <br>
</div>


<div class="flex-center lable-font" align="center" >
    مـخازن أولاد بـلل
    <br>
    فـاتورة عميــل
</div>

<div class="all-bills-padding-top all-bills-margin-sides">

<table id="billsTable" width="90%" class="" border="0" cellspacing="0">
    <tbody dir="rtl"  align="center">
    <tr  width="90%" dir="rtl">
        <th align="right" scope="col">الرقم المتسلسل: {{$allBill->id}} </th>
        <th align="left" scope="col">التاريخ: {{$allBill->date}} </th>
        </tr>
   <tr >
       <th align="right" scope="col">الترحيلات: {{$allBill-> migrator}} </th>
       <th align="left" scope="col">المشتري: {{$allBill-> customer}} </th>
   </tr>
    </tbody>
</table>

</div>

    <div >

    <div class="form-group all-products-margin-sides search-margin" align="right">
        التفاصيل المالية:
    </div>



    <div class="all-products-margin-sides">
    <table id="billsTable" class="table table-bordered table-sm" cellspacing="0" >
            <thead dir="rtl" align="center" bgcolor="#bab4b4">
            <tr >
                <th  scope="col">الصـنف</th>
                <th  scope="col">الكمية</th>
                <th  scope="col">المبلغ</th>
            </tr>
            </thead>
            <tbody dir="rtl" id="billsTbodyId" name="billsTbodyId" align="center">


                <tr>
                    <td>{{$allBill-> product}}</td>
                    <td>{{$allBill-> amount}}</td>
                    <td>{{$allBill-> total_price}}</td>

                </tr>

            </tbody>
        </table>
</div>
</div>

    <script type="text/javascript">
        window.print();
    </script>

@stop
