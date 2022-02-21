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
                    <a href="#" class="hover:underline">{{ $idea->title }}</a>
                </h4>
                <div class="text-gray-600 mt-3 line-clamp-3">{{ $idea->description }}</div>
                <div class="flex items-center justify-between mt-6">
                    <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                        <div class="font-bold text-gray-900">{{ $idea->user->name }}</div>
                        <div>&bull;</div>
                        <time>{{ $idea->created_at->diffForHumans() }}</time>
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
                        <div x-data="{ isOpen: false }">
                            <button @click="isOpen = !isOpen"
                                class="relative bg-gray-100 border hover:bg-gray-200 rounded-full h-7 transitin ease-in py-2 px-3">
                                <x-icon.ellipsis />
                            </button>
                            <ul x-show="isOpen" x-cloak @click.outside="isOpen = false"
                                @keydown.escape.window="isOpen = false" x-transition.origin.top.left
                                class="absolute w-44 ml-8 font-semibold bg-white shadow-dialog rounded-xl py-3">
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
            <div x-data="{ isOpen: false }" class="relative">
                <x-button.blue @click="isOpen = !isOpen" class="w-32">Reply</x-button.blue>
                <div x-show="isOpen" x-cloak @click.outside="isOpen = false" @keydown.escape.window="isOpen = false"
                    x-transition.origin.top.left
                    class="absolute z-10 w-104 text-left font-semibold bg-white shadow-dialog rounded-xl mt-2">
                    <form action="#" class="space-y-4 px-4 py-6">
                        <div>
                            <textarea name="post_comment" id="post_comment" cols="30" rows="4"
                                class="w-full text-sm bg-gray-100 rounded-xl placeholder:text-gray-900 border-none px-4 py-2 resize-none"
                                placeholder="Go ahead, don't be shy. Share your thoughts..."></textarea>
                        </div>
                        <div class="flex items-center gap-3">
                            <x-button.blue class="text-xs">Post Comment</x-button.blue>
                            <x-button.gray class="text-xs">
                                <x-icon.paperclip />
                                <span class="ml-1">Attach</span>
                            </x-button.gray>
                        </div>
                    </form>
                </div>
            </div>
            <div x-data="{ isOpen: false }" class="relative">
                <x-button.gray @click="isOpen = !isOpen" class="w-36">
                    <span class="mr-1">Set status</span>
                    <x-icon.chevron-down />
                </x-button.gray>
                <div x-show="isOpen" x-cloak @click.outside="isOpen = false" @keydown.escape.window="isOpen = false"
                    x-transition.origin.top.left
                    class="absolute z-20 w-76 text-left font-semibold bg-white shadow-dialog rounded-xl mt-2">
                    <form action="#" class="space-y-4 px-4 py-6">
                        <div class="space-y-2">
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" checked name="status" value="open"
                                        class="bg-gray-200 border-none text-gray-600">
                                    <span class="ml-2">Open</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" name="status" value="considering"
                                        class="bg-gray-200 border-none text-purple">
                                    <span class="ml-2">Considering</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" name="status" value="in_progress"
                                        class="bg-gray-200 border-none text-yellow">
                                    <span class="ml-2">In Progress</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" name="status" value="implemented"
                                        class="bg-gray-200 border-none text-green">
                                    <span class="ml-2">Implemented</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" name="status" value="closed"
                                        class="bg-gray-200 border-none text-red">
                                    <span class="ml-2">Closed</span>
                                </label>
                            </div>
                        </div>
                        <div>
                            <textarea name="update_comment" id="update_comment" cols="30" rows="3" class="w-full text-sm bg-gray-100 rounded-xl placeholder:text-gray-900
                                border-none px-4 py-2 resize-none"
                                placeholder="Add an update comment (optional)"></textarea>
                        </div>
                        <div class="flex items-center gap-3">
                            <x-button.gray class="text-xs">
                                <x-icon.paperclip />
                                <span class="ml-1">Attach</span>
                            </x-button.gray>
                            <x-button.blue class="text-xs">Update</x-button.blue>
                        </div>
                        <div>
                            <label class="font-normal inline-flex items-center">
                                <input type="checkbox" name="notify_voters" class="rounded bg-gray-200" checked>
                                <span class="ml-2">Notify all voters</span>
                            </label>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="flex items-center gap-3">
            <div class="bg-white font-semibold text-center rounded-xl px-3 py-2">
                <div class="text-xl leading-snug">12</div>
                <div class="text-gray-400 text-xs leading-none">Votes</div>
            </div>
            <x-button.gray class="w-32 uppercase">Vote</x-button.gray>
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
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                            <div class="font-bold text-gray-900">John Doe</div>
                            <div>&bull;</div>
                            <time>10 hours ago</time>
                        </div>
                        <div class="flex items-center space-x-2">

                            <div x-data="{ isOpen: false }">
                                <button @click="isOpen = !isOpen"
                                    class="relative bg-gray-100 border hover:bg-gray-200 rounded-full h-7 transitin ease-in py-2 px-3">
                                    <x-icon.ellipsis />
                                </button>
                                <ul x-show="isOpen" x-cloak @click.outside="isOpen = false"
                                    @keydown.escape.window="isOpen = false" x-transition.origin.top.left
                                    class="absolute z-10 w-44 ml-8 font-semibold bg-white shadow-dialog rounded-xl py-3">
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

        <div
            class="comment-container is-admin relative p-0.5 rounded-xl bg-gradient-to-r from-purple/50 via-blue/70 to-sky-400/90">
            <div class="bg-white rounded-[10px] flex">
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
                            <a href="#" class="hover:underline text-gray-700">Status changed to "Under
                                Consideration"</a>
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