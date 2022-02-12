<x-app-layout>

    <div>
        <a href="/" class="flex items-center font-semibold hover:underline">
            <x-icon.chevron-left />
            <span class="ml-2">All ideas</span>
        </a>

    </div>

    <div class="idea-container bg-white rounded-xl flex mt-4">
        <div class="flex flex-1 px-4 py-6">
            <div class="flex-none">
                <a href="#">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar"
                        class="w-14 h-14 rounded-xl">
                </a>
            </div>
            <div class="w-full mx-4">
                <h4 class="text-xl font-semibold ">
                    <a href="#" class="hover:underline">A random title can go here</a>
                </h4>
                <div class="text-gray-600 mt-3 line-clamp-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Veritatis aperiam officia laudantium maiores dolore quod corrupti, quasi voluptas ratione
                    consectetur rerum
                    iure labore suscipit in enim pariatur excepturi architecto fugit nisi? Quisquam alias veniam nobis.
                    Facilis,
                    esse optio eum consequatur necessitatibus incidunt natus, quis dolorem obcaecati officiis porro
                    voluptas,
                    iure quisquam quasi cum. Quis nobis totam nulla autem veniam repellendus cumque ex iste distinctio
                    nihil
                    delectus cum exercitationem, a voluptatum quasi? Ducimus unde labore ea ullam quaerat quibusdam illo
                    earum
                    exercitationem voluptatum. Ut ipsum quae repellendus consectetur, nulla ab a vel aperiam libero
                    velit illum?
                    Voluptate libero aspernatur perferendis cumque!
                </div>
                <div class="flex items-center justify-between mt-6">
                    <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                        <div class="font-bold text-gray-900">John Doe</div>
                        <div>&bull;</div>
                        <time>10 hours ago</time>
                        <div>&bull;</div>
                        <div>Category</div>
                        <div>&bull;</div>
                        <div class="text-gray-800">3 Comments</div>
                    </div>
                    <div class="flex items-center space-x-2">
                        <div
                            class="bg-gray-200 text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                            Open
                        </div>
                        <div>
                            <button
                                class="relative bg-gray-100 border hover:bg-gray-200 rounded-full h-7 transitin ease-in py-2 px-3">
                                <x-icon.ellipsis />
                            </button>
                            <ul class="hidden absolute w-44 ml-8 font-semibold bg-white shadow-dialog rounded-xl py-3">
                                <li>
                                    <a href="#" class="block hover:bg-gray-100 px-5 py-3 transition ease-in">
                                        Mark as Spam
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="block hover:bg-gray-100 px-5 py-3 transition ease-in">
                                        Delete
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end idea container -->

    <div class="buttons-container flex items-center justify-between mt-6">
        <div class="flex items-center gap-4 ml-6">
            <button
                class="flex items-center justify-center h-11 w-32 text-xs text-white bg-blue font-semibold rounded-xl border border-blue hover:bg-blue-hover transition ease-in px-6 py-3"
                type="button">
                Reply
            </button>
            <button
                class="flex items-center justify-center w-36 h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition ease-in px-6 py-3"
                type="button">
                <span class="mr-1">Set status</span>
                <x-icon.chevron-down />
            </button>
        </div>
        <div class="flex items-center gap-3">
            <div class="bg-white font-semibold text-center rounded-xl px-3 py-2">
                <div class="text-xl leading-snug">12</div>
                <div class="text-gray-400 text-xs leading-none">Votes</div>
            </div>
            <button
                class="w-32 h-11 text-xs bg-gray-200 font-semibold rounded-xl border uppercase border-gray-200 hover:border-gray-400 transition ease-in px-6 py-3"
                type="button">
                vote
            </button>
        </div>
    </div> <!-- end buttons container -->

    <div class="comments-container relative space-y-6 ml-22 mt-1 pt-4 my-8">

        <div class="comment-container relative bg-white rounded-xl flex mt-4">
            <div class="flex flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=2" alt="avatar"
                            class="w-14 h-14 rounded-xl">
                    </a>
                </div>
                <div class="w-full mx-4">
                    {{-- <h4 class="text-xl font-semibold ">
                        <a href="#" class="hover:underline">A random title can go here</a>
                    </h4> --}}
                    <div class="text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing
                        elit.
                        Veritatis aperiam officia laudantium maiores dolore quod corrupti, quasi voluptas ratione
                        consectetur rerum
                        iure labore suscipit in enim pariatur excepturi architecto fugit nisi? Quisquam alias veniam
                        nobis.
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                            <div class="font-bold text-gray-900">John Doe</div>
                            <div>&bull;</div>
                            <time>10 hours ago</time>
                        </div>
                        <div class="flex items-center space-x-2">

                            <div>
                                <button
                                    class="relative bg-gray-100 border hover:bg-gray-200 rounded-full h-7 transitin ease-in py-2 px-3">
                                    <x-icon.ellipsis />
                                </button>
                                <ul
                                    class="hidden absolute w-44 ml-8 font-semibold bg-white shadow-dialog rounded-xl py-3">
                                    <li>
                                        <a href="#" class="block hover:bg-gray-100 px-5 py-3 transition ease-in">
                                            Mark as Spam
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="block hover:bg-gray-100 px-5 py-3 transition ease-in">
                                            Delete
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end comment container -->

        <div class="comment-container is-admin relative bg-white rounded-xl flex mt-4">
            <div class="flex flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=3" alt="avatar"
                            class="w-14 h-14 rounded-xl">
                    </a>
                    <div class="text-center uppercase text-blue text-xxs font-bold mt-1">Admin</div>
                </div>
                <div class="w-full mx-4">
                    <h4 class="text-xl font-semibold ">
                        <a href="#" class="hover:underline text-gray-700">Status changed to "Under Consideration"</a>
                    </h4>
                    <div class="text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing
                        elit.
                        Veritatis aperiam officia laudantium maiores dolore quod corrupti, quasi voluptas ratione
                        consectetur rerum
                        iure labore suscipit in enim pariatur excepturi architecto fugit nisi? Quisquam alias veniam
                        nobis.
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                            <div class="font-bold text-blue">Andrea</div>
                            <div>&bull;</div>
                            <time>10 hours ago</time>
                        </div>
                        <div class="flex items-center space-x-2">

                            <div>
                                <button
                                    class="relative bg-gray-100 border hover:bg-gray-200 rounded-full h-7 transitin ease-in py-2 px-3">
                                    <x-icon.ellipsis />
                                </button>
                                <ul
                                    class="hidden absolute w-44 ml-8 font-semibold bg-white shadow-dialog rounded-xl py-3">
                                    <li>
                                        <a href="#" class="block hover:bg-gray-100 px-5 py-3 transition ease-in">
                                            Mark as Spam
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="block hover:bg-gray-100 px-5 py-3 transition ease-in">
                                            Delete
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end comment container -->

        <div class="comment-container relative bg-white rounded-xl flex mt-4">
            <div class="flex flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=3" alt="avatar"
                            class="w-14 h-14 rounded-xl">
                    </a>
                </div>
                <div class="w-full mx-4">
                    <div class="text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing
                        elit.
                        Veritatis aperiam officia laudantium maiores dolore quod corrupti, quasi voluptas ratione
                        consectetur rerum
                        iure labore suscipit in enim pariatur excepturi architecto fugit nisi? Quisquam alias veniam
                        nobis.
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                            <div class="font-bold text-gray-900">John Doe</div>
                            <div>&bull;</div>
                            <time>10 hours ago</time>
                        </div>
                        <div class="flex items-center space-x-2">

                            <div>
                                <button
                                    class="relative bg-gray-100 border hover:bg-gray-200 rounded-full h-7 transitin ease-in py-2 px-3">
                                    <x-icon.ellipsis />
                                </button>
                                <ul
                                    class="hidden absolute w-44 ml-8 font-semibold bg-white shadow-dialog rounded-xl py-3">
                                    <li>
                                        <a href="#" class="block hover:bg-gray-100 px-5 py-3 transition ease-in">
                                            Mark as Spam
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="block hover:bg-gray-100 px-5 py-3 transition ease-in">
                                            Delete
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end comment container -->

    </div> <!-- end comments container -->

</x-app-layout>