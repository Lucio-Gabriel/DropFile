<?php

namespace App\Livewire\Products;

use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Attributes\Computed;
use Livewire\Component;

class Index extends Component
{
    #[Computed]
    public function products(): Collection
    {
        return Product::get();
    }

    public function delete(int $productId): void
    {
        Product::findOrFail($productId)->delete();
    }

    public function render(): View
    {
        return view('livewire.products.index');
    }
}
