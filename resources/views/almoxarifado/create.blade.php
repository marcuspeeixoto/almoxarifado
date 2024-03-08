<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Produtos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p class="mb-4">Olá <strong>{{Auth::user()->name}}</strong></p>
                    <form action="{{route('almoxarifado.store')}}" method="post">
                        @csrf
                        

                        <fieldset class="border-2 rounded p-6">


                            <legend>Preencha todos os campos</legend>

                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                            <div class="bg-gray-100 p-4 rounded overflow-hidden mb-4">
                                <label for="nome">Nome</label>
                                <input type="text" name="nome" id="nome" class="w-full" required autofocus>
                            </div>

                            <div class="bg-gray-100 p-4 rounded overflow-hidden mb-4">
                                <label for="telefone">Quantidade</label>
                                <input type="number" name="quantidade" id="quantidade" class="w-full" required autofocus>
                            </div>

                            <div class="bg-gray-100 p-4 rounded overflow-hidden mb-4">
                                <label for="empresa">Preço</label>
                                <input type="text" name="preco" id="preco" class="w-full" required autofocus>
                            </div>

                            <div class="bg-gray-100 p-4 rounded overflow-hidden mb-4">
                                <label for="tel_comercial">Marca</label>
                                <input type="text" name="marca" id="marca" class="w-full" required autofocus>
                            </div>

                            <div class="bg-gray-100 p-4 rounded overflow-hidden mb-4">
                                <label for="tel_comercial">Fornecedor</label>
                                <input type="text" name="fornecedor" id="fornecedor" class="w-full" required autofocus>
                            </div>

                            <div class="bg-gray-100 p-4 rounded overflow-hidden mb-4">
                                <label for="tel_comercial">Categoria</label>
                                <input type="text" name="categoria" id="categoria" class="w-full" required autofocus>
                            </div>

                            <div class="bg-gray-100 p-4 rounded overflow-hidden mb-4">
                                <label for="tel_comercial">Data de Validade</label>
                                <input type="date" name="data_de_validade" id="data_de_validade" class="w-full" required autofocus>
                            </div>

                            <div class="bg-gray-100 p-4 rounded overflow-hidden mb-4">
                                <label for="tel_comercial">Codigo de barras</label>
                                <input type="text" name="codigo_de_barras" id="codigo_de_barras" class="w-full" required autofocus>
                            </div>

                            <div class="bg-gray-100 p-4 rounded overflow-hidden mb-4">
                                <label for="tel_comercial">Data de entrada</label>
                                <input type="date" name="data_de_entrada" id="data_de_entrada" class="w-full" required autofocus>
                            </div>

                            <div class="bg-gray-100 p-4 rounded overflow-hidden">
                                <input type="submit" value="Cadastrar" class="bg-blue-500 text-white rounded p2">
                                <input type="reset" value="Limpar" class="bg-red-500 text-white rounded p2">
                            </div>

                            
                            
                        </fieldset>


                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
