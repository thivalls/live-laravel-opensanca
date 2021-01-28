<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de Tarefas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <x-alert>
                    teste de mensagem
                    {{-- session->get('message') --}}
                </x-alert>

                <table class="table-auto">
                    <thead>
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
                                <td class="border px-4 py-2">{{ $task->id }}</td>
                                <td class="border px-4 py-2">{{ $task->name }}</td>
                                <td class="border px-4 py-2">{{ $task->status ? 'Concluída' : 'Aberta' }}</td>
                                <td class="border px-4 py-2">
                                <a href="{{ route('web.tasks.edit', ['task' => $task->id]) }}" class="bg-green-500 hover:bg-green-400 text-white font-bold py-2 px-3 border-b-4 border-green-700 hover:border-green-500 rounded inline-flex items-center">
                                    Editar
                                </a>
                                <a href="{{ route('web.tasks.show', ['task' => $task->id]) }}" class="bg-green-500 hover:bg-green-400 text-white font-bold py-2 px-3 border-b-4 border-green-700 hover:border-green-500 rounded text-sm inline-flex items-center">
                                    Ver
                                </a>
                                <form style="display: inline" action="{{ route('web.tasks.destroy', ['task' => $task->id]) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="bg-red-500 hover:bg-red-400 text-white py-2 px-3 border-b-4 border-red-700 hover:border-red-500 rounded inline-flex items-center">
                                        Apagar
                                    </button>
                                </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</x-app-layout>
