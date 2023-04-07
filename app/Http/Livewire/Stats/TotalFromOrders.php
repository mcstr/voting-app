<?php

namespace App\Http\Livewire\Stats;

use App\Models\Order;
use Livewire\Component;

class TotalFromOrders extends Component
{
    public $dayOption = 30;
    public $daysOptions;
    public $totalFromOrders;


    public function mount()
    {
        $this->updateStats();
        $this->daysOptions = collect([30, 60, 90]);
    }


    public function updateStats()
    {
        $this->totalFromOrders = (new \NumberFormatter('de_DE', \NumberFormatter::CURRENCY))->formatCurrency(Order::query()
                ->where('created_at', '>=', now()->subDay($this->dayOption))
                ->sum('total') / 100, 'EUR');
    }

    public function render()
    {
        return view('livewire.stats.total-from-orders');
    }
}
