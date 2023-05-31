<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="font-sans antialiased h-full bg-black text-white">
    <div class="container h-full mx-auto">
        <div class="grid grid-cols-4 gap-2 h-full">
            {{-- Menu --}}
            <div class="p-1 w-full h-full grid place-content-between gap-0">
                <div class="">
                    <div class="">
                        <a href="#"
                            class="bg-transparent hover:bg-slate-100 hover:bg-opacity-20 p-2 rounded-full flex items-center  mx-1 w-12">
                            <svg viewBox="0 0 24 24" aria-hidden="true" class="h-6 w-6 fill-slate-200">
                                <g><path d="M23.643 4.937c-.835.37-1.732.62-2.675.733.962-.576 1.7-1.49 2.048-2.578-.9.534-1.897.922-2.958 1.13-.85-.904-2.06-1.47-3.4-1.47-2.572 0-4.658 2.086-4.658 4.66 0 .364.042.718.12 1.06-3.873-.195-7.304-2.05-9.602-4.868-.4.69-.63 1.49-.63 2.342 0 1.616.823 3.043 2.072 3.878-.764-.025-1.482-.234-2.11-.583v.06c0 2.257 1.605 4.14 3.737 4.568-.392.106-.803.162-1.227.162-.3 0-.593-.028-.877-.082.593 1.85 2.313 3.198 4.352 3.234-1.595 1.25-3.604 1.995-5.786 1.995-.376 0-.747-.022-1.112-.065 2.062 1.323 4.51 2.093 7.14 2.093 8.57 0 13.255-7.098 13.255-13.254 0-.2-.005-.402-.014-.602.91-.658 1.7-1.477 2.323-2.41z"></path></g>
                            </svg>
                        </a>
                        <x-menu.item route="/timeline" title="Home" icon="home" />

                        <x-menu.item route="/explorer" title="Explorar" icon="explorer" />

                        <x-menu.item route="/notifications" title="Notificações" icon="notification" />

                        <x-menu.item route="/messages" title="Mensagens" icon="message" />

                        <x-menu.item route="/notifications" title="Listas" icon="list" />

                        <x-menu.item route="/notifications" title="Items Salvos" icon="items" />

                        <x-menu.item route="/notifications" title="Twitter Blue" icon="twitterblue" />

                        <x-menu.item route="/perfil" title="Perfil" icon="perfil" />
                    </div>

                    <div class="mt-4 px-4 flex justify-center w-full">
                        <a href="/"
                            class="p-2 rounded-full bg-cyan-500 inline-block w-full text-center font-bold text-lg">Tweettar</a>
                    </div>
                </div>
                <div class="grid gap-0 items-end mb-4">
                    <div class="flex items-center">
                        <a href="/accounts"
                            class="bg-transparent hover:bg-slate-400 hover:bg-opacity-20 p-2 pr-6 inline-block rounded-full">
                            <div class="flex flex-row space-x-2">
                                <div class="flex items-center">
                                    <img class="fill-transparent rounded-full"
                                        src="{{ asset('storage/avatar/Leo_e_Lory_normal.jpg') }}" alt="Leo">
                                </div>
                                <div>
                                    <p class="font-semibold text-lg">Oleomar Buchner</p>
                                    <span class="text-gray-700">@leobuchner</span>
                                </div>
                            </div>
                        </a>

                    </div>
                </div>
            </div>

            {{-- end Menu --}}

            <div class="col-span-2 border border-x-[0.625px] border-y-0 border-slate-700 ">as</div>
            <div class="">as</div>
        </div>
    </div>
    @livewireScripts
</body>

</html>
