@switch($icon)
    @case('building')
        <svg class="w-10 h-10" fill="none" stroke="currentColor" stroke-width="1.5"
             viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M3 21h18M9 8h6M10 12h4M12 3v18"/>
        </svg>
        @break

    @case('cube')
        <svg class="w-10 h-10" fill="none" stroke="currentColor" stroke-width="1.5"
             viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M21 16V8a2 2 0 00-1-1.732l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.732l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z"/>
        </svg>
        @break

    @case('eye')
        <svg class="w-10 h-10" fill="none" stroke="currentColor" stroke-width="1.5"
             viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M2.458 12C3.732 7.943 7.523 5 12 5
                     c4.478 0 8.268 2.943 9.542 7
                     -1.274 4.057-5.064 7-9.542 7
                     -4.477 0-8.268-2.943-9.542-7z"/>
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
        </svg>
        @break
    
    @case('clipboard')
        <svg class="w-10 h-10" fill="none" stroke="currentColor" stroke-width="1.5"
            viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M9 2h6a2 2 0 012 2v2H7V4a2 2 0 012-2z"/>
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M7 6h10v14H7z"/>
        </svg>
        @break

    @default
        <div class="w-10 h-10 bg-gray-300 rounded"></div>
@endswitch
