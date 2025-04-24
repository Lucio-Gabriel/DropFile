<div>
    <x-breadcrumbs.breadcrumb title="Criar produto"
        :items="[
            ['label' => 'Dashboard', 'route' => route('dashboard.dropfile')],
            ['label' => 'Lista de produtos', 'route' => route('products.index')],
            ['label' => 'Criação de produto', 'route' => route('products.create')]
        ]"
    />

    <div class="container mx-auto px-4 py-8">
        <div class="bg-[#232627] rounded-lg shadow-lg p-6">
            <form wire:submit.prevent="save" class="space-y-6">
                <div class="flex flex-col md:flex-row gap-6">
                    <div class="w-full md:w-1/3">
                        <label class="block text-gray-400 font-medium mb-2">Foto do Produto</label>
                        <div class="relative border-2 border-dashed border-gray-600 rounded-lg h-64 hover:border-yellow-500 transition-colors overflow-hidden">
                            @if ($photo_product)
                                <div class="absolute inset-0 z-10">
                                    <img src="{{ $photo_product->temporaryUrl() }}" alt="Prévia do produto" class="w-full h-full object-cover">
                                    <button
                                        type="button"
                                        wire:click="resetImage"
                                        class="absolute top-2 right-2 bg-red-500 hover:bg-red-600 text-white rounded-full p-1 transition-colors"
                                        title="Remover imagem"
                                    >
                                        <x-svg.x-circle class="w-5 h-5"/>
                                    </button>
                                </div>
                            @else
                                <label for="photo_product" class="absolute inset-0 cursor-pointer flex items-center justify-center">
                                    <div class="text-center p-4 z-10">
                                        <div class="text-gray-500 mb-2"><i class="fas fa-cloud-upload-alt text-4xl"></i></div>
                                        <p class="text-sm text-gray-400">Arraste uma imagem ou clique para fazer upload</p>
                                        <p class="text-xs text-gray-500 mt-2">PNG, JPG ou GIF (máx. 2MB)</p>
                                    </div>
                                </label>
                            @endif
                            <input
                                type="file"
                                wire:model.live="photo_product"
                                accept="image/*"
                                id="photo_product"
                                class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-20 {{ $photo_product ? 'hidden' : '' }}"
                            />
                        </div>
                        <div class="text-red-400 text-sm mt-1.5">
                            @error('photo_product') <span>{{ $message }}</span>@enderror
                        </div>
                    </div>



                    <div class="w-full md:w-2/3 space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <x-inputs.label-text>
                                    Nome do produto*
                                </x-inputs.label-text>

                                <x-inputs.input
                                    id="name"
                                    name="name"
                                    wire:model="name"
                                    type="text"
                                    placeholder="Ex: Apple AirPods Pro"
                                />

                                <div class="text-red-400 text-sm mt-1.5">
                                    @error('name') <span>{{ $message }}</span>@enderror
                                </div>
                            </div>
                            <div>
                                <x-inputs.label-text>
                                    Código do produto*
                                </x-inputs.label-text>

                                <x-inputs.input
                                    id="product-sku"
                                    name="name"
                                    wire:model="product_code"
                                    type="number"
                                    placeholder="Ex: AP-PRO-001"
                                />

                                <div class="text-red-400 text-sm mt-1.5">
                                    @error('product_code') <span>{{ $message }}</span>@enderror
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <x-inputs.label-text>
                                    Preço de Venda (R$)*
                                </x-inputs.label-text>

                                <x-inputs.input
                                    id="price"
                                    name="price"
                                    type="number"
                                    wire:model="price_sale"
                                    placeholder="Ex: 189.90"
                                />

                                <div class="text-red-400 text-sm mt-1.5">
                                    @error('price_sale') <span>{{ $message }}</span>@enderror
                                </div>
                            </div>
                            <div>
                                <x-inputs.label-text>
                                    Preço do produto (R$)*
                                </x-inputs.label-text>

                                <x-inputs.input
                                    id="product-cost"
                                    name="name"
                                    type="number"
                                    wire:model="price_product"
                                    placeholder="Ex: 140.00"
                                />

                                <div class="text-red-400 text-sm mt-1.5">
                                    @error('price_product') <span>{{ $message }}</span>@enderror
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <x-inputs.label-text>
                                    Fornecedor*
                                </x-inputs.label-text>

                                <x-inputs.input
                                    id="supplier"
                                    name="supplier"
                                    wire:model="supplier"
                                    type="text"
                                    placeholder="Ex: TechDrops Inc."
                                />

                                <div class="text-red-400 text-sm mt-1.5">
                                    @error('supplier') <span>{{ $message }}</span>@enderror
                                </div>
                            </div>
                            <div>
                                <x-inputs.label-text>
                                    Status*
                                </x-inputs.label-text>

                                <select
                                    class="w-full bg-gray-950 border border-gray-600 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-500"
                                    id="product_status"
                                    wire:model.change="product_status"
                                >
                                    <option value="">Selecione um status...</option>
                                    @foreach(App\Enums\ProductStatus::toSelection() as $status)
                                        <option value="{{ $status->value }}">{{ $status->toLabel() }}</option>
                                    @endforeach
                                </select>

                                <div class="text-red-400 text-sm mt-1.5">
                                    @error('product_status') <span>{{ $message }}</span>@enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <x-inputs.label-text>
                            Link do Vídeo
                        </x-inputs.label-text>

                        <div class="relative">
                              <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-500">
                                <x-svg.tiktok/>
                              </span>

                            <x-inputs.input
                                class="pl-10"
                                id="product_video_link"
                                name="product_video_link"
                                wire:model="product_video_link"
                                type="url"
                                placeholder="TikTok, Facebook Ads, YouTube, etc."
                            />

                            <div class="text-red-400 text-sm mt-1.5">
                                @error('product_video_link') <span>{{ $message }}</span>@enderror
                            </div>
                        </div>
                    </div>
                    <div>
                        <x-inputs.label-text>
                            Link da Loja
                        </x-inputs.label-text>

                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-500">
                                <x-svg.amazon/>
                            </span>

                            <x-inputs.input
                                class="pl-10"
                                id="store_link"
                                name="store_link"
                                wire:model="store_link"
                                type="url"
                                placeholder="AliExpress, Shopee, Amazon, etc."
                            />

                            <div class="text-red-400 text-sm mt-1.5">
                                @error('store_link') <span>{{ $message }}</span>@enderror
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <x-inputs.label-text>
                        Descrição do Produto
                    </x-inputs.label-text>

                    <x-inputs.textarea
                        id="description"
                        name="description"
                        wire:model="description"
                        placeholder="Descrição detalhada do produto..."
                    />

                    <div class="text-red-400 text-sm mt-1.5">
                        @error('description') <span>{{ $message }}</span>@enderror
                    </div>
                </div>

                <div class="flex justify-end space-x-4 pt-4">
                    <x-btn.button-link-white
                        href="{{ route('products.index') }}"
                    >
                        Cancelar
                    </x-btn.button-link-white>

                    <x-btn.button-submit type="submit" :icon="'svg.check'">
                        Salvar
                    </x-btn.button-submit>
                </div>
            </form>
        </div>
    </div>
</div>
