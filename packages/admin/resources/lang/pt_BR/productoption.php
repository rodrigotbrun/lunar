<?php

return [

    'label' => 'Opção do produto',

    'plural_label' => 'Opções do produto',

    'table' => [
        'name' => [
            'label' => 'Nome',
        ],
        'label' => [
            'label' => 'Rótulo',
        ],
        'handle' => [
            'label' => 'Handle',
        ],
        'shared' => [
            'label' => 'Compartilhado',
        ],
    ],

    'form' => [
        'name' => [
            'label' => 'Nome',
        ],
        'label' => [
            'label' => 'Rótulo',
        ],
        'handle' => [
            'label' => 'Handle',
        ],
    ],

    'widgets' => [
        'product-options' => [
            'notifications' => [
                'save-variants' => [
                    'success' => [
                        'title' => 'Variante salva com sucesso!',
                    ],
                ],
            ],
            'actions' => [
                'cancel' => [
                    'label' => 'Cancelar',
                ],
                'save-options' => [
                    'label' => 'Salvar opções',
                ],
                'add-shared-option' => [
                    'label' => 'Adicionar opção compartilhada',
                    'form' => [
                        'product_option' => [
                            'label' => 'Opção do produto',
                        ],
                        'no_shared_components' => [
                            'label' => 'Nenhuma opção compartilhada disponível',
                        ],
                    ],
                ],
                'add-restricted-option' => [
                    'label' => 'Adicionar opção',
                ],
            ],
            'options-list' => [
                'empty' => [
                    'heading' => 'Nenhuma opção de produto configurada',
                    'description' => 'Adicione uma opção compartilhada ou restrita do produto para começar gerar as variantes.',
                ],
            ],
            'options-table' => [
                'title' => 'Opções do produto',
                'configure-options' => [
                    'label' => 'Configurar opções',
                ],
                'table' => [
                    'option' => [
                        'label' => 'Opção',
                    ],
                    'values' => [
                        'label' => 'Valor',
                    ],
                ],
            ],
            'variants-table' => [
                'title' => 'Variantes do produto',
                'actions' => [
                    'create' => [
                        'label' => 'Criar Variante',
                    ],
                    'edit' => [
                        'label' => 'Editar',
                    ],
                    'delete' => [
                        'label' => 'Deletar',
                    ],
                ],
                'empty' => [
                    'heading' => 'Nenhuma variante configurada',
                ],
                'table' => [
                    'new' => [
                        'label' => 'NOVO',
                    ],
                    'option' => [
                        'label' => 'Opção',
                    ],
                    'sku' => [
                        'label' => 'SKU',
                    ],
                    'price' => [
                        'label' => 'Preço',
                    ],
                    'stock' => [
                        'label' => 'Estoque',
                    ],
                ],
            ],
        ],
    ],

];
