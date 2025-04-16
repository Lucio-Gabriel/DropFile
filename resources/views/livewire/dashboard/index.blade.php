<div>
    <main class="min-h-screen transition-all duration-300">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
            <div class="bg-[#242627] rounded-lg shadow p-4">
                <div class="flex items-center">
                    <div class="p-3 rounded-full bg-indigo-100 text-indigo-600">
                        <x-svg.arrow class="w-6 h-6"/>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm font-medium text-gray-200">
                            Produtos Minerados
                        </p>
                        <p class="text-2xl font-semibold text-gray-200">
                            1,247
                        </p>
                    </div>
                </div>
                <div class="mt-2">
                    <span class="text-sm text-green-600 font-medium">+5.2%</span>
                    <span class="text-sm text-gray-200 ml-1">
                        da semana passada
                    </span>
                </div>
            </div>

            <div class="bg-[#242627] rounded-lg shadow p-4">
                <div class="flex items-center">
                    <div class="p-3 rounded-full bg-green-100 text-green-600">
                        <x-svg.correct class="w-6 h-6" />
                    </div>
                    <div class="ml-4">
                        <p class="text-sm font-medium text-gray-200">
                            Prontos para Loja
                        </p>
                        <p class="text-2xl font-semibold text-gray-200">
                            582
                        </p>
                    </div>
                </div>
                <div class="mt-2">
                    <span class="text-sm text-green-600 font-medium">+3.1%</span>
                    <span class="text-sm text-gray-200 ml-1">da semana passada</span>
                </div>
            </div>

            <div class="bg-[#242627] rounded-lg shadow p-4">
                <div class="flex items-center">
                    <div class="p-3 rounded-full bg-yellow-100 text-yellow-600">
                        <x-svg.watch class="w-6 h-6" />
                    </div>
                    <div class="ml-4">
                        <p class="text-sm font-medium text-gray-200">Em Análise</p>
                        <p class="text-2xl font-semibold text-gray-200">128</p>
                    </div>
                </div>
                <div class="mt-2">
                    <span class="text-sm text-red-500 font-medium">-2.5%</span>
                    <span class="text-sm text-gray-200 ml-1">da semana passada</span>
                </div>
            </div>

            <div class="bg-[#242627] rounded-lg shadow p-4">
                <div class="flex items-center">
                    <div class="p-3 rounded-full bg-red-100 text-red-600">
                        <x-svg.watch class="w-6 h-6" />
                    </div>
                    <div class="ml-4">
                        <p class="text-sm font-medium text-gray-200">Com Problemas</p>
                        <p class="text-2xl font-semibold text-gray-200">8</p>
                    </div>
                </div>
                <div class="mt-2">
                    <span class="text-sm text-green-600 font-medium">-1.8%</span>
                    <span class="text-sm text-gray-200 ml-1">da semana passada</span>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-6">
            <div class="lg:col-span-2 bg-[#242627] rounded-lg shadow">
                <div class="px-4 py-5 border-b border-gray-200">
                    <h3 class="text-lg font-medium text-gray-200">
                        Tendência de Produtos
                    </h3>
                </div>
                <div class="p-4 h-64">
                    <canvas id="productsChart"></canvas>
                </div>
            </div>

            <div class="bg-[#242627] rounded-lg shadow">
                <div class="px-4 py-5 border-b border-gray-200">
                    <h3 class="text-lg font-medium text-gray-200">
                        Categorias Populares
                    </h3>
                </div>
                <div class="p-4">
                    <div class="mb-4">
                        <div class="flex justify-between mb-1">
                            <span class="text-sm font-medium text-gray-200">Eletrônicos</span>
                            <span class="text-sm font-medium text-gray-200">45%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-yellow-600 h-2 rounded-full" style="width: 45%"></div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="flex justify-between mb-1">
                            <span class="text-sm font-medium text-gray-200">Roupas</span>
                            <span class="text-sm font-medium text-gray-200">32%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-yellow-600 h-2 rounded-full" style="width: 32%"></div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="flex justify-between mb-1">
                            <span class="text-sm font-medium text-gray-200">Casa & Jardim</span>
                            <span class="text-sm font-medium text-gray-200">18%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-yellow-600 h-2 rounded-full" style="width: 18%"></div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="flex justify-between mb-1">
                            <span class="text-sm font-medium text-gray-200">Beleza</span>
                            <span class="text-sm font-medium text-gray-200">5%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-yellow-600 h-2 rounded-full" style="width: 5%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Products Table -->
        <div class="bg-[#242627] rounded-lg shadow mb-6">
            <div class="px-4 py-5 border-b border-gray-200 flex justify-between items-center">
                <h3 class="text-lg font-medium text-gray-200">
                    Produtos Recentes
                </h3>
                <a href="#" class="text-sm font-medium text-yellow-600 hover:text-yellow-800 duration-300">
                    Ver Todos
                </a>
            </div>
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-[#232627]">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-200 uppercase tracking-wider">Produto</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-200 uppercase tracking-wider">Preço</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-200 uppercase tracking-wider hidden md:table-cell">Fornecedor</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-200 uppercase tracking-wider">Status</th>
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
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</div>
