<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Faker\Core\Number;
use Livewire\Component;

class ChartOrders extends Component
{

    public $availableYears;
    public $selectedYear;
    public $selectedYearsOrders;
    public $previousYearsOrders;
    public $totalOrdersSelectedYear;
    public $totalOrdersPreviousYear;


    public function mount() {
        $this->selectedYear = date('Y');
        $this->getAvailableYears();
        $this->updateOrdersCount();
        $this->calculateTotals();
    }

    public function getAvailableYears() {
        $this->availableYears = Order::query()
            ->selectRaw('YEAR(created_at) as years')
            ->orderByDesc('years')
            ->distinct()
            ->pluck('years')
            ->values()
            ->toArray();
    }

    public function updateOrdersCount() {
        $this->previousYearsOrders = \App\Models\Order::getYearOrders($this->selectedYear - 1)
            ->groupByMonth();
        $this->selectedYearsOrders = \App\Models\Order::getYearOrders($this->selectedYear)
            ->groupByMonth();
    }

    public function calculateTotals() {
        $fmt = new \NumberFormatter('de_DE', \NumberFormatter::CURRENCY);
        $this->totalOrdersSelectedYear = $fmt->formatCurrency(Order::getYearOrders($this->selectedYear)
            ->sum('total'), "EUR");
        $this->totalOrdersPreviousYear = $fmt->formatCurrency(Order::getYearOrders($this->selectedYear - 1)
        ->sum('total'), "EUR");
    }

    public function updateValues() {
        $this->updateOrdersCount();
        $this->calculateTotals();
        $this->emit('updateTheChart');

    }



    public function render()
    {
        return view('livewire.chart-orders');
    }
}
