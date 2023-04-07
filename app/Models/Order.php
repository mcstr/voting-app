<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Order extends Model
{
    use HasFactory;


    public function scopeGetYearOrders(Builder $query, $year) {
        return $query->whereYear('created_at', $year);
    }

    public function scopeGroupByMonth(Builder $query) {
        return $query->selectRaw('month(created_at) as month')
            ->selectRaw('count(*) as count')
            ->orderBy('month')
            ->groupBy('month')
            ->pluck('count', 'month')
            ->values()
            ->toArray();
    }
}
