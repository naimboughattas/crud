<div class="lg:pl-64 flex flex-col flex-1">

    <main class="flex-1 pb-8">
        <!-- Page header -->
        <div class="bg-white shadow">
            <div class="py-6 px-4 sm:px-6 lg:mx-auto lg:px-8">
                <!-- This example requires Tailwind CSS v2.0+ -->
                <div class="lg:flex lg:items-center lg:justify-between">
                    <div class="flex-1 min-w-0">
                        <nav class="flex" aria-label="Breadcrumb">
                            <ol role="list" class="flex items-center space-x-4">
                                <li>
                                    <div class="flex">
                                        <span class="text-sm font-medium text-gray-500 hover:text-gray-700">CRUD</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="flex items-center">
                                        <!-- Heroicon name: solid/chevron-right -->
                                        <svg class="flex-shrink-0 h-5 w-5 text-gray-400"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                            aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <a href="{{ route('model.index', ['model' => $model]) }}"
                                            class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">{{ ucfirst($model) }}</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="flex items-center">
                                        <!-- Heroicon name: solid/chevron-right -->
                                        <svg class="flex-shrink-0 h-5 w-5 text-gray-400"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                            aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <a href="{{ route('model.edit', ['model' => $model, 'id' => $model_id]) }}"
                                            class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">Edit</a>
                                    </div>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-8">
            <!-- Activity table (small breakpoint and up) -->
            <div class="hidden sm:block">
                <div class="mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex flex-col mt-2">
                        <div class="align-middle min-w-full">
                            <form wire:submit.prevent="save"
                                class="mx-auto max-w-4xl space-y-8 divide-y divide-gray-200">
                                <div class="space-y-8 divide-y divide-gray-200">
                                    <div class="pt-8">
                                        <div>
                                            <h3 class="text-lg leading-6 font-medium text-gray-900">
                                                {{ Str::singular(ucfirst($model)) }}</h3>
                                            <p class="mt-1 text-sm text-gray-500">Ci-dessous les informations liées au
                                                {{ Str::singular($model) }}</p>
                                        </div>
                                        <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                                            @foreach ($columns as $key => $col)
                                                <div class="sm:col-span-3">
                                                    <label for="first-name"
                                                        class="block text-sm font-medium text-gray-700">
                                                        {{ $col }} </label>
                                                    <div class="mt-1">
                                                        <input
                                                            @if ($col == 'id') wire:model.defer="model_id" @else wire:model.defer="{{ $col }}" @endif
                                                            type="text" name="{{ $col }}"
                                                            id="{{ $col }}"
                                                            class="shadow-sm focus:ring-cyan-500 focus:border-cyan-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                                <div class="pt-5">
                                    <div class="flex justify-end">
                                        <button type="submit"
                                            class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-cyan-600 hover:bg-cyan-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500">Enregistrer</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
