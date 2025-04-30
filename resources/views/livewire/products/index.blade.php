<div>
    <x-breadcrumbs.breadcrumb title="Lista de produtos"
        :items="[
            ['label' => 'Dashboard', 'route' => route('dashboard.dropfile')],
            ['label' => 'Lista de produtos', 'route' => route('products.index')]
        ]"
    />

    <div class="flex items-end justify-end mt-3">
        <x-btn.button-link-yellow
            wire:navigate
            href="{{ route('products.create') }}"
            icon="svg.folder-plus"
        >
            Adicionar produtos
        </x-btn.button-link-yellow>
    </div>

    <div class="bg-[#242627] rounded-lg shadow mt-4">
        <div class="px-4 py-5 border-b border-gray-200 flex justify-between items-center">
            <h3 class="text-lg font-medium text-gray-200">
                Produtos Recentes
            </h3>

            <div class="relative">
                <x-inputs.search
                    id="product-search"
                    type="search"
                    placeholder="Buscar produtos..."
                    icon="svg.search"
                />
            </div>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-[#232627]">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-200 uppercase tracking-wider">Produto</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-200 uppercase tracking-wider">Preço</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-200 uppercase tracking-wider hidden md:table-cell">Fornecedor</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-200 uppercase tracking-wider">Status</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-200 uppercase tracking-wider">Ações</th>
                </tr>
                </thead>
                @foreach ($this->products as $product)
                    <tbody class="bg-[#242627] divide-y divide-[#242627]">
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 h-10 w-10">
                                    <img src="{{ asset('/images/products/product-teste.jpg') }}" alt="Product" class="h-10 w-10 rounded-md">
                                </div>
                                <div class="ml-4">
                                    <div class="text-sm uppercase font-medium text-gray-200">
                                        {{ $product->name }}
                                    </div>
                                    <div class="text-sm text-gray-300 hidden sm:block">
                                        CÓD: {{ $product->product_code }}
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-200">
                                R$ {{ $product->price_sale }}
                            </div>
                            <div class="text-sm text-gray-300 hidden sm:block">
                                Custo: R$ {{ $product->price_product }}
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap hidden md:table-cell">
                            <div class="text-sm text-gray-200">
                                {{ $product->supplier }}
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                {{ $product->product_status }}
                            </span>
                        </td>
                        <td class="flex items-center mt-6 ml-5 whitespace-nowrap text-sm font-medium">
                            <a href="#" class="text-yellow-600 hover:text-yellow-800 duration-300 mr-3">
                                <x-svg.pencil-square class="w-5"/>
                            </a>
                            <button wire:click="delete({{ $product->id }})" class="text-yellow-600 hover:text-yellow-800 duration-300">
                                <x-svg.trash class="w-5" />
                            </button>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
