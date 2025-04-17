<div>
    <div>
        <h1 class="text-2xl font-semibold">
            Lista de produtos
        </h1>

        <div class="flex gap-1.5 mt-2">
            <x-svg.home class="w-4" />

            <a
                wire:navigate
                class="text-xs font-normal"
                href="{{ route('dashboard.dropfile') }}"
            >
                Dashboard
            </a>
        </div>
    </div>

    <div class="flex items-end justify-end">
        <a
            class="flex gap-1 bg-yellow-600 hover:bg-yellow-800 duration-300 px-3 py-2 font-normal shadow-2xl rounded-sm"
            href="#"

        >
            <x-svg.folder-plus class="w-6" />
            Adicionar produto
        </a>
    </div>

    <div class="bg-[#242627] rounded-lg shadow mt-4">
        <div class="px-4 py-5 border-b border-gray-200 flex justify-between items-center">
            <h3 class="text-lg font-medium text-gray-200">
                Produtos Recentes
            </h3>

            <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
                <input type="search" id="product-search" class="block w-full p-2 pl-10 text-sm bg-[#1e2021] border border-gray-600 rounded-lg text-gray-200 focus:ring-blue-500 focus:border-blue-500" placeholder="Buscar produtos...">
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
