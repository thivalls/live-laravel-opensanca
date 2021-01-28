<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Tarefa {{ $task->id }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-8">
                <table class="w-full">
                    <tbody>
                        <tr>
                            <td class="border px-4 py-2"><strong>Nome</strong></td>
                            <td class="border px-4 py-2">{{ $task->name }}</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2"><strong>Status</strong></td>
                            <td class="border px-4 py-2">{{ $task->status ? 'Concluída' : 'Aberta' }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-8">
            <a href="{{ route('tasks.index') }}" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
                voltar
            </a>
        </div>

    </div>
</x-app-layout>
