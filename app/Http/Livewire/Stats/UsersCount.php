<?php

namespace App\Http\Livewire\Stats;

use App\Models\User;
use Livewire\Component;

class UsersCount extends Component
{
    public $daysOptions;
    public int $dayOption = 30;
    public int $usersCount;


    public function mount()
    {
        $this->updateStats();
        $this->daysOptions = collect([30, 60, 90]);

    }

    public function updateStats()
    {
        $this->usersCount = User::query()
            ->where('created_at', '>=', now()->subDay(intval($this->dayOption)))
            ->count();

    }

    public function render()
    {
        return view('livewire.stats.users-count');
    }
}
