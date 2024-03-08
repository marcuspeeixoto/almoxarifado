<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
                    <body class="bg-gray-100 flex justify-center items-center h-screen">
                        <div class="max-w-lg bg-white p-8 rounded-lg shadow-md">
                            <h1 class="text-7xl text-center font-bold mb-4">Bem-vindo!</h1>
                            <p class="text-lg text-center text-gray-700">Olá! Que bom ter você aqui. Espero que você esteja tendo um ótimo dia!</p>
                        </div>
                    </body>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
