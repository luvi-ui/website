@if ($paginator->hasPages())
    <div class="flex items-center space-x-6 lg:space-x-8">
        <div class="flex w-[100px] items-center justify-center text-sm font-medium">
            Page {{ $paginator->currentPage() }} of {{ $paginator->lastPage() }}
        </div>
        <div class="flex items-center space-x-2">
            <nav
                role="navigation"
                aria-label="Pagination Navigation"
                class="flex gap-2"
            >
                <x-button
                    class="size-8 p-0"
                    variant="outline"
                    wire:click="gotoPage(1)"
                    :disabled="$paginator->onFirstPage()"
                >
                    <x-lucide-chevrons-left class="size-4" />
                </x-button>
                <span>
                    {{-- Previous Page Link --}}
                    @if ($paginator->onFirstPage())
                        <x-button
                            variant="outline"
                            class="size-8 p-0"
                            disabled
                        >
                            <x-lucide-chevron-left class="size-4" />
                        </x-button>
                    @else
                        @if (method_exists($paginator, 'getCursorName'))
                            <x-button
                                variant="outline"
                                class="size-8 p-0"
                                dusk="previousPage"
                                wire:key="cursor-{{ $paginator->getCursorName() }}-{{ $paginator->previousCursor()->encode() }}"
                                wire:click="setPage('{{ $paginator->previousCursor()->encode() }}','{{ $paginator->getCursorName() }}')"
                                wire:loading.attr="disabled"
                            >
                                <x-lucide-chevron-left class="size-4" />
                            </x-button>
                        @else
                            <x-button
                                variant="outline"
                                class="size-8 p-0"
                                wire:click="previousPage('{{ $paginator->getPageName() }}')"
                                wire:loading.attr="disabled"
                                dusk="previousPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}"
                            >
                                <x-lucide-chevron-left class="size-4" />
                            </x-button>
                        @endif
                    @endif
                </span>

                <span>
                    {{-- Next Page Link --}}
                    @if ($paginator->hasMorePages())
                        @if (method_exists($paginator, 'getCursorName'))
                            <x-button
                                class="size-8 p-0"
                                variant="outline"
                                dusk="nextPage"
                                wire:key="cursor-{{ $paginator->getCursorName() }}-{{ $paginator->nextCursor()->encode() }}"
                                wire:click="setPage('{{ $paginator->nextCursor()->encode() }}','{{ $paginator->getCursorName() }}')"
                                wire:loading.attr="disabled"
                            >
                                <x-lucide-chevron-right class="size-4" />
                            </x-button>
                        @else
                            <x-button
                                class="size-8 p-0"
                                variant="outline"
                                wire:click="nextPage('{{ $paginator->getPageName() }}')"
                                wire:loading.attr="disabled"
                                dusk="nextPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}"
                            >
                                <x-lucide-chevron-right class="size-4" />
                            </x-button>
                        @endif
                    @else
                        <x-button
                            class="size-8 p-0"
                            variant="outline"
                            disabled
                        >
                            <x-lucide-chevron-right class="size-4" />
                        </x-button>
                    @endif
                </span>

                <x-button
                    class="size-8 p-0"
                    variant="outline"
                    wire:click="gotoPage({{ $paginator->lastPage() }})"
                    :disabled="$paginator->onLastPage()"
                >
                    <x-lucide-chevrons-right class="size-4" />
                </x-button>
            </nav>
        </div>
    </div>
@endif
