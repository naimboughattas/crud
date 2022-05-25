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
                                        <svg class="flex-shrink-0 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        <a href="{{ route('model.index', ['model' => $model]) }}" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">{{ ucfirst($model) }}</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="flex items-center">
                                        <!-- Heroicon name: solid/chevron-right -->
                                        <svg class="flex-shrink-0 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        <a href="{{ route('model.show', ['model' => $model, 'id' => $model_id]) }}" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">Show</a>
                                    </div>
                                </li>
                            </ol>
                        </nav>
                    </div>
                    <div class="mt-5 flex lg:mt-0 lg:ml-4">
                        <span class="hidden sm:block">
                            <a href="{{ route('model.edit', ['model' => $model, 'id' => $model_id]) }}"
                                class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500">
                                <!-- Heroicon name: solid/pencil -->
                                <svg class="-ml-1 mr-2 h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path
                                        d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                                </svg>
                                Modifier
                            </a>
                        </span>

                        <!-- Dropdown -->
                        <div class="ml-3 relative sm:hidden">
                            <button type="button"
                                class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500"
                                id="mobile-menu-button" aria-expanded="false" aria-haspopup="true">
                                More
                                <!-- Heroicon name: solid/chevron-down -->
                                <svg class="-mr-1 ml-2 h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>

                            <!--
                                Dropdown menu, show/hide based on menu state.

                                Entering: "transition ease-out duration-200"
                                    From: "transform opacity-0 scale-95"
                                    To: "transform opacity-100 scale-100"
                                Leaving: "transition ease-in duration-75"
                                    From: "transform opacity-100 scale-100"
                                    To: "transform opacity-0 scale-95"
                                -->
                            <div class="origin-top-right absolute right-0 mt-2 -mr-1 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                                role="menu" aria-orientation="vertical" aria-labelledby="mobile-menu-button"
                                tabindex="-1">
                                <!-- Active: "bg-gray-100", Not Active: "" -->
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                                    id="mobile-menu-item-0">Edit</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                                    id="mobile-menu-item-1">View</a>
                            </div>
                        </div>
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
                            <div class="mx-auto max-w-4xl space-y-8 divide-y divide-gray-200">
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
                                                        <input value="{{ $data[0]->$col }}" type="text"
                                                            name="{{ $col }}" id="{{ $col }}" disabled
                                                            class="disabled:opacity-40 disabled:bg-gray-50 required:border-red-500 shadow-sm focus:ring-cyan-500 focus:border-cyan-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
