<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Http\Request;
use LaravelDaily\Invoices\Invoice;
use LaravelDaily\Invoices\Classes\Buyer;
use LaravelDaily\Invoices\Classes\InvoiceItem;


class InvoiceController extends Controller
{

public function index()
{
    $invoice = '';
    $customer = new Buyer([
        'name' => 'John Doe',
        'custom_fields' => [
            'email' => 'test@example.com',
        ],
    ]);
    set_time_limit(0);
    $item = (new InvoiceItem())->title('Service 1')->pricePerUnit(2);

//    try {
        $invoice = Invoice::make()
            ->buyer($customer)
            ->discountByPercent(10)
            ->taxRate(15)
            ->shipping(1.99)
            ->addItem($item);
//    } catch (BindingResolutionException $e) {
//    } catch (\Exception $e) {
//    }

//    try {
        return $invoice->stream();
//    } catch (\Exception $e) {
//    }
//    return 'catched exeption';
}
}
