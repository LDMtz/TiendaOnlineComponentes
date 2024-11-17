<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProductItem extends Component
{
    public $dataProduct; //Lo que recibe de la view

    public $iconState;
    public $contentState;
    public $btnClass;
    public $iconBtnClass;


    /**
     * Create a new component instance.
     */
    public function __construct($dataProduct) //<- Le pasamos el id a l constructor
    {
        $this->dataProduct = $dataProduct;

        switch($dataProduct['state']){
            case true:
                $this->iconState = "fa-solid fa-check text-cm-green-1";
                $this->contentState = "CON EXISTENCIA";
                $this->btnClass = "bg-cm-green-2 border-cm-green-1 hover:bg-green-800 hover:border-green-400";
                $this->iconBtnClass = "fa-solid fa-cart-plus text-cm-green-1 text-lg";
                break;
            case false:
                $this->iconState = "fa-solid fa-xmark text-cm-red-1";
                $this->contentState = "SIN EXISTENCIA";
                $this->btnClass = "bg-cm-blue-2 border-cm-blue-7 hover:bg-sky-800 hover:border-sky-400";
                $this->iconBtnClass = "fa-solid fa-receipt text-cm-blue-7 text-lg";
                break;
            default: // Si no tiene un estado definido
                $this->iconState = "fa-solid fa-question-circle text-cm-yellow-1";
                $this->contentState = "ESTADO DESCONOCIDO";
                $this->btnClass = "bg-gray-300 border-gray-500 hover:bg-gray-600 hover:border-gray-700";
                $this->iconBtnClass = "fa-solid fa-question text-gray-500 text-lg";
                break;
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.product-item');
    }
}
