<x-app-layout>
    <div
        class="flex space-x-2 items-center hover:animate-pulse transition ease-in-out duration-75 cursor-pointer">
        <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
             class="w-4 h-4">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5"/>
        </svg>
        <div>Back to ideas</div>
    </div>
    <div class="space-y-8">
        <div class="space-x-10 mt-8 text-center bg-white rounded-xl p-4">
            <div class="flex space-x-4 w-full px-6">
                <div class="flex-none h-20 w-20">
                    <a href="#">
                        <img class="object-cover rounded-xl h-20 w-20"
                             src="https://source.unsplash.com/200x200/?face&crop=face&v=1"
                             alt="avatar">
                    </a>
                </div>
                <div class="space-y-6">
                    <h3 class="text-2xl text-left hover:underline">A random title can go here</h3>
                    <div>
                        <p class="text-justify text-gray-600">Lorem ipsum dolor sit amet, consectetur
                            adipisicing
                            elit. Ad
                            mollitia nihil veniam! Aliquid architecto at aut, autem beatae consectetur consequatur cum
                            cupiditate earum error est eum exercitationem explicabo facere, harum hic, iure laboriosam
                            laborum
                            minima nobis odio officia optio provident quasi quod repellendus rerum similique vero
                            voluptas
                            voluptate. Adipisci alias amet asperiores aut consequatur consequuntur culpa debitis dolorem
                            doloremque dolores doloribus ea earum eligendi fuga ipsa ipsam iusto numquam odit officia
                            perferendis porro quaerat, quasi repellat reprehenderit sapiente vel veniam voluptate.
                            Commodi
                            earum
                            eos, illo inventore quo sint tenetur voluptates! Aspernatur aut blanditiis eaque eius
                            excepturi
                            magnam perferendis, placeat quidem quis reprehenderit sapiente sed totam veniam vitae
                            voluptates? A
                            alias fuga illum quod voluptatibus? A animi culpa dicta est exercitationem expedita in
                            laudantium
                            molestias, mollitia natus nemo neque nobis non numquam odio quidem reiciendis repellat,
                            repellendus
                            saepe sit tempora tenetur ut velit veniam voluptatum. A, ad autem commodi consequuntur,
                            distinctio
                            error esse illum minus nobis quas similique ullam vel voluptatem! Nam, repellendus vel? Ab,
                            accusantium aliquam dignissimos expedita ipsam odit officia! Corporis dignissimos dolorum,
                            ipsam
                            iusto nemo nisi officia voluptatem. Culpa dolore quae qui. Dolore doloremque ea illum in,
                            incidunt
                            laborum natus nemo placeat quod sint tempore unde velit, veritatis!</p>
                    </div>
                    <div class="flex justify-between">
                        <div class="flex text-gray-400 space-x-2">
                            <p class="font-bold text-gray-900">John Doe</p>
                            <p>&bull;</p>
                            <p class="font-bold">10 hours ago</p>
                            <p>&bull;</p>
                            <p class="font-bold">Category</p>
                            <p>&bull;</p>
                            <p class="font-bold text-gray-900"><a href="#">3 Comments</a></p>
                        </div>
                        <div class="flex space-x-8">
                            <button
                                class="border-none px-8 py-2 bg-gray-200 rounded-3xl font-bold uppercase text-xs hover:bg-gray-300 transition ease-in-out duration-75">
                                Open
                            </button>
                            <button
                                class="relative border-none p-3 bg-gray-100 rounded-3xl font-bold uppercase text-xs hover:bg-gray-200 transition ease-in-out duration-75">
                                <svg fill="currentColor" width="24" height="6">
                                    <path
                                        d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z"
                                        style="color: rgba(163, 163, 163, .5)"/>
                                </svg>
                                <ul class="absolute left-8 p-4 bg-white drop-shadow-xl rounded-xl w-36 font-semibold">
                                    <li class="hover:bg-gray-100 transition ease-in-out duration-75 rounded-xl">
                                        Mark as spam
                                    </li>
                                    <li class="hover:bg-gray-100 transition ease-in-out duration-75 rounded-xl">
                                        Delete Post
                                    </li>
                                </ul>
                            </button>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <div class="flex justify-between">
            <div class=" relative p-6">
                <button
                    type="button"
                    class="h-11 border rounded-xl py-2 px-12 text-sm font-bold bg-blue-500 text-white hover:bg-blue-600 transition ease-in-out duration-75">
                    Reply
                </button>
                <div class="absolute top-16 left-14 flex bg-red-400 text-black z-10 rounded-xl p-6">
                    <form action="">
                        @csrf
                        <div>
                                <textarea name="" id="" cols="30" rows="10"
                                          placeholder="Go ahead, don't be shy. Share your thoughts.."
                                          class="w-full focus:ring-0 border-none outline-none px-6 py-2 bg-gray-100 rounded-3xl hover:bg-gray-200 transition ease-in-out duration-75 w-48"
                                ></textarea>
                        </div>
                        <div class="flex items-center space-x-3">
                            {{--                                <button type="button"--}}
                            {{--                                        class="flex items-center justify-center h-11 w-1/2 text-sm bg-blue text-white font-semibold rounded-xl border border-blue hover:bg-blue-hover transition duration-150 ease-in px-6 py-3"--}}
                            {{--                                >Post Comment--}}
                            {{--                                </button>--}}
                            here
                            <button>here</button>
                        </div>
                    </form>
                </div>
                <select name="" id=""
                        class="h-11 rounded-xl bg-gray-200 hover:bg-gray-300 transition ease-in-out duration-75">
                    <option value="">Select Value</option>
                    <option value="">Value 1</option>
                    <option value="">Value 2</option>
                    <option value="">Value 3</option>
                </select>
            </div>
            <div class="flex space-x-4 items-center">
                <div class="text-center bg-white px-2 py-1 rounded-xl">
                    <div class="text-xl font-bold">12</div>
                    <div class="text-xs text-gray-400 font-bold">Votes</div>
                </div>
                <button
                    type="button"
                    class="h-11 border-none px-12 py-4 bg-gray-200 rounded-2xl font-bold uppercase text-xs hover:bg-gray-300 transition ease-in-out duration-75">
                    Vote
                </button>
            </div>

        </div>
    </div>
    {{--    comienzan las respuestas --}}
    <div
        class="flex flex-col space-y-4 ml-20 mt-1 pt-6 relative
        before:content-['']
        before:absolute
        before:block
        before:top-0
        before:-left-10
        before:w-1
        before:h-full
        before:bg-gray-200
        before:mt-0
        ">

        <div
            class="space-y-8 relative
            before:absolute
            before:block
            before:top-20
            before:content-['']
            before:w-6
            before:h-1
            before:bg-gray-200
            before:-left-10
            ">
            <div class="space-x-10 mt-8 text-center bg-white rounded-xl p-4">
                <div class="flex space-x-4 w-full px-6">
                    <div class="flex-none h-20 w-20">
                        <a href="#">
                            <img class="object-cover rounded-xl h-20 w-20"
                                 src="https://source.unsplash.com/200x200/?face&crop=face&v=2"
                                 alt="avatar">
                        </a>
                    </div>
                    <div class="space-y-6">
                        <div>
                            <p class="text-justify text-gray-600">Lorem ipsum dolor sit amet, consectetur
                                adipisicing
                                elit. Ad
                                mollitia nihil veniam! Aliquid architecto at aut, autem beatae consectetur consequatur
                                cum
                                cupiditate earum error est eum exercitationem explicabo facere, harum hic, iure
                                laboriosam
                            </p>
                        </div>
                        <div class="flex justify-between">
                            <div class="flex text-gray-400 space-x-2">
                                <p class="font-bold text-gray-900">John Doe</p>
                                <p>&bull;</p>
                                <p class="font-bold">10 hours ago</p>
                            </div>
                            <div class="space-x-8">
                                <button
                                    class="relative border-none p-3 bg-gray-100 rounded-3xl font-bold uppercase text-xs hover:bg-gray-200 transition ease-in-out duration-75">
                                    <svg fill="currentColor" width="24" height="6">
                                        <path
                                            d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z"
                                            style="color: rgba(163, 163, 163, .5)"/>
                                    </svg>
                                    <ul class="absolute left-8 p-4 bg-white drop-shadow-xl rounded-xl w-36 font-semibold">
                                        <li class="hover:bg-gray-100 transition ease-in-out duration-75 rounded-xl">
                                            Mark as spam
                                        </li>
                                        <li class="hover:bg-gray-100 transition ease-in-out duration-75 rounded-xl">
                                            Delete Post
                                        </li>
                                    </ul>
                                </button>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div
            class="space-y-8 relative
            before:absolute
            before:w-8
            before:h-8
            before:rounded-full
            before:border
            before:border-4
            before:border-white
            before:shadow-purple-700
            before:-left-[53px]
            before:bg-purple-400
            before:top-24
            ">
            <div class="space-x-10 mt-8 text-center bg-white rounded-xl p-4 border border-blue-300 border-1">
                <div class="flex space-x-4 w-full px-6">
                    <div class="flex-none h-20 w-20 space-y-2">
                        <a href="#">
                            <img class="object-cover rounded-xl h-20 w-20"
                                 src="https://source.unsplash.com/200x200/?face&crop=face&v=3"
                                 alt="avatar">
                        </a>
                        <p class="uppercase text-blue-600 font-bold">Admin</p>
                    </div>
                    <div class="space-y-6">
                        <h3 class="text-2xl text-left hover:underline">Admin Comment</h3>

                        <div>
                            <p class="text-justify text-gray-600">Lorem ipsum dolor sit amet, consectetur
                                adipisicing
                                elit. Ad
                                mollitia nihil veniam! Aliquid architecto at aut, autem beatae consectetur consequatur
                                cum
                                cupiditate earum error est eum exercitationem explicabo facere, harum hic, iure
                                laboriosam
                            </p>
                        </div>
                        <div class="flex justify-between">
                            <div class="flex text-gray-400 space-x-2">
                                <p class="font-bold text-blue-600">John Doe</p>
                                <p>&bull;</p>
                                <p class="font-bold">10 hours ago</p>
                            </div>
                            <div class="space-x-8">
                                <button
                                    class="relative border-none p-3 bg-gray-100 rounded-3xl font-bold uppercase text-xs hover:bg-gray-200 transition ease-in-out duration-75">
                                    <svg fill="currentColor" width="24" height="6">
                                        <path
                                            d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z"
                                            style="color: rgba(163, 163, 163, .5)"/>
                                    </svg>
                                    <ul class="absolute left-8 p-4 bg-white drop-shadow-xl rounded-xl w-36 font-semibold">
                                        <li class="hover:bg-gray-100 transition ease-in-out duration-75 rounded-xl">
                                            Mark as spam
                                        </li>
                                        <li class="hover:bg-gray-100 transition ease-in-out duration-75 rounded-xl">
                                            Delete Post
                                        </li>
                                    </ul>
                                </button>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div
            class="space-y-8 relative
            before:absolute
            before:block
            before:top-20
            before:content-['']
            before:w-6
            before:h-1
            before:bg-gray-200
            before:-left-10
            last:after:absolute
            last:after:block
            last:after:top-[68px]
            last:after:-left-16
            last:after:w-1
            last:after:h-full
            last:after:bg-background
        ">
            <div class="space-x-10 mt-8 text-center bg-white rounded-xl p-4">
                <div class="flex space-x-4 w-full px-6">
                    <div class="flex-none h-20 w-20">
                        <a href="#">
                            <img class="object-cover rounded-xl h-20 w-20"
                                 src="https://source.unsplash.com/200x200/?face&crop=face&v=4"
                                 alt="avatar">
                        </a>
                    </div>
                    <div class="space-y-6">
                        <div>
                            <p class="text-justify text-gray-600">Lorem ipsum dolor sit amet, consectetur
                                adipisicing
                                elit. Ad
                                mollitia nihil veniam! Aliquid architecto at aut, autem beatae consectetur consequatur
                                cum
                                cupiditate earum error est eum exercitationem explicabo facere, harum hic, iure
                                laboriosam
                            </p>
                        </div>
                        <div class="flex justify-between">
                            <div class="flex text-gray-400 space-x-2">
                                <p class="font-bold text-gray-900">John Doe</p>
                                <p>&bull;</p>
                                <p class="font-bold">10 hours ago</p>
                            </div>
                            <div class="space-x-8">
                                <button
                                    class="relative border-none p-3 bg-gray-100 rounded-3xl font-bold uppercase text-xs hover:bg-gray-200 transition ease-in-out duration-75">
                                    <svg fill="currentColor" width="24" height="6">
                                        <path
                                            d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z"
                                            style="color: rgba(163, 163, 163, .5)"/>
                                    </svg>
                                    <ul class="absolute left-8 p-4 bg-white drop-shadow-xl rounded-xl w-36 font-semibold">
                                        <li class="hover:bg-gray-100 transition ease-in-out duration-75 rounded-xl">
                                            Mark as spam
                                        </li>
                                        <li class="hover:bg-gray-100 transition ease-in-out duration-75 rounded-xl">
                                            Delete Post
                                        </li>
                                    </ul>
                                </button>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


</x-app-layout>

