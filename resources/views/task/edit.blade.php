<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editando Task') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-16">

                <form action="" class="w-full" method="post">
                    @csrf
                    @method="update"

                    <div class="flex w-full">
                        <div class="w-1/2">
                            <div class="w-full px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
                                    Nome
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                    id="name"
                                    name="name"
                                    placeholder="Nome da tarefa"
                                    value="{{ $task->name ?? '' }}"
                                >
                            </div>
                        </div>
                        <div class="w-1/2">
                            <div class="w-full px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="status">
                                    Status
                                </label>
                                <input type="checkbox" {{ $task->status ? 'checked' : '' }} class="input-checkbox" id="status" name="status">
                                <span>Aberto</span>
                            </div>
                        </div>
                    </div>

                    <button class="ml-3 bg-green-500 hover:bg-green-400 text-white font-bold py-2 px-4 border-b-4 border-green-700 hover:border-green-500 rounded">
                        Atualizar
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
