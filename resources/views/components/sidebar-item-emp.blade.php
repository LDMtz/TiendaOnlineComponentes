@props(['icon','route'])

<li class="mx-3 p-2 flex items-center bg-cm-gray-3 rounded-lg hover:border-x-8 border-cm-blue-6">
    <a href="{{ route($route)}}" class="text-cm-blue-9 font-bold">
        <i class="{{ $icon ?? 'fa-solid fa-user' }} text-cm-blue-9 mr-4 ml-8"></i>
        <span>{{ $slot }}</span>
    </a>
</li>