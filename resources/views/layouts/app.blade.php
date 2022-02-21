<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laracasts Voting</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased text-gray-900 text-sm bg-gray-background">
    <header class="flex items-center justify-between px-8 py-4">
        <a href="/">
            <x-image.main-logo />
        </a>
        <div class="flex items-center">
            @if (Route::has('login'))
            <div class="top-0 right-0 px-6 py-4">
                @auth
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
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
            </div>
            @endif
            <a href="#">
                <img src="https://www.gravatar.com/avatar/0000000000000000000000000000000000?d=mp" alt="avatar"
                    class="w-10 h-10 rounded-full">
            </a>
        </div>
    </header>

    <main class="container max-w-custom mx-auto flex gap-5">
        <div class="w-70">
            <div class="sticky top-8 p-0.5 mt-16 rounded-xl bg-gradient-to-t from-transparent via-blue/20 to-blue/30">
                <div class="bg-white rounded-[10px]">
                    <div class="text-center px-4 py-2 pt-6">
                        <h3 class="font-semibold text-base">Add an idea</h3>
                        <p class="text-xs mt-4">Let us know what you would like and we'll take a look over!</p>

                        <div>
                            <form action="#" method="POST" class="space-y-4 py-6">
                                <div>
                                    <input type="text"
                                        class="w-full text-sm bg-gray-100 border-none rounded-xl placeholder:text-gray-900 px-4 py-2"
                                        placeholder="Your idea">
                                </div>
                                <div>
                                    <select name="category_add" id="category_add"
                                        class="w-full bg-gray-100 text-sm rounded-xl border-none px-4 py-2">
                                        <option value="Category One">Category One</option>
                                        <option value="Category Two">Category Two</option>
                                        <option value="Category Three">Category Three</option>
                                        <option value="Category Four">Category Four</option>
                                    </select>
                                </div>
                                <div>
                                    <textarea name="idea" id="idea" cols="30" rows="4"
                                        class="w-full bg-gray-100 border-none rounded-xl resize-none placeholder:text-gray-900 text-sm px-4 py-2"
                                        placeholder="Describe your idea"></textarea>
                                </div>
                                <div class="flex items-center gap-3">
                                    <x-button.gray class="text-xs">
                                        <x-icon.paperclip />
                                        <span class="ml-1">Attach</span>
                                    </x-button.gray>
                                    <x-button.blue type='submit' class="text-xs">Submit</x-button.blue>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="w-175">
            <nav class="flex items-center justify-between text-xs">
                <ul class="flex uppercase font-semibold space-x-10 border-b-4 pb-3">
                    <li>
                        <a href="#" class="border-b-4 pb-3 border-blue">All ideas (87)</a>
                    </li>
                    <li>
                        <a href="#"
                            class="text-gray-400 transition ease-in border-b-4 pb-3 hover:border-blue">Considering
                            (6)</a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-400 transition ease-in border-b-4 pb-3 hover:border-blue">In
                            progress
                            (1)</a>
                    </li>
                </ul>
                <ul class="flex uppercase font-semibold space-x-10 border-b-4 pb-3">
                    <li>
                        <a href="#"
                            class="text-gray-400 transition ease-in border-b-4 pb-3 hover:border-blue">Implemented
                            (10)</a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-400 transition ease-in border-b-4 pb-3 hover:border-blue">Closed
                            (55)</a>
                    </li>
                </ul>
            </nav>

            <div class="mt-8">
                {{ $slot }}
            </div>

        </div>
    </main>

    @livewireScripts
</body>

</html>