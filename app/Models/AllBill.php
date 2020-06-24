<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static paginate(int $int)
 */
class AllBill extends Model
{
    protected $table = 'allBills';
    protected $fillable = ['product','amount','total_price','date','migrator','customer'];
    protected $hidden = [];
}
