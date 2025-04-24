<?php

namespace App\Livewire\Products;

use App\Enums\ProductStatus;
use App\Models\Product;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    #[Validate]
    public $photo_product;

    #[Validate]
    public string $name = '';

    #[Validate]
    public int $product_code;

    #[Validate]
    public int $price_sale;

    #[Validate]
    public int $price_product;

    #[Validate]
    public string $supplier = '';

    #[Validate]
    public string $description = '';

    #[Validate]
    public string $product_status;

    #[Validate]
    public string $product_video_link = '';

    #[Validate]
    public string $store_link = '';

    protected function rules(): array
    {
        return [
            'photo_product' => 'nullable|image|max:1024',
            'name' => 'required|min:3|max:255',
            'product_code' => 'required|min:3|max:255',
            'price_sale' => 'required|numeric|min:0',
            'price_product' => 'required|numeric|min:0',
            'supplier' => 'min:3|max:255|nullable',
            'description' => 'min:3|max:255|nullable',
            'product_status' => 'required|in:'.ProductStatus::toRule(),
            'product_video_link' => 'max:255|nullable',
            'store_link' => 'max:255|nullable',
        ];
    }

    protected function messages(): array
    {
        return [
            'photo_product.image' => 'A imagem do produto deve ser um arquivo do tipo imagem.',
            'photo_product.max' => 'A imagem do produto não pode ter mais que 1MB.',

            'name.required' => 'O nome do produto é obrigatório.',
            'name.min' => 'O nome do produto deve ter no mínimo 3 caracteres.',
            'name.max' => 'O nome do produto deve ter no máximo 255 caracteres.',

            'product_code.required' => 'O código do produto é obrigatório.',
            'product_code.min' => 'O código do produto deve ter no mínimo 3 caracteres.',
            'product_code.max' => 'O código do produto deve ter no máximo 255 caracteres.',

            'price_sale.required' => 'O preço de venda do produto é obrigatório.',
            'price_sale.numeric' => 'O preço de venda do produto deve ser um valor numérico.',
            'price_sale.min' => 'O preço de venda do produto deve ser no mínimo 0.',

            'price_product.required' => 'O preço do produto é obrigatório.',
            'price_product.numeric' => 'O preço do produto deve ser um valor numérico.',
            'price_product.min' => 'O preço do produto deve ser no mínimo 0.',

            'supplier.min' => 'O nome do fornecedor deve ter no mínimo 3 caracteres.',
            'supplier.max' => 'O nome do fornecedor deve ter no máximo 255 caracteres.',
            'supplier.nullable' => 'O fornecedor é opcional.',

            'description.min' => 'A descrição do produto deve ter no mínimo 3 caracteres.',
            'description.max' => 'A descrição do produto deve ter no máximo 255 caracteres.',
            'description.nullable' => 'A descrição do produto é opcional.',

            'product_status.required' => 'Selecione o status do produto.',
            // 'product_status.in' => 'O status do produto deve ser um dos seguintes: '. implode(', ', ProductStatus::toArray()) . '.',

            'product_video_link.max' => 'O link do vídeo do produto deve ter no máximo 255 caracteres.',
            'product_video_link.nullable' => 'O link do vídeo do produto é opcional.',

            'store_link.max' => 'O link da loja deve ter no máximo 255 caracteres.',
            'store_link.nullable' => 'O link da loja é opcional.',

        ];
    }

    public function resetImage(): void
    {
        $this->photo_product = null;
    }

    public function save(): void
    {
        $this->validate();

        $filePath = $this->photo_product ? $this->photo_product->store('products', 'public') : null;

        Product::create([
            'photo_product' => $filePath,
            'name' => $this->name,
            'product_code' => $this->product_code,
            'price_sale' => $this->price_sale,
            'price_product' => $this->price_product,
            'supplier' => $this->supplier,
            'description' => $this->description,
            'product_status' => $this->product_status,
            'product_video_link' => $this->product_video_link,
            'store_link' => $this->store_link,
        ]);

        session()->flash('toastr', [
            'type' => 'success',
            'message' => 'Produto criado com sucesso.',
        ]);

        sleep(1);
        $this->redirect(route('products.index'));

        $this->dispatch('delay-redirect');
    }

    public function render(): View
    {
        return view('livewire.products.create');
    }
}
