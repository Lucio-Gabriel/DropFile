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

it('should be able validate camp photo', function () {
    $user = User::factory()->create();

    actingAs($user);

    $photo = UploadedFile::fake()->image('photo.jpg')->size(2000);

    $video = UploadedFile::fake()->image('video.mp4');

    Livewire::test(Create::class)
        ->set('photo_product', $photo)
        ->call('save')
        ->assertHasErrors(['photo_product' => 'max'])
        ->set('photo_product', $video)
        ->call('save')
        ->assertHasErrors(['photo_product' => 'image']);
});

it('should be able validate camp name', function () {
   $user = User::factory()->create();

   actingAs($user);

   Livewire::test(Create::class)
       ->set('name', '')
       ->call('save')
       ->assertHasErrors(['name' => 'required'])
       ->set('name', 'aa')
       ->call('save')
       ->assertHasErrors(['name' => 'min'])
       ->set('name', str_repeat('a', 256))
       ->call('save')
       ->assertHasErrors(['name' => 'max']);
});

it('should be able validate camp product code', function () {
    $user = User::factory()->create();

    actingAs($user);

    Livewire::test(Create::class)
        ->set('product_code', '')
        ->call('save')
        ->assertHasErrors(['product_code' => 'required'])
        ->set('product_code', 11)
        ->call('save')
        ->assertHasErrors(['product_code' => 'min']);
});

it('should be able validate camp price sale', function () {
    $user = User::factory()->create();

    actingAs($user);

    Livewire::test(Create::class)
        ->set('price_sale', '')
        ->call('save')
        ->assertHasErrors(['price_sale' => 'required']);
});

it('should be able validate camp price product', function () {
    $user = User::factory()->create();

    actingAs($user);

    Livewire::test(Create::class)
        ->set('price_product', '')
        ->call('save')
        ->assertHasErrors(['price_product' => 'required']);
});
