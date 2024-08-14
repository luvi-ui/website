@if ($paginator->hasPages())
    <nav
        role="navigation"
        aria-label="Pagination Navigation"
        class="flex gap-2"
    >
        <span>
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <button
                    type="button"
                    class="rounded-lg border px-3 py-2 bg-white font-semibold text-sm text-gray-700 hover:bg-gray-100 disabled:bg-gray-50 disabled:opacity-75 disabled:cursor-not-allowed disabled:text-gray-500"
                    disabled
                >
                    Prev
                </button>
            @else
                @if (method_exists($paginator, 'getCursorName'))
                    <button
                        type="button"
                        dusk="previousPage"
                        wire:key="cursor-{{ $paginator->getCursorName() }}-{{ $paginator->previousCursor()->encode() }}"
                        wire:click="setPage('{{ $paginator->previousCursor()->encode() }}','{{ $paginator->getCursorName() }}')"
                        wire:loading.attr="disabled"
                        class="rounded-lg border px-3 py-2 bg-white font-semibold text-sm text-gray-700 hover:bg-gray-100 disabled:bg-gray-50 disabled:opacity-75 disabled:cursor-not-allowed disabled:text-gray-500"
                    >
                        Prev
                    </button>
                @else
                    <button
                        type="button"
                        wire:click="previousPage('{{ $paginator->getPageName() }}')"
                        wire:loading.attr="disabled"
                        dusk="previousPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}"
                        class="rounded-lg border px-3 py-2 bg-white font-semibold text-sm text-gray-700 hover:bg-gray-100 disabled:bg-gray-50 disabled:opacity-75 disabled:cursor-not-allowed disabled:text-gray-500"
                    >
                        Prev
                    </button>
                @endif
            @endif
        </span>

        <span>
            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                @if (method_exists($paginator, 'getCursorName'))
                    <button
                        type="button"
                        dusk="nextPage"
                        wire:key="cursor-{{ $paginator->getCursorName() }}-{{ $paginator->nextCursor()->encode() }}"
                        wire:click="setPage('{{ $paginator->nextCursor()->encode() }}','{{ $paginator->getCursorName() }}')"
                        wire:loading.attr="disabled"
                        class="rounded-lg border px-3 py-2 bg-white font-semibold text-sm text-gray-700 hover:bg-gray-100 disabled:bg-gray-50 disabled:opacity-75 disabled:cursor-not-allowed disabled:text-gray-500"
                    >
                        Next
                    </button>
                @else
                    <button
                        type="button"
                        wire:click="nextPage('{{ $paginator->getPageName() }}')"
                        wire:loading.attr="disabled"
                        dusk="nextPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}"
                        class="rounded-lg border px-3 py-2 bg-white font-semibold text-sm text-gray-700 hover:bg-gray-100 disabled:bg-gray-50 disabled:opacity-75 disabled:cursor-not-allowed disabled:text-gray-500"
                    >
                        Next
                    </button>
                @endif
            @else
                <button
                    type="button"
                    class="rounded-lg border px-3 py-2 bg-white font-semibold text-sm text-gray-700 hover:bg-gray-100 disabled:bg-gray-50 disabled:opacity-75 disabled:cursor-not-allowed disabled:text-gray-500"
                    disabled
                >
                    Next
                </button>
            @endif
        </span>
    </nav>
@endif
