<!DOCTYPE html>
<html dir="rtl" lang="ar">
    <head>
        <title>{{ $invoice->name }}</title>
{{--        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>--}}

        <link rel="stylesheet" href="{{ asset('/vendor/invoices/bootstrap.min.css') }}">

        <style type="text/css" media="screen">
            * {
                font-family: "DejaVu Sans";
            }
            html {
                margin: 0;
            }
            body {
                font-size: 10px;
                margin: 36pt;
            }
            body, h1, h2, h3, h4, h5, h6, table, th, tr, td, p, div {
                line-height: 1.1;
            }
            .party-header {
                font-size: 1.5rem;
                font-weight: 400;
            }
            .total-amount {
                font-size: 12px;
                font-weight: 700;
            }
        </style>
    </head>

    <body>
        {{-- Header --}}
        @if($invoice->logo)
            <img src="{{ URL::asset('img/logo.png') }}" alt="logo" height="100">
        @endif
        <table class="table mt-5">
            <tbody>
                <tr>
                    <td class="border-0 pl-0" width="70%">
                        <h4 class="text-uppercase">
                            <strong>فاتورة من مخازن أولاد بلل</strong>
                        </h4>
                    </td>
                    <td class="border-0 pl-0">
{{--                        <p>{{ __('invoices::invoice.serial') }} <strong>{{ $invoice->getSerialNumber() }}</strong></p>--}}
                        <p>التاريخ: <strong>{{ $invoice->getDate() }}</strong></p>
                    </td>
                </tr>
            </tbody>
        </table>

        {{-- Seller - Buyer --}}
        <table class="table">
            <thead>
                <tr>
                    <th class="border-0 pl-0 party-header" width="48.5%">
                        {{ __('invoices::invoice.seller') }}
                    </th>
                    <th class="border-0" width="3%"></th>
                    <th class="border-0 pl-0 party-header">
                        {{ __('invoices::invoice.buyer') }}
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="px-0">
                        @if($invoice->seller->name)
                            <p class="seller-name">
                                <strong>{{ $invoice->seller->name }}</strong>
                            </p>
                        @endif

                        @if($invoice->seller->address)
                            <p class="seller-address">
                                {{ __('invoices::invoice.address') }}: {{ $invoice->seller->address }}
                            </p>
                        @endif

                        @if($invoice->seller->code)
                            <p class="seller-code">
                                {{ __('invoices::invoice.code') }}: {{ $invoice->seller->code }}
                            </p>
                        @endif

                        @if($invoice->seller->vat)
                            <p class="seller-vat">
                                {{ __('invoices::invoice.vat') }}: {{ $invoice->seller->vat }}
                            </p>
                        @endif

                        @if($invoice->seller->phone)
                            <p class="seller-phone">
                                {{ __('invoices::invoice.phone') }}: {{ $invoice->seller->phone }}
                            </p>
                        @endif

                        @foreach($invoice->seller->custom_fields as $key => $value)
                            <p class="seller-custom-field">
                                {{ ucfirst($key) }}: {{ $value }}
                            </p>
                        @endforeach
                    </td>
                    <td class="border-0"></td>
                    <td class="px-0">
                        @if($invoice->buyer->name)
                            <p class="buyer-name">
                                <strong>{{ $invoice->buyer->name }}</strong>
                            </p>
                        @endif

                        @if($invoice->buyer->address)
                            <p class="buyer-address">
                                {{ __('invoices::invoice.address') }}: {{ $invoice->buyer->address }}
                            </p>
                        @endif

                        @if($invoice->buyer->code)
                            <p class="buyer-code">
                                {{ __('invoices::invoice.code') }}: {{ $invoice->buyer->code }}
                            </p>
                        @endif

                        @if($invoice->buyer->vat)
                            <p class="buyer-vat">
                                {{ __('invoices::invoice.vat') }}: {{ $invoice->buyer->vat }}
                            </p>
                        @endif

                        @if($invoice->buyer->phone)
                            <p class="buyer-phone">
                                {{ __('invoices::invoice.phone') }}: {{ $invoice->buyer->phone }}
                            </p>
                        @endif

                        @foreach($invoice->buyer->custom_fields as $key => $value)
                            <p class="buyer-custom-field">
                                {{ ucfirst($key) }}: {{ $value }}
                            </p>
                        @endforeach
                    </td>
                </tr>
            </tbody>
        </table>

         التفاصيل

{{--        <form method="POST" action="{{url('bills/update/'.$allBill ->id)}}">--}}
            @csrf

        <div class=" full-height all-bills-margin-sides">
            <table id="billsTable" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%" >
                <thead dir="rtl" align="center" bgcolor="#8FACCE">
                <tr >
                    <th scope="col">الصـنف</th>
                    <th scope="col">الكمية</th>
                    <th scope="col">المبلغ</th>
                    <th scope="col">التاريخ</th>
                    <th scope="col">الترحيلات</th>
                    <th scope="col">المشتري</th>
                </tr>
                </thead>
                <tbody dir="rtl" id="billsTbodyId" name="billsTbodyId" align="center">


                    <tr>
{{--                        <th scope="row">{{$allBill-> product}}</th>--}}
{{--                        <td>{{$allBill-> amount}}</td>--}}
{{--                        <td>{{$allBill-> total_price}}</td>--}}
{{--                        <td>{{$allBill-> date}}</td>--}}
{{--                        <td>{{$allBill-> migrator}}</td>--}}
{{--                        <td>{{$allBill-> customer}}</td>--}}
                    </tr>

                </tbody>
            </table>
        </div>


        {{--        </form>--}}



        {{--        @if($invoice->notes)--}}
{{--            <p>--}}
{{--                {{ trans('invoices::invoice.notes') }}: {!! $invoice->notes !!}--}}
{{--            </p>--}}
{{--        @endif--}}

        <p>
{{--            {{ trans('invoices::invoice.amount_in_words') }}: {{ $invoice->getTotalAmountInWords() }}--}}
        </p>
        <p>
            نسعد بتقديم أفضل الخدمات
        </p>

        <script type="text/php">
            if (isset($pdf) && $PAGE_COUNT > 1) {
                $text = "Page {PAGE_NUM} / {PAGE_COUNT}";
                $size = 10;
                $font = $fontMetrics->getFont("Verdana");
                $width = $fontMetrics->get_text_width($text, $font, $size) / 2;
                $x = ($pdf->get_width() - $width);
                $y = $pdf->get_height() - 35;
                $pdf->page_text($x, $y, $text, $font, $size);
            }
        </script>
    </body>
</html>
