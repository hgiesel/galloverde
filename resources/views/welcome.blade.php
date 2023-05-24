<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="/css/app.css" rel="stylesheet">

    <wireui:scripts />
    <livewire:styles />
</head>

<body class="antialiased">
    <div class="bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white min-h-screen">

        <div class="flex justify-center py-5">
            <livewire:profile />
        </div>

        <div class="relative sm:flex sm:justify-center sm:items-center">
            <div class="max-w-7xl mx-auto p-6 lg:p-8">

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                    <a href="https://linkedin.com/in/henrik-giesel" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex justify-between motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                        <div>
                            <div class="rounded-full bg-amber-500 dark:bg-amber-400 w-16 h-16 p-3 opacity-50">
                                <x-icon name="user" />
                            </div>

                            <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Wer bin ich?</h2>

                            <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                Ich bin ein Entwickler aus dem Raum Frankfurt.
                            </p>
                        </div>

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                        </svg>
                    </a>

                    <a href="https://github.com/hgiesel/galloverde" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex justify-evenly motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                        <div>
                            <div class="rounded-full bg-green-500 dark:bg-green-400 w-16 h-16 p-3 opacity-50">
                                <x-icon name="code" />
                            </div>

                            <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Source code</h2>

                            <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                Unter diesem Link findest du den Source code für diese Website.
                            </p>
                        </div>

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                        </svg>
                    </a>

                    <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex justify-between motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                        <div>
                            <div class="rounded-full bg-green-500 dark:bg-green-400 w-16 h-16 p-3 opacity-50">
                                <x-icon name="database" />
                            </div>

                            <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Datenbank Zugriff</h2>

                            <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                Dieser Button ist verbunden mit einer Postgres Datenbank, welche ich auf ElephantSQL gehostet habe.
                            </p>
                        </div>

                        <livewire:counter />
                    </div>

                </div>

                <div class="flex justify-end mt-16 px-0 sm:items-center sm:justify-between">
                    <div class="ml-4 text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>

        </div>

        <livewire:scripts />
</body>

</html>
