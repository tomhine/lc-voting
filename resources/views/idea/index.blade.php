<x-app-layout>

    <div class="filters flex space-x-6">
        <div class="w-1/3">
            <select name="category" id="category" class="w-full rounded-xl border-none px-4 py-2">
                <option value="Category One">Category One</option>
                <option value="Category Two">Category Two</option>
                <option value="Category Three">Category Three</option>
                <option value="Category Four">Category Four</option>
            </select>
        </div>
        <div class="w-1/3">
            <select name="other_filters" id="other_filters" class="w-full rounded-xl border-none px-4 py-2">
                <option value="Filter One">Filter One</option>
                <option value="Filter Two">Filter Two</option>
                <option value="Filter Three">Filter Three</option>
                <option value="Filter Four">Filter Four</option>
            </select>
        </div>
        <div class="w-2/3 relative">
            <input type="search" placeholder="Find an idea"
                class="w-full rounded-xl border-none bg-white px-4 py-2 pl-8 placeholder:text-gray-900">
            <div class="absolute top-0 flex items-center h-full ml-2">
                <x-icon.search />
            </div>
        </div>
    </div> <!-- end filters -->

    <div class="ideas-container space-y-6 my-6">
        @foreach ($ideas as $idea)

        <div x-data @click="const target = $event.target;
                            const skipEls = ['button', 'img', 'svg', 'path'];
                            if (!skipEls.includes(target.tagName.toLowerCase())) {;
                                target.closest('.idea-container').querySelector('[data-idea-link]').click();
                            }"
            class=" idea-container bg-white rounded-xl flex transition ease-in cursor-pointer hover:shadow-card">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">12</div>
                    <div class="text-gray-500">Votes</div>
                </div>
                <div class="mt-8">
                    <button class="w-20 bg-gray-200 border border-gray-200 font-bold text-xxs uppercase rounded-xl px-4 py-3 transition ease-in
              hover:border-gray-400">Vote</button>
                </div>
            </div>
            <div class="flex flex-1 px-2 py-6">
                <div class="flex-none">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar"
                            class="w-14 h-14 rounded-xl">
                    </a>
                </div>
                <div class="w-full mx-4">
                    <h4 class="text-xl font-semibold ">
                        <a href="{{ route('idea.show', $idea) }}" data-idea-link class="hover:underline">{{ $idea->title
                            }}</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">{{ $idea->description }}</div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
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
                                <button
                                    class="relative bg-gray-100 border hover:bg-gray-200 rounded-full h-7 transitin ease-in py-2 px-3"
                                    @click="isOpen = !isOpen">
                                    <x-icon.ellipsis />
                                </button>
                                <ul class="absolute w-44 ml-8 font-semibold bg-white shadow-dialog rounded-xl py-3"
                                    x-show="isOpen" x-cloak x-transition.origin.top.left @click.outside="isOpen = false"
                                    @keydown.escape.window="isOpen = false">
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

        @endforeach
    </div> <!-- end ideas container -->

    <div class="my-8">
        {{ $ideas->links() }}
    </div>

</x-app-layout>
