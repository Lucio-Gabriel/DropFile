<?php

namespace App\Livewire\Products;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class Create extends Component
{
    public function render(): View
    {
        return view('livewire.products.create');
    }
}
