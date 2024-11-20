@props(['type', 'content'])

<td class="py-3 border-b border-cm-gray-5">
    @if($type === 'state')
        <!-- Celda de estado, recibe un bool -->
        @if($content)
            <!-- Si el estado es 'true' -->
            <span class="inline-flex items-center justify-center space-x-2 px-3 py-0.5 rounded-lg bg-cm-green-3 text-cm-green-4">
                <i class="fa-solid fa-circle text-xs"></i>
                <p class="font-bold text-xs">ACTIVO</p>
            </span>
        @else
            <!-- Si el estado es 'false' -->
            <span class="inline-flex items-center justify-center space-x-2 px-3 py-0.5 rounded-lg bg-cm-red-1 text-cm-red-3">
                <i class="fa-solid fa-circle text-xs"></i>
                <p class="font-bold text-xs">INACTIVO</p>
            </span>
        @endif
    @elseif($type === 'actions')
        <!-- Celda con botones -->
        <div class="space-x-1">
            <a href="{{ route($content['section'] . '_show', ['id' => $content['id']]) }}" class="inline-flex items-center p-1.5 rounded-md bg-cm-purple-7">
                <i class="fa-solid fa-eye text-cm-purple-8"></i>
            </a>
            <a href="{{ route($content['section'] . '_edit', ['id' => $content['id']]) }}" class="inline-flex items-center p-1.5 rounded-md bg-cm-blue-5">
                <i class="fa-solid fa-pen-to-square text-cm-blue-6"></i>
            </a>
            <a href="{{ route($content['section'] . '_destroy', ['id' => $content['id']]) }}" class="inline-flex items-center p-1.5 rounded-md bg-cm-red-1">
                <i class="fa-solid fa-trash-can text-cm-red-3"></i>
            </a>
        </div>
    @else
        <!-- Celda normal con texto o valor -->
        <span>{{ $content }}</span>
    @endif
</td>