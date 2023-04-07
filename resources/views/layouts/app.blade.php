<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Voting App</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased text-gray-900 bg-background">
<header class="flex items-center justify-between px-8 py-4">
    <a href="#"><img src="{{ asset('img/logo.svg') }}"></a>
    <div class="flex items-center space-x-2">
        @if (Route::has('login'))
            @auth
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </a>
                </form>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                       class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                @endif
            @endauth
        @endif

        <a href="#">
            <img src="https://www.gravatar.com/avatar/0000000000000000000000000?d=mp" alt="avatar"
                 class="w-10 h-10 rounded-full">
        </a>
    </div>
</header>
<main class="container md:grid md:grid-cols-5 md:gap-8 mx-auto max-w-auto space-x-6">
    <div
        class="md:hidden sticky top-3 flex items-center justify-center w-12 h-12 bg-blue-600 text-center rounded-full text-white">
        <span>
            +
        </span>
    </div>
    <div class="bg-gradient-to-b from-blue-500 to-white rounded-xl p-[1px] h-fit">
        <div
            class="hidden md:sticky md:top-3 md:block col-span-1 mr-5 text-center border rounded-xl w-full p-6 space-y-6 bg-white h-fit">
            <div class="w-full mt-6">
                <h4 class="font-bold text-lg">Add an idea</h4>
                <p class="text-sm">Let us know what you would like and we'll take a look over</p>
            </div>
            <form action="" method="post" class="space-y-4">
                <div>
                    <input type="text" placeholder="Your idea"
                           class="w-full focus:ring-0 border-none focus:outline-0 px-6 py-2 bg-gray-100 rounded-3xl font-bold text-xs hover:bg-gray-200 transition ease-in-out duration-75 ">
                </div>
                <div>
                    <select name="" id=""
                            class="focus:ring-0 border-none w-full rounded-xl px-4 py-2 bg-gray-100 hover:bg-gray-200 text-xs font-bold transition ease-in-out duration-75 text-gray-500">
                        <option value="1">Filter 1</option>
                        <option value="2">Filter 2</option>
                        <option value="3">Filter 3</option>
                    </select>
                </div>
                <div>
                <textarea
                    name=""
                    id=""
                    cols="20"
                    rows="10"
                    class="w-full focus:ring-0 border-none outline-none px-6 py-2 bg-gray-100 rounded-3xl font-bold text-xs hover:bg-gray-200 transition ease-in-out duration-75"
                    placeholder="Describe your idea"></textarea>
                </div>
                <div class="flex flex-wrap justify-between space-x-2">
                    <div>

                        <button
                            class="text-xs md:text-sm flex items-center border rounded-xl py-2 px-6 bg-gray-200 hover:bg-gray-300 transition ease-in-out duration-75">
                            <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" class="w-3 h-3">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M18.375 12.739l-7.693 7.693a4.5 4.5 0 01-6.364-6.364l10.94-10.94A3 3 0 1119.5 7.372L8.552 18.32m.009-.01l-.01.01m5.699-9.941l-7.81 7.81a1.5 1.5 0 002.112 2.13"/>
                            </svg>
                            <p class="text-gray-600 font-bold">Attach</p>
                        </button>
                    </div>
                    <div>
                        <button
                            class="border rounded-xl py-2 px-7 text-sm font-bold bg-blue-500 text-white hover:bg-blue-600 transition ease-in-out duration-75"
                            type="submit">
                            Submit
                        </button>

                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="col-span-4">
        <nav class="flex justify-between text-xs items-center space-x-8">
            <ul class="flex uppercase font-semibold space-x-10 border-b-4 pb-4 ">
                <li><a href="" class="border-b-4 pb-4 border-b-blue-500">All ideas (87)</a></li>
                <li><a href=""
                       class="border-b-4 pb-4 text-gray-400 transition duration-500 ease-in b-4 pb-3 hover:border-b-blue-500 ">Considering
                        (6)</a>
                </li>
                <li><a href=""
                       class="border-b-4 pb-4 text-gray-400 transition duration-500 ease-in b-4 pb-3 hover:border-b-blue-500 ">In
                        Progress (44)</a>
                </li>
            </ul>
            <ul class="flex uppercase font-semibold space-x-10 border-b-4 pb-4 ">
                <li><a href="" class="border-b-4 pb-4 border-b-blue-500">Implemented</a></li>
                <li><a href=""
                       class="border-b-4 pb-4 text-gray-400 transition duration-500 ease-in b-4 pb-3 hover:border-b-blue-500 ">Closed</a>
                </li>
            </ul>
        </nav>
        <div class="mt-8">
            {{ $slot }}
        </div>
    </div>

</main>
</body>
</html>
