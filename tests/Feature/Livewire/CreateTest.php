<?php

use App\Livewire\Products\Create;
use App\Models\User;
use Illuminate\Http\UploadedFile;
use Livewire\Livewire;
use function Pest\Laravel\actingAs;

it('should be able a create product', function () {
   $user = User::factory()->create();

   actingAs($user);

   $photo = UploadedFile::fake()->image('photo.jpg');

   Livewire::test(Create::class)
       ->set('photo_product', $photo)
       ->set('name', 'Product Name')
       ->set('product_code', 123)
       ->set('price_sale', 100)
       ->set('price_product', 200)
       ->set('supplier', 'shopee')
       ->set('description', 'Description')
       ->set('product_status', \App\Enums\ProductStatus::Approved)
       ->set('product_video_link', 'https://www.youtube.com/watch?v=dQw4w9WgXcQ')
       ->set('store_link', 'https://store.store/products')
       ->call('save')
       ->assertSessionHas('toastr', ['type' => 'success', 'message' => 'Produto criado com sucesso.'])
       ->assertRedirect(route('products.index'))
       ->assertHasNoErrors();
});
