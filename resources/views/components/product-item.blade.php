<!-- Producto  -->
<div {{ $attributes->merge(['class' => "flex flex-col min-w-36 border-2 rounded-xl border-cm-gray-8 relative group-product"]) }}>
    <div class="divide-y-2 divide-cm-gray-8">
        <div class="flex justify-center p-1 gap-2">
            @foreach ($dataProduct['labelPaths'] as $label)
                <img class="w-5 h-auto" src="{{ asset('images/labels/' . $label) }}" alt="">
            @endforeach
        </div>
        <div class="flex w-full justify-center bg-white">
            <!-- TODO: CAMBIAR LA IMAGEN, POR LO MIENTRAS ESTÁ FIJA -->
            <img class="w-auto h-28 object-contain" src="{{ asset('images/temp/procesador-prueba.png') }}" alt="producto de prueba">
        </div>
        <div class="text-cm-gray-10 leading-4">
            <p class="line-clamp-3">{{$dataProduct['name']}}</p>
        </div>
        <div class="text-center">
            <span class="font-semibold text-xs text-cm-purple-10">{{$dataProduct['price']}}</span>
        </div>
        <div class="text-center text-white">
            <i class="{{$iconState}}"></i>
            <span class="ml-1 font-semibold text-xs">{{$contentState}}</span>
        </div>
    </div>
    <!-- Agregar a carrito || Lista deseos -->
    <button class="btn-cart-list absolute top-[-6px] right-[-10px] z-10 w-10 h-10 rounded-full border-2 {{$btnClass}}">
        <i class="{{$iconBtnClass}}"></i>
    </button>
</div>