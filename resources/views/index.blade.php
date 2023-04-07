<x-app-layout>
    <div class="filters flex space-x-6">
        <div class="w-1/3">
            <select name="category" id="category" class="w-full rounded-xl px-4 py-2 border-none focus:ring-0">
                <option value="1">Category 1</option>
                <option value="2">Category 2</option>
                <option value="3">Category 3</option>
            </select>
        </div>
        <div class="w-1/3">
            <select name="otherFilters" id="otherFilters" class="w-full rounded-xl px-4 py-2 border-none focus:ring-0">
                <option value="1">Filter 1</option>
                <option value="2">Filter 2</option>
                <option value="3">Filter 3</option>
            </select>
        </div>

        <div class="w-2/3 relative">
            <input type="search" placeholder="Find an idea"
                   class="w-full rounded-xl bg-white px-4 py-2 pl-8 border-none placeholder-gray-900 focus:ring-0">

            <div class="absolute flex top-0 h-full items-center ml-2">
                <svg class="w-4 text-gray-700 w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                     viewBox="0 0 24 24"
                     stroke-width="1.5"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"/>
                </svg>
            </div>
        </div>
    </div>
    <x-idea/>
</x-app-layout>
