<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de Tarefas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-8">
                @if(session()->has('message'))
                <x-alert>
                    Mensagem de sucesso
                    {{-- session->get('message') --}}
                </x-alert>
                @endif

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
                                        @foreach($tasks as $task)
                                            <tr>
                                                <td class="border px-4 py-2">
                                                {{ $task->id }}
                                                </td>
                                                <td class="border px-4 py-2">
                                                {{ $task->name }}
                                                </td>
                                                <td class="border px-4 py-2">
                                                {{ $task->status ? 'Concluída' : 'Aberta' }}
                                                </td>
                                                <td class="border px-4 py-2">
                                                <a href="{{ route('tasks.edit', ['task' => $task->id]) }}">
                                                    Editar
                                                </a>
                                                <a href="{{ route('tasks.show', ['task' => $task->id]) }}">
                                                    Ver
                                                </a>
                                                <form style="display: inline" action="{{ route('tasks.destroy', ['task' => $task->id]) }}" method="post">
                                                    <!-- Este helper cria um campo hidden com o token da sessão para permitir requisição como uma forma de segurança do Laravel -->
                                                    @csrf
                                                    <!-- Este method altera o método http para delete para acessar o método destroy do controller TaskController -->
                                                    @method('delete')
                                                    <button>Apagar</button>
                                                </form>
                                                </td>
                                            </tr>
                                        @endforeach
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
