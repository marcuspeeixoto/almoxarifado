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
                            <div class="container">
                                <h2 class="mb-4">Adicionar Fornecimento</h2>
                                <form method="POST" action="{{ route('fornecimentos.store') }}">

                                    @csrf
                                    <div class="form-group mb-4">
                                        <label for="produto_id pd-2">Produto:</label>
                                        <select class="form-control" id="produto_id" name="produto_id">
                                            @foreach ($produtos as $produto)
                                                <option value="{{ $produto->id }}">{{ $produto->nome }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="setor">Setor:</label>
                                        <input type="text" class="form-control" id="setor" name="setor">
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="quantidade">Quantidade:</label>
                                        <input type="number" class="form-control" id="quantidade" name="quantidade" min="1" value="1">
                                    </div>
                                    <button type="submit" class="btn btn-primary p-2 rounded bg-blue-500"><strong>Enviar</strong></button>
                                </form>
                                
                            </div>
                        </div>
                    </body>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>




{{-- <div class="container">
    <h2>Adicionar Fornecimento</h2>
    <form method="POST" action="{{ route('fornecimento.create') }}">
        @csrf
        <div class="form-group">
            <label for="produto_id">Produto:</label>
            <select class="form-control" id="produto_id" name="produto_id">
                @foreach ($produtos as $produto)
                    <option value="{{ $produto->id }}">{{ $produto->nome }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="setor">Setor:</label>
            <input type="text" class="form-control" id="setor" name="setor">
        </div>
        <div class="form-group">
            <label for="quantidade">Quantidade:</label>
            <input type="number" class="form-control" id="quantidade" name="quantidade" min="1" value="1">
        </div>
        <button type="submit" class="btn btn-primary">Adicionar Fornecimento</button>
    </form>
</div> --}}