<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Produtos Cadastrados') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p class="mb-4">Ola <strong>{{Auth::user()->name}}</strong></p>
                    <p class="mb-4">
                        Produtos Disponiveis {{ $produto->nome}}
                    </p>
                    {{-- <p>
                        <a href="{{route('meus.clientes',Auth::user()->id)}}" class="bg-blue-500 text-white rounded p-2">Meus clientes</a>
                        <a href=" {{ route('cliente.edit', $cliente->id) }}" class="bg-purple-500 text-white rounded p-2">Editar</a>
                        <a href="{{route('confirma.delete',$cliente->id)}}" class="bg-red-500 text-white rounded p-2">Deletar</a>
                    </p> --}}
                </div>

                {{-- <div class="bg-gray-100 rounded p-2 mb-4">
                    {{$produtos->links()}}
                </div> --}}


                <table class="table-auto w-full">
                    <thead class="bg-gray-100 text-left">
                        <tr>
                            <th class="p-2">Nome</th>
                            <th class="p-2">Quantidade</th>
                            <th class="p-2">Preço</th>
                            <th class="p-2">Marca</th>
                            <th class="p-2">Fornecedor</th>
                            <th class="p-2">Categoria</th>
                            <th class="p-2">Data de Validade</th>
                            <th class="p-2">Código de Barras</th>
                            <th class="p-2">Data de Entrada</th>
                        </tr>
                    </thead>
                
                    <tbody>
                        @foreach ($produtos as $produto)
                        <tr class="hover:bg-gray-100">
                            <td class="p-2">{{$produto->nome}}</td>
                            <td class="p-2">{{$produto->quantidade}}</td>
                            <td class="p-2">{{$produto->preco}}</td>
                            <td class="p-2">{{$produto->marca}}</td>
                            <td class="p-2">{{$produto->fornecedor}}</td>
                            <td class="p-2">{{$produto->categoria}}</td>
                            <td class="p-2">{{$produto->data_de_validade}}</td>
                            <td class="p-2">{{$produto->codigo_de_barras}}</td>
                            <td class="p-2">{{$produto->data_de_entrada}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                
                
                
            </div>
        </div>
    </div>
</x-app-layout>
