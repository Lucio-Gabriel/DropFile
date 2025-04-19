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
            <form class="space-y-6">
                <div class="flex flex-col md:flex-row gap-6">
                    <div class="w-full md:w-1/3">
                        <label class="block text-gray-400 font-medium mb-2">Foto do Produto</label>
                        <div class="border-2 border-dashed border-gray-600 rounded-lg h-64 flex items-center justify-center cursor-pointer hover:border-yellow-500 transition-colors">
                            <div class="text-center p-4">
                                <div class="text-gray-500 mb-2"><i class="fas fa-cloud-upload-alt text-4xl"></i></div>
                                <p class="text-sm text-gray-400">Arraste uma imagem ou clique para fazer upload</p>
                                <p class="text-xs text-gray-500 mt-2">PNG, JPG ou GIF (máx. 2MB)</p>
                            </div>
                            <input type="file" class="hidden" accept="image/*">
                        </div>
                    </div>

                    <div class="w-full md:w-2/3 space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <x-inputs.label-text>
                                    Nome do produto*
                                </x-inputs.label-text>

                                <x-inputs.input
                                    id="product-name"
                                    name="name"
                                    type="text"
                                    placeholder="Ex: Apple AirPods Pro"
                                />
                            </div>
                            <div>
                                <x-inputs.label-text>
                                    Código do produto*
                                </x-inputs.label-text>

                                <x-inputs.input
                                    id="product-sku"
                                    name="name"
                                    type="text"
                                    placeholder="Ex: AP-PRO-001"
                                />
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <x-inputs.label-text>
                                    Preço de Venda (R$)*
                                </x-inputs.label-text>

                                <x-inputs.input
                                    id="product-price"
                                    name="name"
                                    type="number"
                                    placeholder="Ex: 189.90"
                                />
                            </div>
                            <div>
                                <x-inputs.label-text>
                                    Preço de Custo (R$)*
                                </x-inputs.label-text>

                                <x-inputs.input
                                    id="product-cost"
                                    name="name"
                                    type="number"
                                    placeholder="Ex: 140.00"
                                />
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <x-inputs.label-text>
                                    Fornecedor*
                                </x-inputs.label-text>

                                <x-inputs.input
                                    id="product-supplier"
                                    name="name"
                                    type="text"
                                    placeholder="Ex: TechDrops Inc."
                                />
                            </div>
                            <div>
                                <x-inputs.label-text>
                                    Status*
                                </x-inputs.label-text>

                                <select id="produto-status" class="w-full bg-gray-950 border border-gray-600 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-500">
                                    <option value="" disabled selected>Selecione um status</option>
                                    <option value="aprovado">Aprovado</option>
                                    <option value="em_analise">Em análise</option>
                                    <option value="recusado">Recusado</option>
                                </select>
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
                                id="product-video"
                                name="name"
                                type="url"
                                placeholder="TikTok, Facebook Ads, YouTube, etc."
                            />
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
                                id="product-store"
                                name="name"
                                type="url"
                                placeholder="AliExpress, Shopee, Amazon, etc."
                            />
                        </div>
                    </div>
                </div>

                <div>
                    <x-inputs.label-text>
                        Descrição do Produto
                    </x-inputs.label-text>

                    <x-inputs.textarea
                        name="description"
                        placeholder="Descrição detalhada do produto..."
                    />
                </div>

                <div class="flex justify-end space-x-4 pt-4">
                    <x-btn.button-link-white
                        href="{{ route('products.index') }}"
                    >
                        Cancelar
                    </x-btn.button-link-white>

                    <x-btn.button-submit :icon="'svg.check'">
                        Salvar
                    </x-btn.button-submit>
                </div>
            </form>
        </div>
    </div>
</div>
