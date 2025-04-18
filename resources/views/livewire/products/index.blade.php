<div>
    <x-breadcrumbs.breadcrumb title="Lista de produtos"
        :items="[
            ['label' => 'Dashboard', 'route' => route('dashboard.dropfile')],
            ['label' => 'Lista de produtos', 'route' => route('products.index')]
        ]"
    />

    <div class="flex items-end justify-end mt-3">
       <x-btn.button-link-yellow
            href="{{ route('products.create') }}"
            label="Adicionar produtos"
            icon="svg.folder-plus"
       />
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
                <tbody class="bg-[#242627] divide-y divide-[#242627]">
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 h-10 w-10">
                                <img src="{{ asset('/images/products/product-teste.jpg') }}" alt="Product" class="h-10 w-10 rounded-md">
                            </div>
                            <div class="ml-4">
                                <div class="text-sm font-medium text-gray-200">
                                    Apple AirPods Pro
                                </div>
                                <div class="text-sm text-gray-300 hidden sm:block">
                                    SKU: AP-PRO-001
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-200">R$ 189,90</div>
                        <div class="text-sm text-gray-300 hidden sm:block">Custo: R$ 140,00</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap hidden md:table-cell">
                        <div class="text-sm text-gray-200">TechDrops Inc.</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Aprovado</span>
                    </td>
                    <td class="flex items-center mt-6 ml-5 whitespace-nowrap text-sm font-medium">
                        <a href="#" class="text-yellow-600 hover:text-yellow-800 duration-300 mr-3">
                            <x-svg.pencil-square class="w-5"/>
                        </a>
                        <a href="#" class="text-yellow-600 hover:text-yellow-800 duration-300">
                            <x-svg.trash class="w-5" />
                        </a>
                    </td>
                </tr>

                <tbody class="bg-[#242627] divide-y divide-[#242627]">
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 h-10 w-10">
                                <img src="{{ asset('/images/products/product-teste.jpg') }}" alt="Product" class="h-10 w-10 rounded-md">
                            </div>
                            <div class="ml-4">
                                <div class="text-sm font-medium text-gray-200">
                                    Apple AirPods Pro
                                </div>
                                <div class="text-sm text-gray-300 hidden sm:block">
                                    SKU: AP-PRO-001
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-200">R$ 189,90</div>
                        <div class="text-sm text-gray-300 hidden sm:block">Custo: R$ 140,00</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap hidden md:table-cell">
                        <div class="text-sm text-gray-200">TechDrops Inc.</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">Em análise</span>
                    </td>
                    <td class="flex items-center mt-6 ml-5 whitespace-nowrap text-sm font-medium">
                        <a href="#" class="text-yellow-600 hover:text-yellow-800 duration-300 mr-3">
                            <x-svg.pencil-square class="w-5"/>
                        </a>
                        <a href="#" class="text-yellow-600 hover:text-yellow-800 duration-300">
                            <x-svg.trash class="w-5"/>
                        </a>
                    </td>
                </tr>
                </tbody>
                <tbody class="bg-[#242627] divide-y divide-[#242627]">
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 h-10 w-10">
                                <img src="{{ asset('/images/products/product-teste.jpg') }}" alt="Product" class="h-10 w-10 rounded-md">
                            </div>
                            <div class="ml-4">
                                <div class="text-sm font-medium text-gray-200">
                                    Apple AirPods Pro
                                </div>
                                <div class="text-sm text-gray-300 hidden sm:block">
                                    SKU: AP-PRO-001
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-200">R$ 189,90</div>
                        <div class="text-sm text-gray-300 hidden sm:block">Custo: R$ 140,00</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap hidden md:table-cell">
                        <div class="text-sm text-gray-200">TechDrops Inc.</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-200 text-red-800">
                            Recusado
                        </span>
                    </td>
                    <td class="flex items-center mt-6 ml-5 whitespace-nowrap text-sm font-medium">
                        <a href="#" class="text-yellow-600 hover:text-yellow-800 duration-300 mr-3">
                            <x-svg.pencil-square class="w-5"/>
                        </a>
                        <a href="#" class="text-yellow-600 hover:text-yellow-800 duration-300">
                            <x-svg.trash class="w-5"/>
                        </a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
