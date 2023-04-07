<div
    class="mt-4"
    x-data="{
        availableYears: @entangle('availableYears'),
        selectedYear: @entangle('selectedYear'),
        selectedYearsOrders: @entangle('selectedYearsOrders'),
        previousYearsOrders: @entangle('previousYearsOrders'),
        totalOrdersSelectedYear: @entangle('totalOrdersSelectedYear'),
        totalOrdersPreviousYear: @entangle('totalOrdersPreviousYear'),


        init(){
            const ctx = $refs.canvas.getContext('2d');
            const chart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                    datasets: [{
                        label: `${this.selectedYear - 1} Orders` ,
                        data: this.previousYearsOrders,
                        borderWidth: 1
                    }, {
                        label: `${this.selectedYear} Orders`,
                        data: this.selectedYearsOrders,
                        backgroundColor: 'lightgreen',
                        borderWidth: 1
                    }]
                }
            });
            Livewire.on('updateTheChart', ()=> {
                chart.data.datasets[0].data  = this.previousYearsOrders;
                chart.data.datasets[0].label  = `${this.selectedYear - 1} Orders`;

                chart.data.datasets[1].data = this.selectedYearsOrders;
                chart.data.datasets[1].label = `${this.selectedYear} Orders`;

                chart.update();
            });



        }
    }"
>
    <span>Year:</span>
    <select name="selectedYear" id="selectedYear" class="border" wire:model="selectedYear" wire:change="updateValues">
        @foreach($availableYears as $year)
            <option value="{{$year}}">{{$year}}</option>
        @endforeach
    </select>

    <div>
        <span>Total <span x-text="selectedYear"></span>: <span x-text="totalOrdersSelectedYear"></span></span>
    </div>

    <div>
        <span>Total <span x-text="selectedYear - 1"></span>: <span x-text="totalOrdersPreviousYear"></span></span>
    </div>
    <canvas id="myChart" x-ref="canvas" wire:ignore></canvas>
</div>
