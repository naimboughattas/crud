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
                                        <a href="{{ route('model.index', ['model' => $model]) }}"
                                            class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">Index</a>
                                    </div>
                                </li>
                            </ol>
                        </nav>
                        <h2 class="mt-2 text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate">
                            {{ $model }}</h2>
                        <div class="mt-1 flex flex-col sm:flex-row sm:flex-wrap sm:mt-0 sm:space-x-6">
                            <div class="mt-2 flex items-center text-sm text-gray-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 mr-1.5 h-5 w-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h7" />
                                </svg>
                                {{ $datas->count() }} sur {{ $datas->total() }}
                            </div>
                        </div>
                    </div>
                    <div class="mt-5 flex lg:mt-0 lg:ml-4">
                        @if (sizeof($ids) > 0)
                            <span class="hidden sm:block">
                                <button wire:click="delete()" type="button"
                                    class="inline-flex items-center px-4 py-2 border border-red-300 rounded-md shadow-sm text-sm font-medium text-white bg-red-600 hover:bg-red-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="-ml-1 mr-2 h-5 w-5 text-white"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Supprimer
                                </button>
                            </span>
                        @endif
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
                        <div class="align-middle min-w-full overflow-x-scroll shadow sm:rounded-lg">
                            <table x-data="{ 'selected': false }" class="min-w-full divide-y divide-gray-200">
                                <thead>
                                    <tr>
                                        @foreach ($columns as $col)
                                            @if ($loop->first)
                                                <th scope="col" class="relative w-12 px-6 sm:w-16 sm:px-8">
                                                    <input @click="selected = !selected" type="checkbox"
                                                        class="absolute left-4 top-1/2 -mt-2 h-4 w-4 rounded border-gray-300 text-cyan-600 focus:ring-cyan-500 sm:left-6">
                                                </th>
                                            @endif
                                            <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                                                scope="col">{{ $col }}</th>
                                        @endforeach
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($datas as $item)
                                        <tr class="bg-white hover:bg-gray-50">
                                            @foreach ($columns as $col)
                                                @if ($loop->first)
                                                    <td class="relative w-12 px-6 sm:w-16 sm:px-8">
                                                        @if(array_key_exists($item->id, $rows_selected) && $rows_selected[$item->id])
                                                        <div class="absolute inset-y-0 left-0 w-0.5 bg-cyan-600">
                                                        </div>
                                                        @endif
                                                        <input x-bind:checked="selected"
                                                            wire:model="rows_selected.{{ $item->id }}"
                                                            type="checkbox"
                                                            class="absolute left-4 top-1/2 -mt-2 h-4 w-4 rounded border-gray-300 text-cyan-600 focus:ring-cyan-500 sm:left-6">
                                                    </td>
                                                @endif
                                                <td class="px-6 py-4 text-left whitespace-nowrap text-sm text-gray-500">
                                                    <a
                                                        href="{{ route('model.show', ['model' => $model, 'id' => $item->id]) }}">
                                                        {{ $item->$col }}
                                                    </a>
                                                </td>
                                            @endforeach
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $datas->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
