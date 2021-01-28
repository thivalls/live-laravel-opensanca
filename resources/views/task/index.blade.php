<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de Tarefas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-8">

                <x-alert>
                    Mensagem de sucesso
                    {{-- session->get('message') --}}
                </x-alert>

                <div class="flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                        <tr>
                                        <th class="px-4 py-2">#</th>
                                        <th class="px-4 py-2">Nome</th>
                                        <th class="px-4 py-2">Status</th>
                                        <th class="px-4 py-2">Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- loop start --}}
                                            <tr>
                                                <td class="border px-4 py-2">1</td>
                                                <td class="border px-4 py-2">Assistir ao OpenSanca</td>
                                                <td class="border px-4 py-2">Aberta</td>
                                                <td class="border px-4 py-2">
                                                <a href="">
                                                    Editar
                                                </a>
                                                <a href="">
                                                    Ver
                                                </a>
                                                <form style="display: inline" action="" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button>Apagar</button>
                                                </form>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="border px-4 py-2">2</td>
                                                <td class="border px-4 py-2">Praticar Laravel</td>
                                                <td class="border px-4 py-2">Aberta</td>
                                                <td class="border px-4 py-2">
                                                <a href="">
                                                    Editar
                                                </a>
                                                <a href="">
                                                    Ver
                                                </a>
                                                <form style="display: inline" action="" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button>Apagar</button>
                                                </form>
                                                </td>
                                            </tr>
                                        {{-- loop end --}}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
