<?php

namespace Tests\Fixtures\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property-read \Tests\Fixtures\Models\CashierDetail $cashier
 */
class Payment extends Model
{
    public function getCashierAttribute(): CashierDetail
    {
        return new CashierDetail();
    }
}