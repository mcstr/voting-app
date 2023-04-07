<?php

namespace App\Http\Livewire\Stats;

use App\Models\Order;
use Livewire\Component;


class OrdersCount extends Component
{
    public int $ordersCount;
    public int $dayOption = 30;
    public $daysOptions;


    public function mount()
    {
        $this->updateStats();
        $this->daysOptions = collect([30, 60, 90]);
    }


    public function updateStats()
    {
        $this->ordersCount = Order::query()
            ->where('created_at', '>=', now()->subDay(intval($this->dayOption)))
            ->count();
    }

    public function render()
    {
        return view('livewire.stats.orders-count');
    }
}
