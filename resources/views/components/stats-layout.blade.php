@props(['name', 'stat', 'daysOptions'])

<div class="bg-white shadow-md rounded-lg px-4 py-6">
    <div class="flex justify-between items-center">
        <h4 class="text-gray-500 font-medium">{{ $name }}</h4>
        <div class="flex space-x-2 items-center">
            <select name="usersDays" id="userDays" class="border bg-gray-100" wire:model="dayOption"
                    wire:change="updateStats">
                @foreach ($daysOptions as $dayOption)
                    <option
                        value="{{ $dayOption }}">{{ $dayOption }}</option>
                @endforeach
            </select>
            <span class="mt-auto">Days</span>
        </div>
    </div>
    <div class="text-3xl font-bold mt-4">{{ $stat }}</div>
</div>
